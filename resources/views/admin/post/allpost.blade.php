@extends('layouts/adminlayout')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>DataTables</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">DataTables</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">DataTable with default features</h3>
					</div>
					@if(Session::get('updatedata'))			  
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">x</button>
						<strong>{{Session::get('updatedata')}}		</strong>
					</div>
					@endif
					@if(Session::get('deletedata'))			  
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">x</button>
						<strong>{{Session::get('deletedata')}}		</strong>
					</div>
					@endif
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>S. No.</th>
									<th>Featured Image</th>
									<th>Title</th>
									<th>Sub Title</th>
									<th>Slug</th>
									<th>Categories</th>
								</tr>
							</thead>
							<tbody>
							@php
							$count = 1 
							@endphp
								@foreach($posts as $post)
										@php	
											$postArrycat = json_decode($post->category, true)									
										@endphp									
									<tr>
										<td><span>{{$count}}. </span><a href="{{URL::to('admin/post/editpost/' . $post->id)}}">Edit</a>|<a href="{{URL::to('admin/post/deletepost/' . $post->id)}}">Delete</a></td>
										<td><img src="{{url($post->postimage)}}" style="with:100px; height:100px;"/></td>
										<td>{{$post->title}}</td>
										<td>{{$post->subtitle}}</td>
										<td> {{$post->slug}}</td>
										<td>@foreach($postArrycat as $temp) 
										{{$temp}},  
										@endforeach </td>
									</tr>
										@php	$count = $count + 1 @endphp
								@endforeach								
							</tbody>
							<tfoot>
								<tr>
									<th>S. No.</th>
									<th>Featured Image</th>
									<th>Title</th>
									<th>Sub Title</th>
									<th>Slug</th>
									<th>Categories</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
