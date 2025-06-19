<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'payment_method',
        'amount_paid',
        'payment_date',
        'status',
        'transaction_id',
    ];

    public $timestamps = false; // Pas de created_at/updated_at pour cette table si payment_date est suffisant
}