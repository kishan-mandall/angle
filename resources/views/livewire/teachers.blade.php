<div>
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
					<a href="{{Route('teacher.trash')}}" class="btn btn-info"><span>Trash</span></a>
						<a href="{{Route('add.student')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add students</span></a>
						<a href="javascript:void(0);" class="btn btn-danger" wire:click="addNewTeache()"><i class="material-icons">&#xE147;</i> <span>Add Teacher</span></a>	
					</div>
				</div>
			</div>
			@if(request()->route()->getName()=='index')
			<h4>Students</h4>
			@else
			<h4>Teacher</h4>
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
							<a href="javascript:void(0);" wire:click="EditTeacher('{{$stnd->teacherId}}')" class="edit btn-sm btn btn-primary" data-toggle="modal">Edit</a>
							<a href="javascript:void(0);" wire:click="MoveToTrash('{{$stnd->teacherId}}')" class="delete btn-sm btn btn-danger" data-toggle="modal">Trash</a>
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


@if($teacherModel)
<!-- Edit Modal HTML -->
<div class="modal-backdrop fade show"></div> 
<div id="editEmployeeModal" class="modal fade show" style="display: block; padding-right: 17px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Teachers</h4>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" wire:model="teacherName" class="form-control" required>
						@error('teacherName')<span class="text-danger error">{{$message}}</span> @enderror
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" wire:click="closeModel" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" wire:click="saveTeacher" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
@endif


</div>
