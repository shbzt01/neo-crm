<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'company',
        'segment_id',
    ];
    public function customerSegment()
    {
        return $this->belongsTo(CustomerSegment::class, 'customer_segment_id');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function salesOpportunities()
    {
        return $this->hasMany(SalesOpportunity::class);
    }
}
