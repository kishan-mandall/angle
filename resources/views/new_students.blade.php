@extends('layout.layout')
@section('content')
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
					</div>
				</div>
			</div>
            @if(session()->has('success'))
            <div class="alert alert-success">
             {{session('success')}}
            </div>
            @endif
			<h4>Add new students</h4>
          <form action="{{Route('add.student')}}" method="POST">  
            @csrf
            <input type="hidden" value="{{$id}}" name="id">
            <div class="row">
             <div class="col-md-6">   
              <div class="form-group">
                <label>Student Name</label>
                <input type="text" name="studentName" value="{{$student_name}}" class="form-control" >
                @error('studentName')<span class="text-danger error">{{$message}}</span> @enderror
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class Teacher</label>
                <select class="form-control" id="select2" data-trigger name="teacher_name">
                 <option value="">Select Teacher</option>
                   @foreach($teacher as $teachers)
                     <option value="{{$teachers->teacherId}}" @if($teachers->teacherId==$class_teacher_id)selected @endif>{{$teachers->teacher_name}}</option>
                   @endforeach
                </select>
                @error('teacher_name')<span class="text-danger error">{{$message}}</span> @enderror
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Class</label>
                @php $classArr = array('first','second','third','four','five','six','seven','eight','nine','tent'); @endphp
                <select class="form-control" id="class" data-trigger name="class">
                 <option value="">Select Class</option>
                @foreach($classArr as $classArrs) 
                 <option value="{{$classArrs}}" @if($classArrs==$class)selected @endif>{{Str::ucfirst($classArrs)}}</option>
                @endforeach
                </select>
                @error('class')<span class="text-danger error">{{$message}}</span> @enderror
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Admission Date</label>
                <input type="text" id="admission_date" value="{{$admission_date}}" name="admission_date" class="form-control" >
                @error('admission_date')<span class="text-danger error">{{$message}}</span> @enderror
              </div>
             </div>

             <div class="col-md-6">   
              <div class="form-group">
                <label>Yearly Fee</label>
                <input type="text" value="{{$yearly_fees}}" name="yearly_fee" class="form-control" >
                @error('yearly_fee')<span class="text-danger error">{{$message}}</span> @enderror
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

@push('js')
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
@endpush
@endsection