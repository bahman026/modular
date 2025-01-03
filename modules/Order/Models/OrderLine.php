<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $product_price_in_cents
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderLine query()
 * @mixin \Eloquent
 */
class OrderLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_price_in_cents',
        'quantity',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'product_id' => 'integer',
        'product_price_in_cents' => 'integer',
        'quantity' => 'integer',
    ];
}
