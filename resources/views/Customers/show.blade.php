<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
</head>
    
    <div class="w-50 mx-auto mt-5 card" style="width:400px">
      <div class="card-body">
        <h4 class="m-4"><strong>first Name :</strong> {{$customer ->firstName}}</h4>
        <h4 class="m-4"><strong>Last Name :</strong> {{$customer ->lastName}}</h4>
        <h4 class="m-4"><strong>Email :</strong> {{$customer ->email}}</h4>
        <h4 class="m-4"><strong>Phone  :</strong> {{$customer ->phone}}</h4>
        <a href="{{route('customers.index')}}" class="btn btn-primary w-50 mx-auto d-block">Go Back</a>
      </div>
    </div>
    <br>
</html>






<?php

// namespace App\Http\Controllers;

// use App\Models\customer;
// use Illuminate\Http\Request;

// class CustomerController extends Controller
// {
//     public function index(){
//         $customers = customer::all();
//         return view('Customers.index' , ['customers'=>$customers]);
//     }
//     // 
//     public function show($id){
//         $customer = customer::find($id);
//         return view('Customers.show' , ['id'=>$id , 'customer'=>$customer]);
//     }
//     //
//     public function create(){
//         return view('customers.create');
//     }
//     // 
//     public function store(Request $request){

//         $customer = new customer;
//         $customer ->firstName = $request ->firstName ;
//         $customer ->lastName = $request ->lastName ;
//         $customer ->phone = $request ->phone ;
//         $customer ->email = $request ->email ;
//         $customer->save();
//         // customer::create([
//         //     'firstName'=>$request ->firstName ,
//         //     'lastName'=>$request ->lastName ,
//         //     'phone'=>$request ->$request ->phone ,
//         //     'email'=>$request ->$request ->email 
//         // ]);
//         return to_route('customers.index');
//     }
//     //
//     // public function edit($id){
//     //     return 
//     // }
//     //
//     public function update(){
//         customer::where('id', 1)
//         // ->where('destination', 'San Diego')
//         ->update(['delayed' => 1]);
//     }
// }
