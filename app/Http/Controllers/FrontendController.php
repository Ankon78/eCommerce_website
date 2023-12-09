<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Hoa\Console;

class FrontendController extends Controller
{
    public function welcome(){

        $data['products']= Product::where('status','active')->with('category')->paginate(15);
        $data['categories']= Category::where('status','active')->get();
        $data['brands']= Brand::where('status','active')->get();
        return view('frontend.product',$data);
    }

    public function logout(){
        Auth::logout();
       return to_route('welcome');
    }

    public function remove_cart($id){

        if($id){
            $cart= session()->get('cart');
            if(isset($cart[$id])){
                unset($cart[$id]);
                session()->put('cart',$cart);
            }
        }
        return count(session('cart'));
    }

    public function add_to_cart($id){

        $product = Product::where('id', $id)->first();

        if (isset($product)) {
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->image,
                ];
            }
        }

        session()->put('cart', $cart);
        return count(session('cart'));

    }

    public function cart(){
        $data['products']= Product::where('status','active')->with('category')->paginate(15);
        $data['categories']= Category::where('status','active')->get();
        $data['brands']= Brand::where('status','active')->get();
        return view('frontend.cart',$data);
    }
}
