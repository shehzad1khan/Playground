<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){

        $request->validate(
            [
                'name' => 'required',
                'fname' => 'required',
                'email' => 'required|email',
                'gender' => 'required',
            ]
        );

        $student_table = new Students;
        $student_table->name = $request['name'];
        $student_table->f_name = $request['fname'];
        $student_table->email = $request['email'];
        $student_table->gender = $request['gender'];
        $student_table->address = $request['address'];
        $student_table->save();
        return redirect('list');

        echo'<pre>';
        print_r($request->all());
    
        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'email' => 'required|email|',
        //         'password' => 'required|min:5',
        //         'confirm_password' => 'required|same:password'
        //     ]
        // );
    }

    public function view(){
        $student = Students::all();
        $data = compact('student');
        return view('student_list')->with($data);
    }

}
