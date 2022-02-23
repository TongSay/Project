<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class MediaJob extends Model
{
    use HasFactory;
    protected $fillable = ['id_job', 'filename'];

    public function jobs()
    {
        return $this->belongsTo(Job::class,'id_job','id' );
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['file'] = json_encode($value);
    }
}
