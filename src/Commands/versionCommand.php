<?php

namespace Ibnudirsan\HandlerSanctum\Commands;

use Composer\InstalledVersions;
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
        try {
            $version = InstalledVersions::getVersion('ibnudirsan/handler-sanctum');
            $this->components->info("Handler Sanctum Package Version <bg=blue;fg=white> $version </>");
            $this->line('<bg=black;fg=white>..:: Created by ibnudirsan ::..</>');
            $this->newLine();
        } catch (\Exception $exception) {
            //throw $th;
        }
    }
}
