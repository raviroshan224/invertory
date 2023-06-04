<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        return view('index');
    }
   
    public function  index()
    {
        $data['customers']=Customer::all();
        return view('customer', $data);

    }
    public function  create()
    {
        return view('customeradd');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:25',
            'phone' => 'required|integer|min:10|max:15',
            'address' => 'required|string|max:30',
        ]);
    
        Customer::create($validatedData);
    
        return redirect(route('customer'));
    }
    
    public function  show($id)
    {
          
        $customer=Customer::find($id);
    
        return view('customerview', compact('customer'));
       
    
    }
    public function  edit($id)
    { 
        $customer=Customer::find($id);
         return view('customeredit', compact('customer'));
    }
    public function  update(Request $request, Customer $customer, $id)
    {
        $customer=Customer::findorfail($id);

        $customer->update($request->all());
    
        return redirect()->route('customer');

    }
    
    public function  destroy($id)
    {
        Customer::find($id)->delete();
        return redirect(route('customer'));
    }
    
}
