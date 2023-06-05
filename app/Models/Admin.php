<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use App\Models\Message;


class Admin extends Authenticatable
{

    protected $guarded = [];
    protected $table = 'admins';


    public function messages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

}
