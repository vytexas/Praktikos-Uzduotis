<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['assigned_to', 'task', 'brand', 'model', 'year', 'owner', 'phone', 'due_to', 'description', 'status'];

    use HasFactory;
}
