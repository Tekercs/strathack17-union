<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 12/02/17
 * Time: 04:12
 */

namespace App\Http\Controllers;


use App\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function viewAd($id)
    {
        $viewData = new \stdClass();
        $viewData->ad = Ads::find($id);

        return view("ads.viewdetails", ['viewData' => $viewData]);
    }

    public function adList($page = 0)
    {
        $viewData = new \stdClass();
        $viewData->prevPage = ($page-1 <0)? 0 : $page-1;
        $viewData->nextPage = $page+1;
        $viewData->ads = Ads::skip($page*9)->take(9)->get();

        return view("ads.list", ['viewData' => $viewData]);
    }

    public function categoryList($categoryId, $page = 0)
    {
        $viewData = new \stdClass();
        $viewData->prevPage = ($page-1 <0)? 0 : $page-1;
        $viewData->nextPage = $page+1;
        $viewData->ads = Ads::where("categoryId", $categoryId)->skip($page*9)->take(9)->get();

        return view("ads.list", ['viewData' => $viewData]);
    }

    public function searchConverter(Request $request)
    {
        return redirect("/ads/search/" . str_replace(' ', '_', $request->input("searchKey")) );
    }

    public function search($key, $page = 0)
    {
        $key = str_replace('_', ' ', $key);

        $viewData = new \stdClass();
        $viewData->prevPage = ($page-1 <0)? 0 : $page-1;
        $viewData->nextPage = $page+1;
        $viewData->ads = Ads::search($key)
            ->skip($page*9)
            ->take(9)
            ->get();

        return view("ads.list", ['viewData' => $viewData]);
    }
}