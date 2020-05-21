<?php

namespace Different\Dwfw\app\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DwfwSeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dwfw:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dwfw data seeder';

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
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('db:seed', ['--class' => 'DwfwSeeder']);
    }
}
