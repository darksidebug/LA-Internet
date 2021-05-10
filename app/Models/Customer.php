<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey='account_number';

    public $incrementing='false';

    protected $fillable=[
        'account_number',
        'first_name',
        'middle_name',
        'last_name',
        'street',
        'barangay',
        'municipality',
        'plan_id',
        'next_billing',
        'password'
    ];
}
