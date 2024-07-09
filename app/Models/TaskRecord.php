<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskRecord extends Model
{
    use HasFactory;
    protected $table = 'task_record';

    public function task(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Task::class, 'task_record_id','task_record_id');
    }
}
