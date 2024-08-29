<?php

namespace App\Livewire;

use Livewire\Component;
use DB;
use Illuminate\Support\Str;
use App\Models\students;

class StudentsAdd extends Component
{
    public $teacher;
    public $studentName;
    public $teacher_name;
    public $class;
    public $admission_date;
    public $yearly_fee;

    public function mount(){
       $this->teacher = DB::table('teachers')->whereNull('deleted_at')->get();
    }

    public function SaveStudents(){
        $this->validate([
           'studentName'=>'required',
           'teacher_name'=>'required',
           'class'=>'required',
           'admission_date'=>'required',
           'yearly_fee'=>'required' 
        ],[
            'studentName.required' => 'Please enter student name',
            'teacher_name.required' => 'Please enter teacher name', 
            'class.required' => 'Please enter class', 
            'admission_date.required' => 'Please enter admission date', 
            'yearly_fee.required'=>'Please enter yearly fee'
        ]);
        students::insert([
            'student_name'=>$this->studentName,
            'class_teacher_id'=>$this->teacher_name,
            'class'=>$this->class,
            'admission_date'=>$this->admission_date,
            'yearly_fees'=>$this->yearly_fee,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.students-add');
    }
}
