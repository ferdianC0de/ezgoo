<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlaneSchedule extends Model
{
    public function plane()
    {
      return $this->belongsTo('App\Models\Plane');
    }
    public function airport()
    {
      return $this->belongsTo('App\Models\Airport');
    }

    public static function seatMath($total, $seat, $id)
    {
      $dt = PlaneSchedule::find($id);
      $math = $dt[0]->$seat - $total;
        $plane = DB::table('plane_schedules')
        ->where('id', $id)
        ->update([
          $seat => $math
        ]);
    }
}
