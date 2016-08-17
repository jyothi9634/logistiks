<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Components;

use Config;

/**
 * Description of sendMailToSeller
 *
 * @author Suresh
 */
class EmailSender {
    
    public function sendMailToSeller($input) {
        
        $config = ['view' => 'emails.sendMailToSeller',
            'name' => $input['to_user_name'],
            'email' => $input['to_email'],
            'subject' => $input['message_subject']];
        return sendEmail($config, ['description' => $input['message'], 'email' => $input['to_email'], 'name' => $input['to_user_name']]);
        
    }

}
