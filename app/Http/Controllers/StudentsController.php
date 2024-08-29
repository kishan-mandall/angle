<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\Teacher;
use Hash;
use App\Models\User;
use Crypt;
use Session;
use Str;
use Auth;
use DB;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function trash(){
        $result['students'] = DB::table('students')->orderBy('id','DESC')->leftjoin('teachers','teachers.teacherId','=','students.class_teacher_id')->whereNotNull('students.deleted_at')->paginate(10);   
      return view('trash',$result);  
    }

    public function restore($id){
      if($id){
        $students = students::withTrashed()->find($id);
       if(!is_null($students)){
            $students->restore();
        }
       }  
       return redirect()->back();
    }

    public function new_student(Request $request,$id=''){
      if($request->Method() == "POST"){
        $request->validate([
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
       if(!is_null($request->id)){
        DB::table('students')->where('id',$request->id)->update([
            'student_name'=>$request->studentName,
            'class_teacher_id'=>$request->teacher_name,
            'class'=>$request->class,
            'admission_date'=>$request->admission_date,
            'yearly_fees'=>$request->yearly_fee,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        session()->flash('success','Student updated successfully');
      }else{
        students::insert([
          'student_name'=>$request->studentName,
          'class_teacher_id'=>$request->teacher_name,
          'class'=>$request->class,
          'admission_date'=>$request->admission_date,
          'yearly_fees'=>$request->yearly_fee,
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
      ]);
      session()->flash('success','Student added successfully');
      }
        return redirect()->back();
      }
      if(!is_null($id)){
        $res = students::find($id);
         if(!is_null($res)){
          $edit['id'] = $res->id;
          $edit['student_name'] = $res->student_name;
          $edit['class_teacher_id'] = $res->class_teacher_id;
          $edit['class'] = $res->class;
          $edit['admission_date'] = $res->admission_date;
          $edit['yearly_fees'] = $res->yearly_fees;
         }else{
            $edit['id'] = '';
            $edit['student_name'] = '';
            $edit['class_teacher_id'] = '';
            $edit['class'] = '';
            $edit['admission_date'] = '';
            $edit['yearly_fees'] = '';
         } 
      }
      $result['teacher'] = DB::table('teachers')->whereNull('deleted_at')->get();
      return view('new_students',$result,$edit);
    }

    public function permanent_delete($id){
        if($id){
          $students = students::withTrashed()->find($id);
         if(!is_null($students)){
              $students->forceDelete();
          }
         }  
         return redirect()->back();
      }

      public function login(Request $request){
        // $model = new User();
        // $model->name = 'kishan';
        // $model->email = 'demo@gmail.com';
        // $model->password = crypt::encrypt('123456');
        // $model->remember_token = Str::random(50);
        // $model->status = 1;
        // $model->created_at = date('Y-m-d H:i:s');
        // $model->updated_at = date('Y-m-d H:i:s'); 
        // $model->save();
        // dd('user saved');
       if($request->Method()=="POST"){
        $result = User::where(["name" => $request->username])->orwhere('email',$request->username)->first();
        if(isset($result->id)){
         if($result->status==1){
          $db_pwd = crypt::decrypt($result->password);
           if ($db_pwd == $request->password) {
             session()->put('user_login',true);
             session()->put('user_id',$result->id);
             session()->put('display_name',$result->name);
             return redirect('/');
           }else{
             session()->flash('error', 'username or password wrong.');
          }
         }else{
             session()->flash('error', 'Account not verified');
         }
        }else{
         session()->flash('error', 'username or password wrong.');
       }
       } 
        return view('login');
      }

     public function logout(){
      Auth::logout();
        Session::flush();
         session()->flash('msg','You have successfully logged out!');
         return redirect('login');
     } 
}
