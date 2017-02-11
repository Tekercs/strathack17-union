<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 11/02/17
 * Time: 16:51
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function postedMessage(Request $request)
    {
        $viewData = new \stdClass();
        $viewData->message = $request->input("name");

        return view("result", ['viewData' => $viewData]);
    }
}