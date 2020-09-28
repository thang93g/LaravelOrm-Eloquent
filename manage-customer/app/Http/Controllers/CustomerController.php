<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    function index(){
        $customers = Customer::all();
        return view('customer.list',compact('customers'));
    }

    function create(){
        return view('customer.create');
    }

    function store(Request $request){
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customer.index');
    }

    function edit($id){
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }

    function update(Request $request,$id){
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->dob = $request->dob;
        $customer->save();
        return redirect()->route('customer.index');
    }

    function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
