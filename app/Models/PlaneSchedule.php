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
    public static function findSchedule($from, $destination, $date, $seat, $total)
    {
      $dataSchedule = PlaneSchedule::where([
        ['from', '=', $from],
        ['destination', '=', $destination],
        ['boarding_time', 'LIKE', '%'.$date.'%'],
        [$seat, '>=', $total]
      ])->get();
      return $dataSchedule;
    }
    public static function seatMath($total, $seat, $id)
    {
      $data = PlaneSchedule::find($id);
      $math = $data[0]->$seat - $total;
        $plane = DB::table('plane_schedules')
        ->where('id', $id)
        ->update([
          $seat => $math
        ]);
    }
}
