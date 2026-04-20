<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    protected $primaryKey = 'section_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['sequence_number','section_id', 'sub_strand_id', 'name', 'description', 'content'];

}
