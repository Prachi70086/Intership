<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'dst_mst01';
    protected $primaryKey = 'DSM_DSCD';
    public $timestamps = false;

    protected $fillable = [
        'DSM_DSCD',
        'DSM_DSNM',
    ];

    public function blocks()
    {
        return $this->hasMany(Block::class, 'BLM_DSCD', 'DSM_DSCD');
    }
}