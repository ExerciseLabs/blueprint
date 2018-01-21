<?php

namespace App\Models;

class Project extends BaseModel
{
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Returns collection of files that belong to a prpject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany('App\Models\File');
    }
}
