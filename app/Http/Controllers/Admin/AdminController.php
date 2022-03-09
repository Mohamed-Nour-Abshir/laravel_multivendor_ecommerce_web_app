<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;

class AdminController extends Controller
{
    //admin dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }
    //admin login
    public function login(Request $req){
        if($req->isMethod('post')){
            $data = $req->all();
            $rules= [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];
            $customMessage = [
                'email.required'=>'Email Field is required',
                'email.email'=>'Please Enter Valid Email',
                'password.required'=>'Password Feild is Required'
            ];
            $this->validate($req,$rules,$customMessage);
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');
            }
            else{
                return redirect()->back()->with('error_message','Invalid UserName Or Email');
            }
        }
        return view('admin.login');
    }
    public function logout(){
      Auth::guard('admin')->logout();
      return redirect('admin/login');
    }

    // update admin password
    public function UpdatePassword(){
        $adminDetails = admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update_password', compact('adminDetails'));
    }
}
