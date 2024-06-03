<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
      ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'STRATEGY_UNSPECIFIED', //If instance was created without seeder, simply unspecify
    ];

}
