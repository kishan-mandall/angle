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
					<a href="{{Route('index')}}" class="btn btn-info"><span>Main</span></a>
					</div>
				</div>
			</div>
			@if(request()->route()->getName()=='index')
			<h4>Students</h4>
			@else
			<h4>Student Trash</h4>
			@endif
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Student Name</th>
						<th>Class</th>
						<th>Admission Date</th>
						<th>Yearly Fees</th>
						<th>Teacher Guide</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
                @foreach($students as $stnd)    
					<tr>
						<td>{{$stnd->student_name}}</td>
						<td>{{Str::ucfirst($stnd->class)}}</td>
						<td>{{date("j F Y", strtotime($stnd->admission_date))}}</td>
						<td>₹{{$stnd->yearly_fees}}</td>
                        <td>{{$stnd->teacher_name}}</td>
						<td>
                        <div class="btn-grouped">		
							<a href="{{url('students/restore/'.$stnd->id)}}" class="edit btn-sm btn btn-primary">Restore</a>
							<a href="{{url('students/permanent/delete/'.$stnd->id)}}" class="delete btn-sm btn btn-danger">Permanent Delete</a>
						  </div>
						</td>
					</tr>
                @endforeach    
				</tbody>
			</table>
			<div class="clearfix">
                {!! $students->withQueryString()->links('pagination::bootstrap-5') !!}
			</div>
		</div>
	</div>
  </div>
 </div>	
	        
</div>
@endsection