<div>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>School <b>Management</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add students</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Teacher</span></a>						
					</div>
				</div>
			</div>
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
							<a href="javascript:void(0);" class="edit btn btn-primary" data-toggle="modal">Edit</a>
							<a href="javascript:void(0);" wire:click="MoveToTrash('<?php echo e($stnd->id); ?>')" class="delete btn btn-danger" data-toggle="modal">Trash</a>
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
<?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/livewire/students.blade.php ENDPATH**/ ?>