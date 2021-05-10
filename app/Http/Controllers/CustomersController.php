<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
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

    private function modifyStrings($array)
    {
        $array['first_name'] = Str::ucfirst($array['first_name']);
        $array['middle_name'] = Str::ucfirst($array['middle_name']);
        $array['last_name'] = Str::ucfirst($array['last_name']);
        $array['municipality'] = Str::ucfirst($array['municipality']);
        $array['barangay'] = Str::ucfirst($array['barangay']);
        $array['street'] = Str::ucfirst($array['street']);

        return $array;
    }

    public function generateNextBilling()
    {
        $dateToday = Carbon::now();
        // $dateToday->month = 12;
        // $dateToday->day = 31;
        // $dateToday->year = 2020;


        $dateForFeb = Carbon::now();
        $dateForFeb->month = 2;
        $daysInFeb = $dateForFeb->daysInMonth;


        if($dateToday->month === 1 && $dateToday->day > $daysInFeb)
        {
            $dateToday->day = 1;
            $dateToday->month = 2;
        }

        $billing = $dateToday->addMonths(1);
        return $billing->format('Y-m-d');

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

        $customerData = $this->modifyStrings($customerData);

        $customerData['next_billing'] = $this->generateNextBilling();


        Customer::create($customerData);

        return redirect(route('new-customer'))->with([
            'success' => true,
            'message' => 'New Customer was created successfully'
        ]);
    }
}
