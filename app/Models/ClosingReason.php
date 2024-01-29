<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosingReason extends Model
{
    protected $table = 'closing_reasons';
    protected $guarded = [];
    use HasFactory;

    public function marketing_status(){
    return $this->belongsTo(MarketingStatus::class, 'company_id');
    }

}
