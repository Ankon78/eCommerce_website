<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['count_user'] = User::count();
        $data['count_category'] = Category::count();
        $data['count_sub_category'] = SubCategory::count();
        $data['count_brand'] = Brand::count();
        $data['count_order'] = DB::table('orders')->whereIn('status',['Processing','Complete'])->count();
        $data['order_amount'] = DB::table('orders')->whereIn('status',['Processing','Complete'])->sum('amount');

        return view('dashboard', $data);
    }

    public function get_sub_category($id){
        $sub_category = SubCategory::where('category_id', $id)->get();

        $htmlCode = '';
        foreach ($sub_category as $item){
            $htmlCode .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }

        return $htmlCode;
    }

    public function order_list(){
        $order_list=DB::table('orders')->whereIn('status',['Processing','Complete'])->get();
        return view('order_list',compact('order_list'));
    }
}
