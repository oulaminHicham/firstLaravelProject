<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
                $customers = customer::all();
                return view('Customers.index' , ['customers'=>$customers]);
            }
            // 
            public function show($id){
                $customer = customer::find($id);
                return view('Customers.show' , ['id'=>$id , 'customer'=>$customer]);
            }
            //
            public function create(){
                return view('customers.create');
            }
            // 
            public function store(Request $request){
        
                $customer = new customer;
                $customer ->firstName = $request ->firstName ;
                $customer ->lastName = $request ->lastName ;
                $customer ->phone = $request ->phone ;
                $customer ->email = $request ->email ;
                $customer->save();
                // customer::create([
                //     'firstName'=>$request ->firstName ,
                //     'lastName'=>$request ->lastName ,
                //     'phone'=>$request ->$request ->phone ,
                //     'email'=>$request ->$request ->email 
                // ]);
                return to_route('customers.index');
            }
            //
            public function edit($id){
                $customer = customer::find($id);
                return view('Customers.edit' , ['customer' => $customer]);
            }
            
            public function update(Request $request ,$id){
                $customer = customer::find($id);
                // $customer ->firstName = $request ->firstName ;
                // $customer ->lastName = $request ->lastName ;
                // $customer ->phone = $request ->phone ;
                // $customer ->email = $request ->email ;
                // $customer->save();
                // second method
                // $customer->update([
                //     'firstName'=>$request ->firstName ,
                //     'lastName'=>$request ->lastName ,
                //     'phone'=>$request ->$request ->phone ,
                //     'email'=>$request ->$request ->email 
                // ]);
                $customer->update($request -> all);
                return to_route('customers.index');
            }
            public function destroy($id){
                // $customer = customer::find($id);
                // $customer ->delete();
                customer::destroy($id);
                return to_route('customers.index');
            }
}
