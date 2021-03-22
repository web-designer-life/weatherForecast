<?php

namespace App\Console\Commands;

use App\Services\Weather\WeatherForecast;
use Illuminate\Console\Command;

class ImportForecast extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:forecast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import weather forecast';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param WeatherForecast $weatherForecast
     * @return int
     */
    public function handle(WeatherForecast $weatherForecast)
    {
        $weatherForecast->getWeather();
    }
}
