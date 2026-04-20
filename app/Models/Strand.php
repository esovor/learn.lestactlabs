<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strand extends Model
{
    protected $primaryKey = 'strand_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['sequence_number', 'strand_id', 'subject_id', 'name', 'description'];

}
