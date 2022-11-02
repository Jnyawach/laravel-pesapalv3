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
       'last_name',
       'phone_number',
       'email',
       'amount',
       'currency',
       'reference',
       'description',
       'status',
       'tracking_id',
       'payment_method'
    ];
}
