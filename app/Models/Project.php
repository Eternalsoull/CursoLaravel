<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_project';

    protected $fillable = [
        'project_name',
        'project_description',
        'project_color'
    ];

    /**
     * Get the tasks for the project.
     */

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'project_id', 'id_project');
    }
}
