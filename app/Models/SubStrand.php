<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubStrand extends Model
{
    protected $table = 'sub_strands';
    protected $primaryKey = 'sub_strand_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['sequence_number', 'sub_strand_id', 'strand_id', 'name', 'description'];
}
