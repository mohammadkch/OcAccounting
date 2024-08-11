<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OcUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:oc-users';

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
        $this->execute('occtl show users', null);
    }
}
