<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'blk_mst'; // your block table name
    protected $primaryKey = 'BLM_BLCD';
    public $timestamps = false;

    protected $fillable = [
        'BLM_BLCD',
        'BLM_DSCD',
        'BLM_BLNM',

    ];
    public function district()
    {
        return $this->belongsTo(District::class, 'BLM_DSCD', 'DSM_DSCD');
    }
    
}