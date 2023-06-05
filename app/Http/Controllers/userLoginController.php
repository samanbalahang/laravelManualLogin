<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class userLoginController extends Controller
{
    public function signupform(){
        $theuser = new User;
        $theuser->name              = "test";
        $theuser->email             = "test@esample.com";
        $theuser->email_verified_at =now();
        $theuser->password = Hash::make("12345678");
        if($theuser->save()){
            return "signup";
        }

    }
    public function signup(Request $request){

    }
    public function loginform(Request $request){
        $username = "test";
        $userEmail = "test@esample.com";
        $password = "12345678";
        $theuser = new User;
        $login = $theuser::where("name",$username)->where("email",$userEmail)->first();
        if(isset($login)){
            $hashedPassword = $login->password;
            $id = $login->id;
            $name = $login->name;
            if (Hash::check($password, $hashedPassword)) {
                Auth::attempt(['id'=> $id,'name'=>$name,'email' => $userEmail, 'password' => $password]);
                $request->session()->regenerate();
                echo "done";
                echo Auth::user()->id;
                // return redirect()->intended('dashboard');
            }else{
               echo "Hash::check";     
            }
        }else{
            echo "isset(login)";
        }
    }
    public function login(){
      
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
