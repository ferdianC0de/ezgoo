<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PlaneSchedule;
use App\Models\DetailBooking;

class Booking extends Model
{
    protected $fillable = ['booking_date','status','type','schedule_id'];
    //
    public static function singleTrip($go, $userID)
    {
      $planeSchedule = PlaneSchedule::find($go);
      $bookings = new Booking();
      $bookings->user_id = $userID;
      $bookings->booking_date = date('Y-m-d H:i:s');
      $bookings->status = 1;
      $bookings->type = "Pesawat";
      $bookings->schedule_id = $go;
      $bookings->save();
    }

<<<<<<< HEAD
    public static function roundTrip($go, $back, $userID, $totalCount, $fareTotal)
=======
    public static function roundTrip($go, $back, $userID, $total,$seat)
>>>>>>> 81c611ff4dc583d25d1920d2d7f3b3f2043d120d
    {
      $planeSchedule = PlaneSchedule::find($go);
      $bookings = new Booking();
      $bookings->user_id = $userID;
      $bookings->booking_date = date('Y-m-d H:i:s');
      $bookings->status = 1;
      $bookings->type = "Pesawat";
      $bookings->schedule_id = $go;
      $bookings->save();

      $booking2 = new Booking();
      $booking2->user_id = Auth::user()->id;
      $booking2->booking_date = date('Y-m-d H:i:s');
      $booking2->status = 1;
      $booking2->type = "Pesawat";
      $booking2->schedule_id = $back;
      $booking2->save();

<<<<<<< HEAD
      $detail1 = new DetailBooking();
      $detail1->booking_id = $bookings->id;
      $detail1->passanger = $totalCount;
      $detail1->fare = $fareTotal;
      $detail1->class = $classSeat;
      $detail1->save();

      $detail2 = new DetailBooking();
      $detail2->booking_id = $booking2->id;
      $detail2->passanger = $totalCount;
      $detail2->fare = $fareTotal;
      $detail2->class = $classSeat;
      $detail2->save();
=======
      $detbook = new DetailBooking;
      $detbook->booking_id = $booking2->id;
      $detbook->passenger =  $total;
      $detbook->class = $seat;
      $detbook->save();

      $detbook2 = new DetailBooking;
      $detbook2->booking_id = $bookings->id;
      $detbook2->passenger =  $total;
      $detbook2->class = $seat;
      $detbook2->save();
>>>>>>> 81c611ff4dc583d25d1920d2d7f3b3f2043d120d
    }
}
