<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'subtotal',
        'no_resi',
        'status_order_id',
        'payment_method',
        'shipping_price',
        'courier',
        'address',
        'message',
        'payment_proof' ];
}
