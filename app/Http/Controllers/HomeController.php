<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $customer = Customer::where('dni', $request->dni)->first();
        // if ($customer) {
        //     if (Hash::check($request->password, $customer->password)){
        //         session([
        //             'dni' => $customer->dni,
        //             'name' => $customer->name,
        //             'lastname' => $customer->lastname
        //         ]);
        //         return redirect('/');
        //     }
        // }
        // return 'false';
        $products = Product::all();
        return view('home', ['products' => $products]);
    }
}
