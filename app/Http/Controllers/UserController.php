<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function add(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'pswd' => ['required','min:6','regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'unique:users,email'],
            'last_name' => ['required','regex:/^[a-zA-Z]+$/u','min:3'],
            'first_name' => ['required','regex:/^[a-zA-Z]+$/u','min:3'],
            'profile_image' => ['mimes:jpeg,jpg,png,gif'],
            'address' => [''],
            'gender' => ['required'],
            'hobby' => ['required'],
            'mobile_no' => [],
        ]);

        $file_name = '';
        if($request->hasfile('profile_image')){
            $profile_image = $request->file('profile_image');
            $file_ext = strtolower($profile_image->getClientOriginalExtension());
            $file_name = hexdec(uniqid()).'.'.$file_ext;
            $uploade_location = 'image/ProfileImage';
            $profile_image->move($uploade_location,$file_name);
        }

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => \Hash::make($request->pswd),
            'profile_image' => $file_name,
            'address' => $request->address,
            'gender' => $request->gender,
            'hobby' => $request->hobby ? implode(',',$request->hobby) : '',
            'mobile_number' => $request->mobile_no,
            'email' => $request->email
        ]);
       return redirect('login');
    }

    public function dashboard(Request $request){
        $user = User::all();
        return view('dashboard',compact('user'));
    }

    public function user_login(Request $request){
        $validatedData = $request->validate([
            'email' => ['required'],
            'pswd' => ['required']
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(\Hash::check($request->pswd, $user->password)) {
                Auth::login($user);
                return redirect('dashboard');
            }else{
                return redirect()->back()->with('error','Password Does Not Match');
            }
        }else{
            return redirect()->back()->with('error','User Does Not Exists');
        }
    }
}
