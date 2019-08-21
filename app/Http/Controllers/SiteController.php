<?php

namespace App\Http\Controllers;


use App\User;
use App\Item;
use App\Order;
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
        $items = Item::get();
        return view('shop',compact('items'));
    }

    //提交訂單
    public function submitOrder($item_id)
    {
        $order = new Order;
        $order->user_id = 1; //為簡化程式，預設管理者自己下單
        $order->item_id = $item_id;
        $order->quantity = 1;
        $order->save(); //將訂單存到資料庫中
        return redirect('/shop');
    }

}
