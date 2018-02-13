<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use Notifiable;

    protected $fillable = [
        'TodoName', 'IsDone', 'OrderNum', 'UserId'
    ];
}
