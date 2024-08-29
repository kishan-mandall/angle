<div class="sidebar">
	<div class="sidebar-menu">
     <div class="profile-img">
	  <img src="<?php echo e(asset('img/user.png')); ?>" class="img-fluid" style="filter: invert(1);">	
	 </div>	
	 <div class="profile-menu">
	 	<h4>Hi, <?php echo e(session('display_name')); ?></h4>
		<h6>Management</h6>
	 </div>	
	 <div class="side-menu">
	   <ul>
		<li><a href="<?php echo e(Route('teacher')); ?>">Teacher</a></li>
		<li><a href="<?php echo e(Route('index')); ?>">Students</a></li>
		<li><a href="<?php echo e(Route('logout')); ?>">logout</a></li>
	   </ul>	
	 </div>
	</div>
	</div><?php /**PATH E:\xampp\htdocs\interview\angel-portal\resources\views/layout/sidebar.blade.php ENDPATH**/ ?>