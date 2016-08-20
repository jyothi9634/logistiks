<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Session;


class Login extends Model
{
 
   public function authenticateUser($email,$password){

        $result = DB::table('lgtks_users')->where(array('email_id'=>$email,'current_password'=>$password))->get();
        
        return $result;
   }

   public function getInviteusers($user_id){

   			$reg_id = DB::table('lgtks_users')->where('id',$user_id)->pluck('lgtks_registrations_id');
   			
   			return DB::table('buisness_informations as bus')
   				   ->leftjoin('registrations as rg','rg.buisness_info_id','=','bus.id')
   				   ->take(10)
   				   ->get();

   }
   
}