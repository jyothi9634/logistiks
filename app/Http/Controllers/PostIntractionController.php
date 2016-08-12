<?php

/* * **********************************
 * Purpose : post intractions like message conversations
 * Author : Suresh
 * Company : Logistiks
 * Description : In the controller we are implementing message conversation
 * Created At : 10th Aug 2016
 * 
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Models\PostIntraction;

class PostIntractionController extends Controller
{
    function __construct(PostIntraction $postIntraction) {
        $this->postIntraction = $postIntraction;
    }


    public function buyerPostMessages($id=null) {
        $messagesList = $this->postIntraction->getMessagesListByPostId($id);
        return view("postIntractions.buyerPostMessages",['messagesLists'=>$messagesList]);
    }
}
