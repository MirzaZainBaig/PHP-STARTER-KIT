<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User; 

    class UserController extends Controller
    {
        public function register(Request $request) // Corrected method name and added $request parameter
        {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);

            $user = User::create($data); 

            if ($user) {
                return redirect()->route('login');
            }
            return $request->all();
        }
        public function login(Request $request) // Corrected method name and added $request parameter
        {
            $check = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(Auth::attempt($check)){
                return redirect()->route('dashboard');
            }
        }
        public function showDashboard(){
            if(Auth::check()){
                return view('welcome');
            }
            else{
                return view('login');
            }
        }
        public function showPost(){
            if(Auth::check()){
                return view('post');
            }
            else{
                return view('login');
            }
        }
        public function logout(){
            Auth::logout();
            return view('login');
        }
    }
?> 