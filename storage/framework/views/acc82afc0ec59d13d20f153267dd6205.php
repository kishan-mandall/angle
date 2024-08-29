
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
					<a href="<?php echo e(Route('teacher.trash')); ?>" class="btn btn-info"><span>Trash</span></a>
						<a href="<?php echo e(Route('add.student')); ?>" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add students</span></a>
					</div>
				</div>
			</div>
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
             <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
			<h4>Add new students</h4>
          <form action="<?php echo e(Route('add.student')); ?>" method="POST">  
            <?php echo csrf_field(); ?>
            <input type="hidden" value="<?php echo e($id); ?>" name="id">
            <div class="row">
             <div class="col-md-6">   
              <div class="form-group">
                <label>Student Name</label>
                <input type="text" name="studentName" value="<?php echo e($student_name); ?>" class="form-control" >
                <?php $__errorArgs = ['studentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class Teacher</label>
                <select class="form-control" id="select2" data-trigger name="teacher_name">
                 <option value="">Select Teacher</option>
                   <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teachers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($teachers->teacherId); ?>" <?php if($teachers->teacherId==$class_teacher_id): ?>selected <?php endif; ?>><?php echo e($teachers->teacher_name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['teacher_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class</label>
                <?php $classArr = array('first','second','third','four','five','six','seven','eight','nine','tent'); ?>
                <select class="form-control" id="class" data-trigger name="class">
                 <option value="">Select Class</option>
                <?php $__currentLoopData = $classArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classArrs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <option value="<?php echo e($classArrs); ?>" <?php if($classArrs==$class): ?>selected <?php endif; ?>><?php echo e(Str::ucfirst($classArrs)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Admission Date</label>
                <input type="text" id="admission_date" value="<?php echo e($admission_date); ?>" name="admission_date" class="form-control" >
                <?php $__errorArgs = ['admission_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Yearly Fee</label>
                <input type="text" value="<?php echo e($yearly_fees); ?>" name="yearly_fee" class="form-control" >
                <?php $__errorArgs = ['yearly_fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
             </div>

             <div class="col-md-12 text-center">
                <button class="btn btn-primary"type="submit" wire:click="SaveStudents">Save Students</button>
             </div>
            </div> 
          </form>
		</div>
	</div>
  </div>
 </div>	
	        
</div>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function () {
            $('#select2').select2();
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
            });
            $('#class').select2();
            $('#class').on('change', function (e) {
                var data = $('#class').select2("val");
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/new_students.blade.php ENDPATH**/ ?>