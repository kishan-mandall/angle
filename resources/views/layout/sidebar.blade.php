<div class="sidebar">
	<div class="sidebar-menu">
     <div class="profile-img">
	  <img src="{{asset('img/user.png')}}" class="img-fluid" style="filter: invert(1);">	
	 </div>	
	 <div class="profile-menu">
	 	<h4>Hi, {{session('display_name')}}</h4>
		<h6>Management</h6>
	 </div>	
	 <div class="side-menu">
	   <ul>
		<li><a href="{{Route('teacher')}}">Teacher</a></li>
		<li><a href="{{Route('index')}}">Students</a></li>
		<li><a href="{{Route('logout')}}">logout</a></li>
	   </ul>	
	 </div>
	</div>
	</div>