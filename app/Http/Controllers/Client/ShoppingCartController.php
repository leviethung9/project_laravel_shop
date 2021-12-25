<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;
use App\Model\Transaction;
class ShoppingCartController extends Controller
{
    public function index()
    {
        
        $shopping = \Cart::content();
        return view('client.shopping.index',compact('shopping'));
    }
    // them gio hang
    public function add($id)
    {
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');

        \Cart::add([
            'id' => $product->id, 
            'name' => $product->pro_name, 
            'qty' => 1, 
            'price' => $product->pro_price, 
            'weight' => '1',
            'options' => [
                'sale' => $product->pro_price_sale,
                'image' => $product->pro_avatar
            ]
        ]);
        return redirect()->back();
    }
    // xoa san pham trong don hang
    public function delete($rowId)
    {
        \Cart::remove($rowId);
        return redirect()->back();
    }
    // luu san pham
    public function postPay(Request $request)
    {
        $data = $request->except('_token');
        if(isset(Auth::user()->id)){
            $data['tst_user_id'] = Auth::user()->id;

        }
        $data['tst_total_money'] = str_replace(',', '', \Cart::subtotal(0));
        $transactionID = Transaction::insertGetId($data);
        if($transactionID){
            $shopping = \Cart::content();
            foreach($shopping as $key => $item){
                Order::insert(
                    [
                        'od_transaction_id' => $transactionID,
                        'od_product_id'     => $item->id,
                        'od_qty'            => $item->qty,
                        'od_price'          => $item->price
                    ]
                    );
            }
        }
        \Cart::destroy();
        return redirect()->to('/');
    }

}
