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
   
}