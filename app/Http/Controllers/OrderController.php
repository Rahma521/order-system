<?php
namespace App\Http\Controllers;
use App\Product;

use App\Models\Order;

use Illuminate\Http\Request;
class OrderController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index','show']]);
        $this->middleware('permission:order-create', ['only' => ['create','store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $orders = Order::latest()->paginate(5);

        return view('orders.index',compact('orders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'detail' => 'required',
        ]);
        order::create($request->all());

        return redirect()->route('orders.index')->with('success','Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        request()->validate([
        'name' => 'required',
        'detail' => 'required',
        ]);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success','Order updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        
        return redirect()->route('orders.index')->with('success','Orde deleted successfully');
    }
}