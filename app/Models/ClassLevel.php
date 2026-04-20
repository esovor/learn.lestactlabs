<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassLevel extends Model
{
    protected $table = 'class_levels';
    protected $primaryKey = 'class_level_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['sequence_number','class_level_id', 'level_id', 'name', 'description'];

    // A class belongs to a level
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }


    // A class has many subjects
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class, 'class_level_id');
    }

}
