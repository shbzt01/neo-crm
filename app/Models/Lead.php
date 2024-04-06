<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';
    protected $fillable = [
        'customer_id',
        'contact_details',
        'source',
        'initial_notes',
        'status'
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function salesOpportunities()
    {
        return $this->hasMany(SalesOpportunity::class);
    }
}
