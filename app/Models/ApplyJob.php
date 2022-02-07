<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\Models\Job;

use App\Models\Gender;

class ApplyJob extends Model
{
    use HasFactory, Notifiable;
    use HasFactory;
    protected $guarded=[];

    public function applyedjob (){
        return $this->belongsTo(Job::class,'id_job', 'id');
    }

    public function genderapplyedjob (){
        return $this->belongsTo(Gender::class,'gender', 'id');
    }
}
