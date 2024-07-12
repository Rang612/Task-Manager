<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table = 'table';

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function taskRecord(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TaskRecord::class,'table_id','table_id');
    }

}
