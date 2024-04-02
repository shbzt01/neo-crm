<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerSegment extends Model
{
    protected $table = 'customer_segments';

    public function customers()
    {
        return $this->hasMany(Customer::class, 'segment_id');
    }
}