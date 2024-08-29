<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }

    public function trash(){
        $result['teacher'] = DB::table('teachers')->orderBy('teacherId','DESC')->whereNotNull('deleted_at')->paginate(10);   
      return view('teacher-trash',$result);  
    }

    public function restore($id){
        if($id){
          $students = Teacher::withTrashed()->where('teacherId',$id);
         if(!is_null($students)){
              $students->restore();
          }
         }  
         return redirect()->back();
      }
  
      public function permanent_delete($id){
          if($id){
            $students = Teacher::withTrashed()->where('teacherId',$id);
           if(!is_null($students)){
                $students->forceDelete();
            }
           }  
           return redirect()->back();
        }


}
