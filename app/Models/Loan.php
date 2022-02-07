<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\LoanType;

class Loan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function loan()
    {
        return $this->belongsTo(LoanType::class,'id_loan_type','id');
    }
}
