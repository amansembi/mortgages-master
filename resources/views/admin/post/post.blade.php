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
            <div class="col-sm-7"><div class="card-header"> <h3 class="card-title"> Add new title  </h3>  </div></div>
            <div class="col-sm-5">
              <div class="alert alert-success ajax_msg" style="display:none;">
                <button class="close" data-dismiss="alert">x</button>
                <strong></strong>
              </div>
              @if(Session::get('postdata'))       
              <div class="alert alert-success">
                <button class="close" data-dismiss="alert">x</button>
                <strong>{{Session::get('postdata')}}    </strong>
              </div>
              @endif
            </div>
          </div>
          
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}  </p>
          @endforeach
          @endif
          <div class="card-body">


           <form role="form" action="{{route('admin/post')}}" enctype="multipart/form-data" method="post">
             @csrf
             <div class="row">
               <div class="col-md-8">
                <div class="form-group">
                  <label for="posttitle">Title</label>
                  <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                  <label for="subtitle">Sub Title</label>
                  <input type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}" name="subtitle" placeholder="Enter Sub Title">
                </div>

                <div class="form-group">
                  <div class="card-body pad description p-0 custom-editor">
                    <textarea class="textarea description" name="description" value="{{old('description')}}" placeholder="Enter description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('description')}}</textarea>           
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
                  <input type="file" name="postimage"  class="custom-file-input" id="customFile" onchange="readURL(this);">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>

              <div class="card categories-card-sec">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    <label>Categories</label>
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div><!-- tools -->
                </div><!-- card-header -->

                <div class="card-body pt-0">
                  <div class="form-group">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Categories</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Most Used</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="cat-scrill-dv h-scroll-dv">
                          <div class="select-group p-2 all_cat">
                            @php $key = 1 @endphp
							 @php $key1 = 1 @endphp
                            @foreach($category as $cat)   
                            <div class="radio radio-p">
                              <input id="allCat-{{$key}}" class="radio_inputvalue" name="postCat[ ]" type="checkbox" value="{{$cat->cattitle}}">
                              <label for="allCat-{{$key}}" class="radio-label">{{$cat->cattitle}}</label>											
										@if($cat->subcattitle != '0')
											@php $categories = json_decode($cat->subcattitle, true) @endphp											
											@foreach($categories as $info)
										<div class="radio">
											<input id="subcat{{$key1}}" class="radio_inputvalue sub-radio" name="subcatval[ ]" type="checkbox" value="{{$info}}">
											<label for="subcat{{$key1}}" class="radio-label">{{$info}}</label>
										  </div>
										    @php $key1= $key1 + 1 @endphp
										  @endforeach
										  @endif                           
                            </div>
                            @php $key= $key + 1 @endphp
                            @endforeach                   
                          </div>
                        </div><!-- cat-scrill-dv -->
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="cat-scrill-dv h-scroll-dv">
                          <div class="select-group p-2 most_cat">
                           @php $key1 = 1 @endphp
                           @foreach($category as $cat1)  
                           <div class="radio">
                            <input id="mCat-{{$key}}" name="postCat[ ]" type="checkbox" value="{{$cat->cattitle}}">
                            <label for="mCat-{{$key}}" class="radio-label">{{$cat1->cattitle}}</label>
                          </div>
                          @php $key1= $key1 + 1 @endphp
                          @endforeach                             
                        </div>
                      </div><!-- cat-scrill-dv -->            
                    </div>                    
                  </div><!-- tab-content -->
                  <div class="new-cat-input-bx my-3">
                    <a class="new-cat-btn" href="javascript:void(0);">+Add New Category</a>
                    <div class="new-cat-input display-none">
                      <input type="text" name="new_cat" class="form-control" id="new_cat">
                    </div>
                  </div>
                  {!! csrf_field() !!}
                  <select class="cat-select form-control" name="parent_cat">
                    <option> -Parent categories- </option>
                    @foreach($category as $parentcat)
                    <option value="{{$parentcat->cattitle}}">{{$parentcat->cattitle}}</option>
                    @endforeach
                  </select>

                  <button type="button" class="common-btn add_new_cat mt-4">Add More Category</button>

                </div><!-- form-group -->
              </div><!-- card-body -->
            </div><!-- card -->
            <script>

              $(document).ready(function(){
                $('.add_new_cat').click(function(){
                  var new_cat_value = $('#new_cat').val();
                  var token = $('.card-body input[name="_token"]').val();
                  var parentcat = $('.cat-select').find(":selected").text();
                  var numItems = $('.all_cat .radio').length;
                  numItems = numItems+1;
                  parentcat = parentcat.trim();
                  
                  if(new_cat_value){
                    $.ajax({
                      url: '{{url("admin/postNewCategory")}}',
                      type: 'POST',
                      data: { _token: token, new_cat_value : new_cat_value, parentcatvalue : parentcat },
                //dataType: 'json',
                success: function( data ) {
					//alert(data);
					console.log(data);
                  $('.alert.ajax_msg').show();
                  $('.alert.ajax_msg strong').html(data);
                  $('.all_cat .radio:last').after('<div class="radio"><input id="allCat-'+numItems+'" class="radio_inputvalue" name="postCat[ ]" type="checkbox" value="'+new_cat_value+'"><label for="allCat-'+numItems+'" class="radio-label">'+new_cat_value+'</label></div>');
                  
                  

                }, error:function(){ 
                  $('.alert.ajax_msg').show();
                  $('.alert.ajax_msg strong').html(data);
                }       
              });
                  }else{
                    $('.alert.ajax_msg').show();
                    $('.alert.ajax_msg strong').html("Plaese add new category");
                  }
                });
              });
            </script>

            <div class="card tag-card-sec">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <label>Tags</label>
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div><!-- tools -->
              </div><!-- card-header -->

              <div class="card-body pt-0">
                <div class="tag-input-bx d-flex">
                  <div class="input-bx tag_value">
                    <input type="text" class="form-control new-tag" id="tags">
                    {!! csrf_field() !!}
                  </div>
                  <div class="submit">
                    <button type="button" class="common-btn h-100 add_new_tag">Add</button>
                  </div>
                </div><!-- tag-input-bx -->

                <i>separate tags with commas</i>

                <div class="tag-results d-flex flex-wrap scroll-div-bx h-scroll-dv">
                  @foreach($posttag as $tags)       
                  <div class="alert fade show py-0 px-2 append_value" role="alert">
                    <input type="hidden" name="tags[ ]" class="form-control new-tag" value="{{$tags->tagtitle}}" id="tags">
                    {{$tags->tagtitle}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endforeach
                </div>

              </div><!-- card-body -->
            </div><!-- card -->
            <script>

              $(document).ready(function(){
                $('.add_new_tag').click(function(){
                  var new_tag_value = $('.tag_value .new-tag').val();
                  var tokentag = $('.tag_value input[name="_token"]').val();

                  if(new_tag_value){
                    $.ajax({
                      url: '{{url("admin/postNewTag")}}',
                      type: 'POST',
                      data: { _token: tokentag, new_tag_value : new_tag_value},             
                      success: function( data ) {                                 
                        $('.alert.ajax_msg').show();
                        $('.alert.ajax_msg strong').html(data);
                        $('.append_value:last').after('<div class="alert fade show py-0 px-2 append_value" role="alert"><input type="hidden" name="tags[ ]" class="form-control new-tag" value="'+new_tag_value+'" id="tags">'+new_tag_value+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                      }, error:function(){                  
                        $('.alert.ajax_msg').show();
                        $('.alert.ajax_msg strong').html(data);
                      }       
                    });
                  }else{
                    $('.alert.ajax_msg').show();
                    $('.alert.ajax_msg strong').html("Plaese add new category");
                  }
                });
              });

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