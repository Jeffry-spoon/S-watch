<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkouts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = [
        'user_id',
        'product_id',
        'payment_status',
        'midtrans_url',
        'midtrans_booking_code',
        'discount_id',
        'discount_percentage',
        'total'
    ];
}
