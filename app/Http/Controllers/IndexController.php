<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 11/02/17
 * Time: 16:51
 */

namespace App\Http\Controllers;


use App\Ads;
use App\Categories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index()
    {
        $viewData = new \stdClass();
        $viewData->isIndex = true;
        $viewData->categories = Categories::all();
        if (Auth::check())
        {
            $viewData->user = Auth::user();
        }

        return view("index", ['viewData' => $viewData]);
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('account');
        }
        return view("register");
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('account');
        }
        return view("login");
    }
    public function account()
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            return view("account", ["user" => $user]);
        }else{
            return redirect('login');
        }
    }

    public function accountPost(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
            $viewData = new \stdClass();
            if ($request->has("email")){
                $user->email = $request->input("email");
            }
            if(($request->has("password"))){
                if($request->input("password") == $request->input("cpassword")){
                    $user->password = $request->input("password");
                }else{
                    $viewData->message = "Passwords do not match";
                }
            }
            return view("account", ["user" => $user, 'viewData' => $viewData]);
        }else{
            return redirect('login');
        }
        $user = Auth::user();

        return view("account", ["user" => $user]);

    }
    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password =  Hash::make($request->input("password"));
        $user->isSociety = false;
        #$user->cpassword =  Hash::make($request->input("cpassword"));

        $viewData = new \stdClass();
        if ($request->input("cpassword") == $request->input("password")){
            $user->save();
            $viewData->message = 'successful';
        }else{
            $viewData->message = "passwords do not match";
        }




        return view("result", ['viewData' => $viewData]);
    }

    public function loginPost(Request $request){

        if (Auth::attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            // Authentication passed...
            return redirect('/');
        }else{
            $viewData = new \stdClass();
            $viewData->message = 'Login Unsuccessful';

            return view("login", ['viewData' => $viewData]);
        }


    }

    public function logout()
    {
        Auth::logout();

        return redirect("/");
    }
}