<?php

namespace App\Http\Controllers;

use App\UserMain;
use App\Customer;
use App\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory = DB::table('catagory')
            ->get();

        return view('user.index')
            ->with('catagory', $catagory);
    }
    public function profile(Request $request)
    {
        $customer = Customer::where('loginid', $request->session()->get('loggedUser')->id)
                            ->first();
        $catagory = DB::table('catagory')
                        ->get();
        return view('user.profile')
                ->with('customer', $customer)
                ->with('catagory', $catagory);
    }

    public function updateProfile(Request $request)
    {
        $customer = Customer::where('loginid', $request->session()->get('loggedUser')->id)
                            ->first();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('user.profile');
    }

    public function password(Request $request)
    {
        $catagory = DB::table('catagory')
                        ->get();
        return view('user.password')
                ->with('catagory', $catagory);
    }
    public function updatePassword(Request $request)
    {
        $customer = Login::find($request->session()->get('loggedUser')->id);
        if ($request->newPass != $request->cNewPass) {
            $request->session()->flash('msg', 'Password not matched');
        }else if ($customer->password != $request->cPass) {
            $request->session()->flash('msg', 'Wrong password');
        }else{
            $customer->password = $request->newPass;
            $customer->save();
            $request->session()->flash('msg', 'Password successfully changed');
        }
        return redirect()->route('user.password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserMain  $userMain
     * @return \Illuminate\Http\Response
     */
    public function show(UserMain $userMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserMain  $userMain
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMain $userMain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserMain  $userMain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMain $userMain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserMain  $userMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMain $userMain)
    {
        //
    }
}
