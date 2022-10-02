<?php

namespace Ibnudirsan\HandlerSanctum\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class publishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'config:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command to publish config HandlerSanctum Package.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            Artisan::call("vendor:publish --tag=sanctum-handler-ibnudirsan");
            $this->line('Oke');
        } catch (\Exception $exception) {
            $this->line('Error');
        }
    }
}
