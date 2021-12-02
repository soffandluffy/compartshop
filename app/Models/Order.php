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
        'status_order',
        'payment_method',
        'shipping_price',
        'courier',
        'address',
        'phonenumber',
        'message',
        'payment_proof'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();

        static::deleting(function($order) { // before delete() method call this
             $order->detail()->delete();
             // do the rest of the cleanup...
        });
    }

}