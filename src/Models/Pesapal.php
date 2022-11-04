<?php

namespace Nyawach\LaravelPesapal\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesapal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
        'phone_number',
        'billing_address_line_1',
        'billing_address_line_2',
        'city',
        'state',
        'postal_code',
        'country_code',
        'zip_code',
        'language',
        'email',
        'amount',
        'currency',
        'merchant_reference',
        'description',
        'status',
        'tracking_id',
        'payment_method'
    ];
}
