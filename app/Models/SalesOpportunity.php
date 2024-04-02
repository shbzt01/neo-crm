<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOpportunity extends Model
{
    protected $table = 'sales_opportunities';

    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id');
    }
}