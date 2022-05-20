<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'status', 'referral_source', 'position_title', 'industry', 'project_type', 'company', 'project_description', 'description', 'budget', 'website', 'linkedin', 'address_street', 'address_city', 'address_state', 'address_country', 'address_zipcode', 'created_by_id', 'modified_by_id', 'assigned_user_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by_id = auth()->user()->id;
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function created_by()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modified_by()
    {
        return $this->hasOne('App\Models\User', 'id', 'modified_by_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assigned_user()
    {
        return $this->hasOne('App\Models\User', 'id', 'assigned_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function phones()
    {
        return $this->hasMany('App\Models\Phone', 'id', 'contact_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function emails()
    {
        return $this->hasMany('App\Models\Email', 'id', 'contact_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function documents()
    {
        return $this->hasMany('App\Models\Document', 'id', 'contact_id');
    }

}
