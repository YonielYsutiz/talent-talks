<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersViewVideo
 *
 * @property $id
 * @property $user_id
 * @property $slug_video
 * @property $points
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsersViewVideo extends Model
{
    protected $table = "users_view_video";

    static $rules = [
		'user_id' => 'required',
		'slug_video' => 'required',
		// 'points' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','slug_video','points'];



}
