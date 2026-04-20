<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'level_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['sequence_number','level_id', 'name', 'description'];

    public function classLevels (): HasMany
    {
        return $this->hasMany(ClassLevel::class, 'level_id', 'level_id');
    }

}
