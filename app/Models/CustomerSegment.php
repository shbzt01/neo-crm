<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerSegment extends Model
{
    protected $table = 'customer_segments';
    protected $fillable = ['name', 'description'];

    public function customers()
    {
        return $this->hasMany(Customer::class, 'customer_segment_id');
    }
}
