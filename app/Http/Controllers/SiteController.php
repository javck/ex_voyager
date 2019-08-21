<?php

namespace App\Http\Controllers;


use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class SiteController extends Controller
{

    public function __construct()
    {

    }

    //首頁
    public function renderHomePage()
    {
        $page = Page::where('status','ACTIVE')->orderBy('created_at','desc')->first();
        return view('index',compact('page'));
    }

    //商店頁
    public function renderShopPage()
    {
        return view('shop');
    }

}
