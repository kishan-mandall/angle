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
			<h4>Add new students</h4>
            <div class="row">
             <div class="col-md-6">   
              <div class="form-group">
                <label>Student Name</label>
                <input type="text" wire:model="studentName" class="form-control" required>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['studentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class Teacher</label>
                <select class="form-control" data-trigger wire:model="teacher_name">
                 <option value="">Select Teacher</option>
                   <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teachers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($teachers->teacherId); ?>"><?php echo e($teachers->teacher_name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['studentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class</label>
                <input type="text" wire:model="class" class="form-control" required>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Admission Date</label>
                <input type="text" wire:model="admission_date" class="form-control" required>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['admission_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Yearly Fee</label>
                <input type="text" wire:model="yearly_fee" class="form-control" required>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['yearly_fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
             </div>

             <div class="col-md-12 text-center">
                <button class="btn btn-primary" wire:click="SaveStudents">Save Students</button>
             </div>
            </div> 
		</div>
	</div>
  </div>
 </div>	
	        
</div>
</div>
<?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/livewire/students-add.blade.php ENDPATH**/ ?>