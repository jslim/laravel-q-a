<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    


//relationship with Questions and Users Model

    public function question(){

        return $this->belongsTo(Question::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }


    //for showing

     public function getBodyHtmlAttribute(){

        return \Parsedown::instance()->text($this->body);

    }


}
