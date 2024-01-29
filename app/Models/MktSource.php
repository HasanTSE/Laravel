<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MktSource extends Model
{
    protected $table = "mkt_sources";
    protected $guarded;
    
    use HasFactory;

    public function marketing_status(){
    return $this->belongsTo(MarketingStatus::class, 'company_id');
    }
}
