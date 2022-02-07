<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\Models\Loan;

use App\Models\Gender;

class ApplyLoan extends Model
{
    use HasFactory, Notifiable;

    use HasFactory;

    protected $guarded=[];

    public function applyedloan (){
        return $this->belongsTo(Loan::class,'id_loan', 'id');
    }

    public function genderapplyedloan (){
        return $this->belongsTo(Gender::class,'gender', 'id');
    }
}
