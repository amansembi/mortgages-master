@extends('layouts/adminlayout')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Testimonial Tables</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Testimonial Table</li>
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
					
				  	@if(Session::get('deletetestimonial'))			  
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">x</button>
						<strong>{{Session::get('deletetestimonial')}}		</strong>
					</div>
					@endif
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>S. No.</th>
									<th>Featured Image</th>
									<th>Full Name</th>
									<th>Heading</th>
									<th>Slug</th>
									<th>Email</th>
									<th>company Name</th>
									<th>company Website</th>
								</tr>
							</thead>
							<tbody>
							@php $count = 1  @endphp
								@foreach($alltestimonials as $testimonial)
																		
									<tr>
										<td><span>{{$testimonial->id}}. </span><a href="{{URL::to('admin/alltestimonial/edittestimonial/' . $testimonial->id)}}">Edit</a>|<a href="{{URL::to('admin/alltestimonial/deletetestimonial/' . $testimonial->id)}}">Delete</a></td>
										<td><img src="{{url($testimonial->image)}}" style="with:100px; height:100px;"/></td>
										<td>{{$testimonial->fullname}}</td>
										<td>{{$testimonial->heading}}</td>
										<td>{{$testimonial->slug}}</td>
										<td>{{$testimonial->email}}</td>
										<td>{{$testimonial->companyName}}</td>
										<td>{{$testimonial->companyWebsite}}</td>									
									</tr>
										@php	$count = $count + 1 @endphp
								@endforeach								
							</tbody>
							<tfoot>
								<tr>
									<th>S. No.</th>
									<th>Featured Image</th>
									<th>Full Name</th>
									<th>Heading</th>
									<th>Slug</th>
									<th>Email</th>
									<th>company Name</th>
									<th>company Website</th>
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