<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CountView extends Model
{
     protected $table = 'tbl_countview';

       public static function Getdate($getde, $ip, $tour_id){
       return self::where(['created_at'=> $getde, 'ip'=> $ip, 'tour_id'=> $tour_id])->first();
    }

        public function tour(){
    	return $this->belongsTo(Tour::class);
    }
        public static  function getc(){
    	 $data = DB::table('tbl_countview as v')
    ->select(DB::Raw('t.title as title  ,v.cityName, v.countryName ,v.timezone,v.ip as ip,v.tour_id as tour_id,v.created_at as month, count(*) as total '))->
    groupBy(DB::raw('(v.tour_id),(v.ip),(v.cityName),(v.countryName),(v.timezone),(month),(t.title)'))
    ->orderby('v.tour_id', 'asc')
    ->join('tbl_tours as t', 't.id', '=', 'v.tour_id')
    ->get();

	   return $data;
    }



}
