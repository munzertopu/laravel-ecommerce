<?php

namespace App\Http\Controllers;

use App\OrderList;
use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderListController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function orderList(Request $request) {
		$catagory = DB::table('catagory')
			->get();
		$orderlist = DB::table('view_customer_invoice')
					->where('status', 'DELIVERED')
					->get();
		return view('admin.orderlist')
			->with('catagory', $catagory)
			->with('orderlist', $orderlist)
			->with('type', "ALL");
	}
	public function cancelList(Request $request) {
		$catagory = DB::table('catagory')
			->get();
		$orderlist = DB::table('view_customer_invoice')
					->where('status', 'CANCELLED')
					->get();
		return view('admin.orderlist')
			->with('catagory', $catagory)
			->with('orderlist', $orderlist)
			->with('type', "ALL");
	}
	public function salesList(Request $request) {
		$catagory = DB::table('catagory')
			->get();
		$orderlist = DB::table('view_customer_invoice')
					->get();
		return view('admin.orderlist')
			->with('catagory', $catagory)
			->with('orderlist', $orderlist)
			->with('type', "ALL");
	}
	public function orderListTotal(Request $request) {
		$catagory = DB::table('catagory')
			->get();
		$orderlist = DB::table('invoiceorder')
			->select('*', DB::raw('count(customerid) as totalbuy'))
			->groupBy('customerid')
			->get();
		// $buyHistory = DB::table('buyingpricehistoryall')
		//  ->get();

		return view('admin.orderlist')
			->with('catagory', $catagory)
			->with('orderlist', $orderlist)
			->with('type', "Group");
	}
	public function orderDetails($id)
	{
		$invoice = Invoice::find($id);
		$customer = DB::table('customer')
					->where('loginid', $invoice->customerid)
					->first();
		$orderlist = DB::table('orderlist')
					->where('invoiceid', $invoice->id)
					->get();
		foreach ($orderlist as $order) {
			$product = DB::table('product')
						->where('id', $order->productid)
						->first();
			$order->productname = $product->name;
			$order->image = $product->image;
		}
		return view('admin.orderdetails')
				->with('customer', $customer)
				->with('orderList', $orderlist)
				->with('invoiceid', $invoice->id);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\OrderList  $orderList
	 * @return \Illuminate\Http\Response
	 */
	public function show(OrderList $orderList) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\OrderList  $orderList
	 * @return \Illuminate\Http\Response
	 */
	public function edit(OrderList $orderList) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\OrderList  $orderList
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, OrderList $orderList) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\OrderList  $orderList
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(OrderList $orderList) {
		//
	}
}
