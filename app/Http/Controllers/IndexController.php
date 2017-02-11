<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 11/02/17
 * Time: 16:51
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{

    public function index()
    {
        return view("comingsoon");
    }

    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }

    public function registerPost(Request $request){
        $user = new User();
        $user->message = $request->input("name");
        $user->message = $request->input("email");
        $user->password =  Hash::make($request->input("password"));
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
        $user = new User();
        $user->email = $request->input("email");
        $user->password =  Hash::make($request->input("password"));


        $viewData = new \stdClass();
        $viewData->message = 'successful';

        return view("result", ['viewData' => $viewData]);
    }

    public function postedMessage(Request $request)
    {
        $viewData = new \stdClass();
        $viewData->message = $request->input("name");

        return view("result", ['viewData' => $viewData]);
    }
}