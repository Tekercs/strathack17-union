<?php
/**
 * Created by PhpStorm.
 * User: sebestyen
 * Date: 12/02/17
 * Time: 04:12
 */

namespace App\Http\Controllers;


use App\Ads;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $viewData->ads = Ads::where("categoryId", $categoryId)->orderBy("created_at", "desc")->skip($page*9)->take(9)->get();

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
            ->orderBy("created_at", "desc")
            ->skip($page*9)
            ->take(9)
            ->get();

        return view("ads.list", ['viewData' => $viewData]);
    }

    public function submitAd()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $viewData = new \stdClass();
        $viewData->categories = Categories::all();

        return view("ads.submit", ['viewData' => $viewData]);
    }

    public function submitAdPost(Request $request){
        $ad = new Ads();
        $ad->title = $request->input("title");
        $ad->price = $request->input("price");
        $ad->breef =  $request->input("brief");
        $ad->content =  $request->input("desc");
        $ad->categoryId =  $request->input("category");


        return var_dump($request->input("adPictures"));

        foreach ($request->input("adPictures") as $picture)
        {
            $fileName = $picture->getClientOriginalName();
            $picture->move(public_path() . "/images/", $fileName);

            if($ad->pictureList == "")
                $ad->pictureList = $fileName;
            else
                $ad->pictureList .= (";" . $fileName);
        }


        $ad->save();


        return redirect("/ads/" . $ad->id);
    }
}