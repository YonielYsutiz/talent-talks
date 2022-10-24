<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersViewVacant
 *
 * @property $id
 * @property $user_id
 * @property $vacant_id
 * @property $points
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsersViewVacant extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'vacant_id' => 'required',
		'points' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','vacant_id','points'];



}
