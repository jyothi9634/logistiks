<?php

/* * **********************************
 * Purpose : Email configuration and send mail
 * Author : Suresh
 * Company : Logistiks
 * Description : In the helper we are implementing email send Functionality
 * Created At : 10th Aug 2016
 * 
 *
 */
function sendEmail($config, $data) {
    //send 
    
    return Mail::send(
                    $config['view'], $data, function ($message) use ($config) {
                $message
                        ->to($config['email'], $config['name'])
                        ->subject($config['subject']);

                if (isset($config['cc']) && $config['cc'] && env('APP_DEBUG') == 'true') {
                    $message->cc($config['cc']);
                }

                if (isset($config['bcc']) && $config['bcc'] && env('APP_DEBUG') != 'true') {

                    $message->bcc($config['bcc'], 'Logistiks');
                }

                if (isset($config['attachment_path']) && $config['attachment_path']) {
                    $message->attach($config['attachment_path']);
                }
            }
    );
}
