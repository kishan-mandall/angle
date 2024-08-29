
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
					<a href="<?php echo e(Route('teacher')); ?>" class="btn btn-info"><span>Main</span></a>
					</div>
				</div>
			</div>
			<?php if(request()->route()->getName()=='index'): ?>
			<h4>Students</h4>
			<?php else: ?>
			<h4>Teacher Trash</h4>
			<?php endif; ?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <th>Teacher ID</th>
						<th>Teacher Name</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stnd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
					<tr>
                        <td><?php echo e($stnd->teacherId); ?></td>
						<td><?php echo e($stnd->teacher_name); ?></td>
						<td>
					      <div class="btn-grouped">		
                          <a href="<?php echo e(url('teacher/restore/'.$stnd->teacherId)); ?>" class="edit btn-sm btn btn-primary">Restore</a>
                          <a href="<?php echo e(url('teacher/permanent/delete/'.$stnd->teacherId)); ?>" class="delete btn-sm btn btn-danger">Permanent Delete</a>
						  </div>
						</td>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
				</tbody>
			</table>
			<div class="clearfix">
                <?php echo $teacher->withQueryString()->links('pagination::bootstrap-5'); ?>

			</div>
		</div>
	</div>
  </div>
 </div>	
	        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/teacher-trash.blade.php ENDPATH**/ ?>