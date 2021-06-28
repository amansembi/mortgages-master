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
      <div class="col-sm-7"><div class="card-header"> <h3 class="card-title">Add New Category </h3>  </div></div>
      <div class="col-sm-5">
        @if(Session::get('data'))			 
        <div class="alert alert-success">
         <button class="close" data-dismiss="alert">x</button>
         <strong>{{Session::get('data')}}		</strong>
       </div>
       @endif  
       @if(Session::get('deletecat'))			 
       <div class="alert alert-success">
         <button class="close" data-dismiss="alert">x</button>
         <strong>{{Session::get('deletecat')}}		</strong>
       </div>
       @endif
     </div></div>
     <div class="row">
      <div class="col-md-5">
        <div class="card card-outline card-info">
         @if(count($errors) > 0)
         @foreach($errors->all() as $error)
         <p class="alert alert-danger">{{$error}}</p>
         @endforeach
         @endif
         <div class="card-body">
           <form role="form" action="{{route('admin/postCategory')}}" enctype="multipart/form-data" method="post">
             @csrf
             <div class="form-group">
              <label for="posttitle">Title</label>
              <input type="text" class="form-control" id="cattitle" name="cattitle" placeholder="Enter category title">
            </div>	
            <div class="form-group">
              <label for="posttitle">Sub Title</label>
              <input type="text" class="form-control" id="subcattitle" name="subcattitle" placeholder="Enter sub category title">
            </div>	  

	          <!-- <div class="form-group">
              <label for="slug">slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter category slug">
            </div>  -->

            <div class="form-group">
             <div class="catimage-file">
              <input type="file" class="catimage-file-input" id="customFile" name="catimage">
              <label class="catimage" for="catimage">Choose file</label>
            </div>
          </div>

        	<!--<div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>-->
          <div class="form-group">
            <div class="">
              <button type="submit" class="btn btn-primary">Publish</button>
            </div>
          </div>
        </form>

      </div><!-- col -->
    </div><!-- row -->

  </div><!-- card-body -->

  <div class="col-md-7">
   <div class="row">
     <div class="card">
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>S. No.</th>
             <th>Featured Image</th>
             <th>Category Name</th>
             <th>Sub Category</th>
             <th>Slug</th>

           </tr>
         </thead>
         <tbody>

          @foreach($allCategory as $allcat)
          <tr>
            <td><a href="{{url('admin/editCategory/'. $allcat->id)}}">Edit</a>|<a href="{{url('admin/deleteCategory/'. $allcat->id)}}">Delete</a></td>
            <td>
              @if($allcat->catimage) 
              <div class="profile-image-curcle">
                <img src="{{asset($allcat->catimage)}}" />
              </div>
              @endif
            </td>
            <td>{{$allcat->cattitle}}</td>
            <td>{{$allcat->subcattitle}}</td>
            <td> {{$allcat->slug}}</td>
          </tr>
          @endforeach

        </tbody>
        <tfoot>
         <tr>
          <th>S. No.</th>
          <th>Featured Image</th>
          <th>Category Name</th>
          <th>Sub Category</th>
          <th>Slug</th>

        </tr>
      </tfoot>
    </table>
  </div>

</div>

</div>

</div><!-- card -->
</div>

</section>
</div>
@endsection
