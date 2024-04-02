<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function customerSegment()
    {
        return $this->belongsTo(CustomerSegment::class, 'segment_id');
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