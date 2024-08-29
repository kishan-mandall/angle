@extends('layout.layout')
@section('content')
<div class="crud-operations">
 <div class="row">
  <div class="col-md-2 padding-0">
	@include('layout.sidebar')
  </div>
  <div class="col-md-10 padding-0">
  <div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>School <b>Management</b></h2>
					</div>
					<div class="col-sm-6">
					<a href="{{Route('teacher')}}" class="btn btn-info"><span>Main</span></a>
					</div>
				</div>
			</div>
			@if(request()->route()->getName()=='index')
			<h4>Students</h4>
			@else
			<h4>Teacher Trash</h4>
			@endif
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <th>Teacher ID</th>
						<th>Teacher Name</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
                @foreach($teacher as $stnd)    
					<tr>
                        <td>{{$stnd->teacherId}}</td>
						<td>{{$stnd->teacher_name}}</td>
						<td>
					      <div class="btn-grouped">		
                          <a href="{{url('teacher/restore/'.$stnd->teacherId)}}" class="edit btn-sm btn btn-primary">Restore</a>
                          <a href="{{url('teacher/permanent/delete/'.$stnd->teacherId)}}" class="delete btn-sm btn btn-danger">Permanent Delete</a>
						  </div>
						</td>
					</tr>
                @endforeach    
				</tbody>
			</table>
			<div class="clearfix">
                {!! $teacher->withQueryString()->links('pagination::bootstrap-5') !!}
			</div>
		</div>
	</div>
  </div>
 </div>	
	        
</div>
@endsection