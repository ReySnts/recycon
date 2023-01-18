<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showProduct()
    {
        $items = items::paginate(3);
        return view('show_product', compact('items'));
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function viewProductDetail(Request $request)
    {
        $product = items::find($request->id);
        // return redirect()->route('view-product-detail_route');
        return view('view_product_detail', compact('product'));
    }
}
