<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'amount',
        'note',
        'employ_id',
        'user_id',
        'amount',
        'action',
        'image',
        'date',
        'payment_type',
    ];

    public function employ ()
    {
        return $this->belongsTo(User::class, 'employ_id');
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
