<?php

namespace App\Repositories;

use App\Models\File;
use App\Interfaces\FileEloquentInterface;

/**
 * Class FileEloquentRepository
 */
class FileEloquentRepository extends BaseEloquentRepository implements FileEloquentInterface
{
    protected $modelName = File::class;
}
