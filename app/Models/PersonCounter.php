<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** 
 * @properity int $id
 * @properity int $name
 * @properity int $team_kills
 * 
 */
class PersonCounter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'team_kill', 'id'];
}
