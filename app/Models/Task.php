<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'card_task';
    protected $primaryKey = 'task_id';

    protected $fillable = [
        'owner_id',
        'task_record_id',
        'title',
        'description',
        'status',
        'priority',
        'deadline',
    ];
//    public static function where(string $string, string $string1, $id)
//    {
//    }

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'task_id');
    }
    public function taskRecord(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TaskRecord::class, 'task_record_id', 'task_record_id');
    }
}
