<?php

namespace Ibnudirsan\HandlerSanctum\App\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class publishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'HandlerSanctum:config';

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
            $this->components->info('Successfully publish config HandlerSanctum Package');
        } catch (\Exception $exception) {
            $this->components->error('Error publish config HandlerSanctum Package');
        }
    }
}
