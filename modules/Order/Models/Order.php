<?php

namespace Modules\Order\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Modules\Order\Database\Factories\OrderFactory;

/**
 * @property int $id
 * @property int $user_id
 * @property string $total_price
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Modules\Order\Database\Factories\OrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 *
 * @mixin Eloquent
 */
class Order extends Model
{
    use HasFactory;

    protected static function newFactory(): OrderFactory
    {
        return new OrderFactory;
    }
    //
}
