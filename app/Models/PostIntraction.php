<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostIntraction extends Model
{
    protected $table = 'post_interactions';
    protected $primaryKey = 'id';
    protected $fillable = ['id','datetime','message_subject','message','lgtks_post_id', 'message_type','message_from','message_to','message_to','transit_days','price','buyer_seller_flag'];
    
    public function userDetails(){
            return $this->hasOne('App\Models\User', 'id', 'message_from');
    }
    
    public function savePostIntractions($inputs) {
        return $this->create($inputs);    
    }
    
    public function getMessagesListByPostId($lgtksPostId=null) {
        return $this->with('userDetails')->where('lgtks_post_id',$lgtksPostId)->get();
    }
}
