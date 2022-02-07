<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\JobType;

class Job extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function jobtype(){
        return $this->belongsTo(JobType::class,'id_job_type','id' );
    }
    public function jobsuser (){
        return $this->belongsTo(User::class,'id_user', 'id');
    }

 
}
