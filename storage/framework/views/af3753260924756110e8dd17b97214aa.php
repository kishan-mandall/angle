
<?php $__env->startSection('content'); ?>
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
					<a href="<?php echo e(Route('index')); ?>" class="btn btn-info"><span>Main</span></a>
					</div>
				</div>
			</div>
			<?php if(request()->route()->getName()=='index'): ?>
			<h4>Students</h4>
			<?php else: ?>
			<h4>Student Trash</h4>
			<?php endif; ?>
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
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stnd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
					<tr>
						<td><?php echo e($stnd->student_name); ?></td>
						<td><?php echo e(Str::ucfirst($stnd->class)); ?></td>
						<td><?php echo e(date("j F Y", strtotime($stnd->admission_date))); ?></td>
						<td>₹<?php echo e($stnd->yearly_fees); ?></td>
                        <td><?php echo e($stnd->teacher_name); ?></td>
						<td>
                        <div class="btn-grouped">		
							<a href="<?php echo e(url('students/restore/'.$stnd->id)); ?>" class="edit btn-sm btn btn-primary">Restore</a>
							<a href="<?php echo e(url('students/permanent/delete/'.$stnd->id)); ?>" class="delete btn-sm btn btn-danger">Permanent Delete</a>
						  </div>
						</td>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/trash.blade.php ENDPATH**/ ?>