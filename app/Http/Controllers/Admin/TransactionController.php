<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Transaction;
use App\Model\Order;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderByDesc('id')
            ->paginate(10);
        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin.transaction.list')->with($viewData);
    }

    public function getTransactionDetail($od_transaction_id)
    {
        $orders = Order::where('od_transaction_id', $od_transaction_id)->with('hasProduct')->get();
       
        return view('admin.transaction.detail', compact('orders'));
    }


    public function destroy($id)
    {
        $transactions = Transaction::find($id);
        if ($transactions) {
            $transactions->delete();
            DB::table('orders')->where('od_transaction_id', $id)
                ->delete();
        }
        return redirect()->back()->with('success', 'Xóa đơn hàng thành công');
    }
}
