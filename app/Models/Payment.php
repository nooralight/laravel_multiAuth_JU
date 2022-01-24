<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ["method","number_sent","transection_id","represent_name","note","paymentUserID"];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
