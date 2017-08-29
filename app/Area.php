<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['area_name'];

    /**
     * Area has many Tools.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tools()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = area_id, localKey = id)
        return $this->hasMany(Tool::class);
    }
}
