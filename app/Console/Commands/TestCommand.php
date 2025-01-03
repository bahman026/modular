<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Modules\Order\Database\Factories\OrderFactory;
use Modules\Order\Models\Order;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        dd(\DB::getServerVersion());
        //        $user = User::query()->whereI
        //        $user->nam
        dd(Order::factory()->create());
        $order = OrderFactory::new()->create();
        dd($order);
        //
    }
}
