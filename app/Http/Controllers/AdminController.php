<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function cat() {
		$catagory = DB::table('catagory')
			->get();
		return $catagory;
	}
	public function index() {
		
		$catagory = DB::table('catagory')
					->get();
		$orderList = DB::table('view_customer_invoice')
					->where('status', 'ON_PROCESS')
					->get();
		$orderNumber = $orderList->count();
		$delNumber = DB::table('view_customer_invoice')
					->where('status', 'DELIVERED')
					->get()
					->count();
		$saleNumber = DB::table('view_customer_invoice')
					->get()
					->sum('price');
		$userNumber = DB::table('customer')
					->get()
					->count();
		return view('admin.home')
			->with('orderList', $orderList)
			->with('orderNumber', $orderNumber)
			->with('delNumber', $delNumber)
			->with('saleNumber', $saleNumber)
			->with('userNumber', $userNumber);
	}
	public function customers(Request $request)
	{
		$customerList = DB::table('customer')
						->get();
		return view('admin.customer-list')
				->with('customerList', $customerList);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		// $catagory = DB::table('catagory')
		// 	->get();
		// return view('admin.product_show')
		// 	->with('catagory', $catagory);
	}
	public function product() {
		$catagory = DB::table('catagory')
			->get();

		$products = DB::table('product_all')
			->get();

		return view('admin.product_show')
			->with('catagory', $catagory)
			->with('products', $products);
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
	 * @param  \App\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function show(Admin $admin) {
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Admin $admin) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Admin $admin) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Admin $admin) {
		//
	}
}
