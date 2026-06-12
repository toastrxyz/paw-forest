<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adoption extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date',
        'comment',
        'status',
        'employee_id',
        'animal_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}