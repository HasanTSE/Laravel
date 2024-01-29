<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MktLead extends Model
{
    protected $table = "mkt_leads";
    protected $guarded;
    use HasFactory;

    public function marketing_scope(){
    return $this->belongsTo(MarketingScope::class, 'focus_scope_id');
    }
    public function party_name(){
    return $this->belongsTo(Party::class, 'customer_id');
    }
    public function source_name(){
    return $this->belongsTo(MktSource::class, 'source_id');
    }
}
