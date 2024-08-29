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
						<a href="javascript:void(0);" class="btn btn-danger" wire:click="addNewTeache()"><i class="material-icons">&#xE147;</i> <span>Add Teacher</span></a>	
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
                        <th>Teacher ID</th>
						<th>Teacher Name</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stnd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
					<tr>
                        <td><?php echo e($stnd->teacherId); ?></td>
						<td><?php echo e($stnd->teacher_name); ?></td>
						<td>
					      <div class="btn-grouped">		
							<a href="javascript:void(0);" wire:click="EditTeacher('<?php echo e($stnd->teacherId); ?>')" class="edit btn-sm btn btn-primary" data-toggle="modal">Edit</a>
							<a href="javascript:void(0);" wire:click="MoveToTrash('<?php echo e($stnd->teacherId); ?>')" class="delete btn-sm btn btn-danger" data-toggle="modal">Trash</a>
						  </div>
						</td>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->    
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


<!--[if BLOCK]><![endif]--><?php if($teacherModel): ?>
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
						<!--[if BLOCK]><![endif]--><?php $__errorArgs = ['teacherName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->


</div>
<?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/livewire/teachers.blade.php ENDPATH**/ ?>