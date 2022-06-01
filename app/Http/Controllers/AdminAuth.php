<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Session;
class AdminAuth extends Controller
{
    public function index(){
        $students = new Student;
        $courses = DB::table('categories')
        ->leftJoin('courses', 'categories.id', '=', 'courses.category_id')
        ->get();
        return view('admin-dashboard',compact('courses','students'));
    }
    public function AdminLog(){
        return view('auth.admin.adminlogin');
    }

    public function AdminLogin(Request $request){
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:6|max:12'
        ]);
        $admin = Admin::where('email','=',$request->email)->first();
        if($admin){
        if(md5($request->password,$admin->password)){
           
            $request->session()->put('adminloginId',$admin->id);
            
            return redirect('/admin-dashboard');
        }else{
            return back()->with('message','Password is not match');
        }
        
        }
        else{
            return back()->with('message','This email is not Registered ');
        }
    }
    public function AdminLogout(){
        if(Session::has('adminloginId'));
        Session::pull('adminloginId');
        // return 'You are logout';
        return redirect('/admin');
    }
}
