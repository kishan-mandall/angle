<div>
<div class="crud-operations">
 <div class="row">
  <div class="col-md-2 padding-0">
	<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
					<a href="<?php echo e(Route('teacher.trash')); ?>" class="btn btn-info"><span>Trash</span></a>
						<a href="<?php echo e(Route('add.student')); ?>" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add students</span></a>				
					</div>
				</div>
			</div>
			<!--[if BLOCK]><![endif]--><?php if(request()->route()->getName()=='index'): ?>
			<h4>Students</h4>
			<?php else: ?>
			<h4>Teacher</h4>
			<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stnd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
					<tr>
						<td><?php echo e($stnd->student_name); ?></td>
						<td><?php echo e(Str::ucfirst($stnd->class)); ?></td>
						<td><?php echo e(date("j F Y", strtotime($stnd->admission_date))); ?></td>
						<td>₹<?php echo e($stnd->yearly_fees); ?></td>
                        <td><?php echo e($stnd->teacher_name); ?></td>
						<td>
					      <div class="btn-grouped">		
						  <a href="javascript:void(0);" wire:click="viewStudent('<?php echo e($stnd->id); ?>')" class="edit btn-sm btn btn-info">View</a>
							<a href="<?php echo e(url('students/edit/'.$stnd->id)); ?>" class="edit btn-sm btn btn-primary">Edit</a>
							<a href="javascript:void(0);" wire:click="MoveToTrash('<?php echo e($stnd->id); ?>')" class="delete btn-sm btn btn-danger" data-toggle="modal">Trash</a>
						  </div>
						</td>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->    
				</tbody>
			</table>
			<div class="clearfix">
                <?php echo $students->withQueryString()->links('pagination::bootstrap-5'); ?>

			</div>
		</div>
	</div>
  </div>
 </div>	
	        
</div>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>

<!--[if BLOCK]><![endif]--><?php if($viewModel): ?>
<!-- Edit Modal HTML -->
<div class="modal-backdrop fade show"></div> 
<div id="editEmployeeModal" class="modal fade show" style="display: block; padding-right: 17px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Students Details</h4>
				</div>
				<div class="modal-body">					
				<div class="student_details" style="text-align: -webkit-center;">
				 <div class="profile-pic" style=" width: 20%;">
			    	<img src="<?php echo e(asset('img/user.png')); ?>" class="img-fluid">
				 </div>	
				 <div class="details pt-3">
				 <table>
						<tr>
							<th>Student Name</th>
							<td><?php echo e($studentName); ?></td>
						</tr>
						<tr>
							<th>Class</th>
							<td><?php echo e($class); ?></td>
						</tr>
						<tr>
							<th>Admission date</th>
							<td><?php echo e($admissionDate); ?></td>
						</tr>
						<tr>
							<th>Yearly Fees</th>
							<td><?php echo e($yearlyFee); ?></td>
						</tr>
						<tr>
							<th>Teacher</th>
							<td><?php echo e($TeacherGuid); ?></td>
						</tr>
						</table>
				 </div>
					
				</div>						
				</div>
				<div class="modal-footer">
					<input type="button" wire:click="closeviewStudent" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div>
			</form>
		</div>
	</div>
</div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->


</div>
<?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/livewire/student.blade.php ENDPATH**/ ?>