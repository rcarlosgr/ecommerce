<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        // $validated = $request->validated();
        $name = trim($request->name);
        $lastname = trim($request->lastname);
        $dni = trim($request->dni);
        $password = trim($request->password);
        if (!(
            preg_match('#^[a-zA-Z ]{1,50}$#', $name) === 1
            && preg_match('#^[a-zA-Z ]{1,50}$#', $lastname) === 1
            && preg_match('#^[0-9]{8}$#', $dni) === 1
            && preg_match('#^[a-zA-Z0-9]{6,20}$#', $password) === 1
        )) {
            return [
                'type' => 'error',
                'message' => 'Complete todos los campos de manera correcta'
            ];
        }
        if ($this->existsDni($dni)) {
            return [
                'type' => 'error',
                'message' => 'El dni ya esta registrado'
            ];
        }
        if (strcmp($password, $request->passwordConfirmation) !== 0) {
            return [
                'type' => 'error',
                'message' => 'Las contraseñas no coiciden'
            ];
        }
        $customer->name = $name;
        $customer->lastname = $lastname;
        $customer->dni = $dni;
        $customer->password = Hash::make($password);
        $customer->save();
        return [
            'type' => 'success',
            'message' => 'Gracias por registrarte.'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
    public function validateLogin(Request $request)
    {
        // return $request;
        $customer = Customer::where('dni', $request->dni)->first();
        if ($customer) {
            if (Hash::check($request->password, $customer->password)){
                session([
                    'dni' => $customer->dni,
                    'name' => $customer->name,
                    'lastname' => $customer->lastname
                ]);
                return 'true';
            }
        }
        return 'false';
    }
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
    public function existsDni($dni)
    {
        if (Customer::where('dni', $dni)->first()) return true;
        return false;
    }
}
