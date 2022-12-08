<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DownloadKit
 *
 * @property $id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DownloadKit extends Model
{
    protected $table = "download_kit";

    static $rules = [
        'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
