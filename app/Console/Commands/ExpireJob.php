+<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;

class ExpireJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ExpireJob:cronjob';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expire booking';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->plane = 'App\Models\PlaneSchedule';
        $this->train = 'App\Models\TrainSchedule';
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $modelS = '';
        $bookingExp = Booking::where('expire', '<=', date('Y-m-d H:i:s'))->with('detail_booking')->get();
        foreach($bookingExp as $bE){
          if ($bE->vehicle == 'plane') {
            $modelS = $this->plane;
          }else{
            $modelS = $this->train;
          }
          $increment = $modelS::where('id', $bE->schedule_id)->increment($bE->detail_booking->class, $bE->detail_booking->passenger);
        }
        $delete = Booking::where('expire', '<=', date('Y-m-d H:i:s'))->delete();
        if ($delete) {
          $this->info('Expired booking deleted!');
        }else{
          $this->info('Nothing expired');
        }
    }
}
