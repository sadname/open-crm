<?php
//Обращения пользователей

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class references extends Model
{
    use HasFactory;
    protected $fillable = ['id','FIO','email','telephone','prichinaObr','textObr','idPodr','status'];
}
