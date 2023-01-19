<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\users;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
        return view('home');
    }
    public function showProduct()
    {
        $items = items::paginate(3);
        return view('show_product', compact('items'));
    }
    public function viewProductDetail(Request $request)
    {
        $product = items::find($request->id);
        // return redirect()->route('view-product-detail_route');
        return view('view_product_detail', compact('product'));
    }
}
