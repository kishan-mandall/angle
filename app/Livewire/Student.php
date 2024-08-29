<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use Illuminate\Support\Str;
use App\Models\students;

class Student extends Component
{
    use WithPagination;
    public $posts_per_page = 10;
    public $teacherModel=false;
    public $viewModel = false;
    public $studentName;
    public $class;
    public $admissionDate;
    public $yearlyFee;
    public $TeacherGuid;

    public function viewStudent($id){
        $res = DB::table('students')->leftjoin('teachers','teachers.teacherId','=','students.class_teacher_id')->where('id',$id)->first();
        if(!is_null($res)){
          $this->studentName = $res->student_name;
          $this->admissionDate = $res->student_name;
          $this->class = $res->class;
          $this->yearlyFee = $res->yearly_fees;
          $this->TeacherGuid = $res->teacher_name;
        }
        $this->viewModel = true; 
    }

    public function closeviewStudent(){
        $this->viewModel = false; 
    }

    public function addNewTeache(){
        $this->teacherModel = true; 
        $this->resetFields();
     }
 
     public function closeModel(){
         $this->teacherModel = false;
     }
 
     public function resetFields(){
        $this->teacherName = ''; 
     }


    public function render()
    {
        $students = DB::table('students')->orderBy('id','DESC')->leftjoin('teachers','teachers.teacherId','=','students.class_teacher_id')->whereNull('students.deleted_at')->paginate($this->posts_per_page);
        return view('livewire.student',["students"=>$students]);
    }

    public function MoveToTrash($id){
       if($id){
         $students = students::find($id);
        if(!is_null($students)){
            $students->delete();
        }
       } 
    }
}
