<?php namespace Bantenprov\RasioGMSmpMts\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RasioGMSmpMtsCommand class.
 *
 * @package Bantenprov\RasioGMSmpMts
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmpMtsCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rasio-guru-murid-smp-mts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RasioGMSmpMts package';

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
        $this->info('Welcome to command for Bantenprov\RasioGMSmpMts package');
    }
}
