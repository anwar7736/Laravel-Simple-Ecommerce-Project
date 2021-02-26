<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use DB;

class ProductController extends Controller
{
    function index()
    {
    	$products =  Product::all();
    	return view('product', compact('products'));

    }
    function details($id)
    {
    	$details = Product::find($id);
    	return view('details', compact('details'));
    }
    function AddtoCart(Request $req)
    {
    	if(!Session::has('user'))
    	{
    		return redirect('/login');
    	}
    	 $user_id = session::get('user')['id'];
    	 $product_id = $req->product_id;
    	 $count = Cart::where(['user_id'=>$user_id, 'product_id'=>$product_id])->count();
    	 $sum = Cart::where(['user_id'=>$user_id, 'product_id'=>$product_id])->sum('quantity');
    	 $qty = $sum + $req->qty;
    	 if($count > 0)
    	 {
    	 	Cart::where(['user_id'=>$user_id, 'product_id'=>$product_id])->update(['quantity'=>$qty, 'created_at'=>now(), 'updated_at'=>now()]);
    	 	return redirect('/');
    	 }
    	 else{
    	 	$cart = new Cart;
    	 	$cart->user_id = $user_id;
    	 	$cart->product_id = $product_id;
    	 	$cart->quantity   = $req->qty;
    	 	$cart->save();
    	 	return redirect('/');
    	 }
    }
    static function countOrder()
    {
    	 $user_id = session::get('user')['id'];
    	 return  $count = Cart::where('user_id',$user_id)->count();
    }
    function CartList()
    {
    	 $user_id = session::get('user')['id'];
    	 $carts = DB::table('carts')
    	 		 ->join('products', 'carts.product_id', 'products.id')
    	 		 ->where('carts.user_id', $user_id)
    	 		 ->select('products.*','carts.*')
    	 		 ->get();
                 $total=0;
                 foreach($carts as $cart)
                 {
                    $total+=$cart->price*$cart->quantity;
                    
                 }
                 return view('cart_list', compact('carts', 'total'));

    }
    function RemoveCart($id)
    {
    	Cart::destroy($id);
    	return redirect('/cart_list');
    }
    function SearchItem(Request $req)
    {
    	$query = $req->input('query');
    	$result = Product::where('name', 'like', '%'.$query.'%')->orWhere('category', 'like', '%'.$query.'%')->get();

    	return view('search_item', compact('result'));

    }
    function PlaceOrder()
    {
        $user_id = session::get('user')['id'];
         $carts = DB::table('carts')
                 ->join('products', 'carts.product_id', 'products.id')
                 ->where('carts.user_id', $user_id)
                 ->select('products.*','carts.*')
                 ->get();
                 $total=0;
                 foreach($carts as $cart)
                 {
                    $total+=$cart->price*$cart->quantity;
                    
                 }
                 return view('place_order', compact('carts','total'));
    }
    function paymentMehod(Request $req)
    {
        $req->validate([
            'address' => 'required',
            'payment' => 'required',
        ]);

         $user_id = session::get('user')['id'];
         $datas = Cart::where('user_id',$user_id)->get();
         foreach($datas as $data)
         {
            $order = new Order;
            $order->user_id = $user_id;
            $order->product_id = $data->product_id;
            $order->quantity = $data->quantity;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
         }
          Cart::where('user_id', $user_id)->delete();
          return back()->with('success', 'Your order place successfully'); 
    }
    function Order_List()
    {
         $user_id = session::get('user')['id'];
         $carts = DB::table('orders')
                 ->join('products', 'orders.product_id', 'products.id')
                 ->where('orders.user_id', $user_id)
                 ->select('products.*','orders.*')
                 ->get();
                 $total=0;
                 foreach($carts as $cart)
                 {
                    $total+=$cart->price*$cart->quantity;
                    
                 }
                 return view('order_list', compact('carts','total'));
    }
}
