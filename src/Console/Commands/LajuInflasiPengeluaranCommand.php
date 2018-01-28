<?php namespace Bantenprov\LajuInflasiPengeluaran\Console\Commands;

use Illuminate\Console\Command;

/**
 * The LajuInflasiPengeluaranCommand class.
 *
 * @package Bantenprov\LajuInflasiPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LajuInflasiPengeluaranCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:laju-inflasi-pengeluaran';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\LajuInflasiPengeluaran package';

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
        $this->info('Welcome to command for Bantenprov\LajuInflasiPengeluaran package');
    }
}
