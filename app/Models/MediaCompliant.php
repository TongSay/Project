<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Compliant;

class MediaCompliant extends Model
{
    use HasFactory;

    protected $fillable = ['id_compliant', 'filename'];

    public function compliants()
    {
        return $this->belongsTo(Compliant::class,'id_compliant','id' );
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['file'] = json_encode($value);
    }
}
