<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacant
 *
 * @property $id
 * @property $company
 * @property $position
 * @property $modality
 * @property $salary
 * @property $email_company
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vacant extends Model
{
    
    static $rules = [
		  'company' => 'required',
		  'position' => 'required',
		  'modality' => 'required',
		  'salary' => 'required',
		  'email_company' => 'required',
      'city' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company','position','modality','salary','email_company', 'city'];

    
    public function scopePosition($query, $position){

      if (empty($position)) return;
      return $query->where('position', $position);

    }

    public function scopeModality($query, $modality){

      if (empty($modality)) return;
      return $query->where('modality', $modality);

    }
    public function scopeCity($query, $city){

      if (empty($city)) return;
      return $query->where('city', $city);

    }

}
