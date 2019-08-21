<?php

namespace App\Http\Controllers;


use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __construct()
    {

    }

    //首頁
    public function renderHomePage()
    {
        return view('index');
    }

    //商店頁
    public function renderShopPage()
    {
        return view('shop');
    }

}
