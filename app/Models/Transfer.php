<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'name_of_account',
        'account_number',
        'bank_name',
        'swift_code',
        'source_of_funds',
        'purpose',
        'user_id',
        'status',
        'type',
    ];
}
