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

    public static function findWithPrice(Array $id, $seat)
    {
      $data = DB::table('plane_schedules')
        ->join('plane_fares', 'plane_fares.plane_id','=','plane_schedules.plane_id')
        ->select('plane_schedules.from',
                'plane_schedules.id',
                'plane_schedules.gate',
                'plane_schedules.destination',
                'plane_schedules.boarding_time',
                'plane_fares.'.$seat)
        ->whereIn('plane_schedules.id', $id)
        ->get();

      return $data;
    }
    public static function findSchedule($from, $destination, $date, $seat, $total)
    {
      $dataSchedule = DB::table('plane_schedules')
        ->join('planes', 'planes.id', '=', 'plane_schedules.plane_id')
        ->join('plane_fares', 'plane_fares.plane_id','=','plane_schedules.plane_id')
        ->select('plane_schedules.from',
                'plane_schedules.id',
                'plane_schedules.gate',
                'plane_schedules.destination',
                'plane_schedules.boarding_time',
                'plane_schedules.duration',
                'planes.plane_name',
                'plane_fares.'.$seat)
        ->where([
        ['plane_schedules.from', '=', $from],
        ['plane_schedules.destination', '=', $destination],
        ['plane_schedules.boarding_time', 'LIKE', '%'.$date.'%'],
        ['plane_schedules.'.$seat, '>=', $total]
      ])->get();
      return $dataSchedule;
    }
    public static function seatMath($total, $seat, $id)
    {
      PlaneSchedule::whereIn('id', $id)->decrement($seat, $total);
    }
}
