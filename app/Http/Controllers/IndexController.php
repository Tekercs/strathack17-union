<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 11/02/17
 * Time: 16:51
 */

namespace App\Http\Controllers;


use App\Ads;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $viewData = new \stdClass();
        $viewData->adSelection = Ads::orderBy("created_at")->take(3)->get();
        $viewData->isIndex = true;

        return view("index", ['viewData' => $viewData]);
    }

    public function postedMessage(Request $request)
    {
        $viewData = new \stdClass();
        $viewData->message = $request->input("name");

        return view("result", ['viewData' => $viewData]);
    }
}