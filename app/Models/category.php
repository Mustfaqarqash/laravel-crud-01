<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    // Specify the table if it's not the plural form of the model name
    protected $table = 'categories';

    // Specify the primary key column name
    protected $primaryKey = 'cat_id';

    // Disable auto-increment if 'cat_id' is not an auto-incrementing key
    public $incrementing = false;

    // If 'cat_id' is not an integer, specify the key type
    protected $keyType = 'string';

    // Specify which attributes are mass assignable
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
}
