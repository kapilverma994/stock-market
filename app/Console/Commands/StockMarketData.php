<?php

namespace App\Console\Commands;

use App\Events\GetRateEvent;
use Illuminate\Console\Command;

class StockMarketData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stockmarket:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch stock market data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return   event(new GetRateEvent());
    }
}
