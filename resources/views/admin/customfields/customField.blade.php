@extends('layouts/adminlayout')
	@section('content')
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
					<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
					<li class="breadcrumb-item active">Add custom post</li>
				  </ol>
				</div>
			  </div>
			</div><!-- /.container-fluid -->
		  </section>
		  <section class="content-header">
			  <div class="row">			  
				  <div class="container-fluid">
				  <div class="card card-outline card-info">
					<div class="col-md-5">
					@if(Session::get('custompostres'))       
				  <div class="alert alert-success">
					<button class="close" data-dismiss="alert">x</button>
					<strong>{{Session::get('custompostres')}}    </strong>
				  </div>
				  @endif
					@if(count($errors) > 0)
					  @foreach($errors->all() as $error)
					  <p class="alert alert-danger">{{$error}}  </p>
					  @endforeach
					  @endif
						<form class="custom_fields" enctype="multipart/form-data" method="post" action="{{url('admin/storeCustomField')}}">
						@csrf
							<div class="form-group">
							  <label for="posttitle">Love To Meet You</label> 
							  <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="Enter Title">
							</div>					

							<div class="form-group">
							  <div class="card-body pad description p-0 custom-editor">
								<textarea class="textarea description" name="description" value="{{old('description')}}" placeholder="Enter description" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 2px;">{{old('description')}}</textarea>           
							  </div>
							</div>
						   <div class="form-group">
								<div class="form-check">
								  <input required type="file" class="form-control" name="image1" placeholder="Add image" >
								</div>
						   </div>
						   <div class="form-group">
								<div class="form-check">
								  <input required type="file" class="form-control" name="image2" placeholder="Add image" >
								</div>
						   </div>
						   <div class="form-group">
								<div class="form-check">
								  <input required type="file" class="form-control" name="image3" placeholder="Add image" >
								</div>
						   </div>
						   <div class="form-group">
								<div class="card-footer">
								  <button type="submit" class="btn btn-primary">Save</button>
								</div>
						  </div>
					  </form>
					</div>
					</div>
				  </div>
			  </div>
		  </section>
  </div>


	@endsection