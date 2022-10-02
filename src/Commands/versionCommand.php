<?php

namespace Ibnudirsan\HandlerSanctum\Commands;

use Illuminate\Console\Command;

class versionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:HandlerSanctum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command to get version HandlerSanctum Package.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return "oke";
    }
}
