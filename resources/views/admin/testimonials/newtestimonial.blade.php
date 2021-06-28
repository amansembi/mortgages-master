@extends('layouts/adminlayout')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Text Editors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add post</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="row">
            <div class="col-sm-7"><div class="card-header"> <h3 class="card-title"> Add New Testimonial  </h3>  </div></div>
            <div class="col-sm-5">
              <div class="alert alert-success ajax_msg" style="display:none;">
                <button class="close" data-dismiss="alert">x</button>
                <strong></strong>
              </div>             
            </div>
			
          </div>
		   @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}  </p>
          @endforeach
          @endif
		  <div class="card-body">
		   @if(Session::get('testimonial'))       
              <div class="alert alert-success">
                <button class="close" data-dismiss="alert">x</button>
                <strong>{{Session::get('testimonial')}}    </strong>
              </div>
              @endif
           <form role="form" action="{{route('addtestimonial')}}" enctype="multipart/form-data" method="post">
             @csrf
             <div class="row">
               <div class="col-md-8">
                <div class="form-group">
                  <label for="fullname">Full name</label>
                  <input type="text" class="form-control" id="fullname" value="{{old('fullname')}}" name="fullname" placeholder="Enter full name">
                </div>
				
				<div class="form-group">                        
				 <label for="company-name">Email</label>                            
					  <input class="form-control"  id="email" type="email" value="{{old('email')}}" name="email" placeholder="Enter email">                           
				</div> 
						
				<div class="form-group">
                  <label for="company-name">Company name</label>
                  <input type="text" class="form-control" id="company-name" value="{{old('companyName')}}" name="companyName" placeholder="Enter company name">
                </div>
				
				<div class="form-group">
                  <label for="company-website">Company website</label>
                  <input type="text" class="form-control" id="company-website" value="{{old('companyWebsite')}}" name="companyWebsite" placeholder="Enter company website">
                </div>

				<div class="form-group">
                  <label for="company-website">heading</label>
                  <input type="text" class="form-control" id="heading" value="{{old('heading')}}" name="heading" placeholder="Enter heading">
                </div>

                <div class="form-group">
                  <div class="card-body pad testimonial p-0 custom-editor">
				  <label for="company-website">Testimonial</label>
                    <textarea class="textarea testimonial" name="testimonial" value="{{old('testimonial')}}" placeholder="Enter testimonial" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('testimonial')}}</textarea>           
                  </div>
                </div>
              </div>
              
              <div class="col-md-4">
               <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="checkPublish" id="checkPublish" name="checkPublish">
                  <label class="form-check-label" for="checkPublish">Want to publish</label>
                </div>
              </div>
              <div class="form-group">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Publish</button>
                </div>
              </div>
              <div class="form-group">
                <div class="post-image" style="display:none;">
                  <img id="postimage" class="editimage postimage" src="" alt="your image" />
                </div>
              </div>

              <div class="form-group">
                <label>Featured Image </label>
                <div class="custom-file">
                  <input type="file" name="image"  class="custom-file-input" id="customFile" onchange="readURL(this);">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
			  <script>
              function readURL(input) {
                $('.post-image').show();
                if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                    $('#postimage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
                  };

                  reader.readAsDataURL(input.files[0]);
                }
              }


            </script>

          </div>
        </div><!-- card-header -->
      </form>
      
    </div>
  </div><!-- col-->
</div><!-- row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection