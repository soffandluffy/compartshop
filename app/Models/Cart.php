<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'part_id',
        'qty',
    ];

    public function part()
    {
        return $this->belongsTo(Part::class, 'part_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public static function getTotalPrice()
    {
        $carts = Cart::with('part')->where('user_id', auth()->user()->id)->get();
        $totalprice = 0;
        foreach ($carts as $cart) {
            $price = $cart->part->price * $cart->qty;
            $totalprice += $price;
        }
        $totalprice += 30000;
        return $totalprice;
    }
}