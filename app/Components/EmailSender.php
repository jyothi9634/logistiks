<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Components;

use Config;
use DB;

/**
 * Description of sendMailToSeller
 *
 * @author Suresh
 */
class EmailSender {
    
    public function sendMailToSeller($input) {
        
        $token = md5(uniqid(rand(),1));

        $storekey = $this->storeAuthkey($input[0]->id,$token);
        
        $registered_id = $input[0]->id;

        $config = ['view' => 'emails.registermail',
            'name' => $input[0]->first_name,
            'email' => $input[0]->email_id,
            'subject' => 'User Authentication'];

        return sendEmail($config, ['description' => 'http://www.logistiks.com/new/user_activation?key='.$token.'&registered_id='.$registered_id, 'email' => $input[0]->email_id , 'name' => $input[0]->first_name,'token'=>$token,'registered_id'=>$registered_id ]);
        
    }

    

    public function sendMailToUser($input) {
        
        $token = md5(uniqid(rand(),1));

        $user_id = $this->storeuserAuthKey($input['email_id'],$token);
        
        $config = ['view' => 'emails.registermail',
            'name' => $input['user_name'],
            'email' => $input['email_id'],
            'subject' => 'User Authentication'];

        return sendEmail($config, ['description' => 'http://www.logistiks.com/new/new_user_activation?key='.$token.'&user_id='.$user_id, 'email' => $input['email_id'] , 'name' => $input['user_name'],'token'=>$token,'user_id'=>$user_id ]);
        
    }

    public function storeAuthkey($reg_id,$token){

    	DB::table('lgtks_users')->where('lgtks_registrations_id',$reg_id)
    		->update(array('activation_key'=>$token));

    }

    public function storeuserAuthKey($email_id,$token){

        return DB::table('lgtks_users')->insertGetId(['email_id'=>$email_id,'activation_key'=>$token]);

    }

}
