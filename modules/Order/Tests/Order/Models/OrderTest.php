<?php

namespace Modules\Order\Tests\Order\Models;

use Modules\Order\Models\Order;
use Modules\Order\Tests\Order\OrderTestCase;

class OrderTest extends OrderTestCase
{
    public function test_it_creates_an_order(): void
    {
        $order = Order::factory()->create();
        $this->assertTrue(true);
    }
}
