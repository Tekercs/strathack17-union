<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 12/02/17
 * Time: 04:12
 */

namespace App\Http\Controllers;


use App\Ads;

class AdsController extends Controller
{
    public function viewAd($id)
    {
        $viewData = new \stdClass();
        $viewData->ad = Ads::find($id);

        return view("ads.viewdetails", ['viewData' => $viewData]);
    }
}