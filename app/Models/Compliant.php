<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\LoanType;
class Compliant extends Model
{
    use HasFactory, Notifiable;
    use HasFactory;

    protected $guarded =[]; 

    public function loantype(){
        return $this->belongsTo(LoanType::class,'id_loan_type','id' );
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['file'] = json_encode($value);
    }
}
