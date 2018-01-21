<?php

namespace App\Models;

/**
 * Class File
 */
class File extends BaseModel
{
    protected $fillable = [
        'mime',
        'original_name',
        'project_id',
        'fileName'
    ];

    /**
     * Returns the project that file belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
