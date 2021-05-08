<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    
    protected $defaultPass='changeme';


    private function generateAccountNumber()
    {
        $prefix='LA';
        $dateToday=Carbon::now()->format('mdy');
        $counter=0;
        $temporaryAccountNumber="";
        do{
          
            $temporaryAccountNumber="{$prefix}-{$dateToday}-{$counter}";
            $customer=Customer::find($temporaryAccountNumber);
            $counter++;
        }while($customer);
        return $temporaryAccountNumber;
    }

    public function register()
    {
    
        return view('pages.admin.new-customer', ['page' => 'ADD NEW CUSTOMER']);
    }
    public function store(Request $request)
    {   

        $rules=[
            'first_name'=>'required',
            'last_name'=>'required',
            'municipality'=>'required',
            'barangay'=>'required',
            'street'=>'required',
            'plan_id'=>'required'
        ];

        $this->validate($request,$rules);

        $customerData=Arr::add($request->all(),'account_number',$this->generateAccountNumber());
        $customerData=Arr::add($customerData,'password',Hash::make($this->defaultPass));

        Customer::create($customerData);

    }
}
