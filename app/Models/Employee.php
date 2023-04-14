<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    public function getCategory() {
        return $this->hasOne(Category::class,"employee_id","id");
    }
}
