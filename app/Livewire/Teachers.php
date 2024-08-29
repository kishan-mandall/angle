<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use Illuminate\Support\Str;
use App\Models\teacher;

class Teachers extends Component
{
    use WithPagination;
    public $posts_per_page = 10;
    public $teacherModel=false;
    public $teacherName;
    public $TeacherID;

    public function mount(){
       $this->teacher = teacher::all(); 
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

    public function saveTeacher(){
        $this->validate([
           'teacherName'=>'required|max:30|regex:/^[a-zA-Z]+$/u'
        ],[
            'teacherName.required'=>'Please enter teacher name',
            'teacherName.max' => 'The name must not exceed 255 characters.',
            'teacherName.regex' => 'The name not accepted number or special character'
        ]);
        if(is_null($this->TeacherID)){
            teacher::insert([
                'teacher_name'=>$this->teacherName,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }else{
            teacher::where('teacherId',$this->TeacherID)->update([
                'teacher_name'=>$this->teacherName,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
        $this->resetFields();
        $this->teacherModel = false;

    } 

    public function EditTeacher($teacherId){
        $this->resetFields();
        if($teacherId){
            $teacher = teacher::where('teacherId',$teacherId);
           if(!is_null($teacher)){
               $this->teacherName = $teacher->first()->teacher_name;
               $this->TeacherID = $teacher->first()->teacherId;
               $this->teacherModel = true; 
           }
         }  
    } 

    public function render()
    {
        $teacher = DB::table('teachers')->orderBy('teacherId','DESC')->whereNull('deleted_at')->paginate($this->posts_per_page);
        return view('livewire.teachers',["teacher"=>$teacher]);
    }

    public function MoveToTrash($teacherId){
        if($teacherId){
          $teacher = teacher::where('teacherId',$teacherId);
         if(!is_null($teacher)){
             $teacher->delete();
         }
        } 
     }

}
