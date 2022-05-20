<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'file', 'status', 'type_id', 'publish_date', 'expiration_date', 'created_by_id', 'modified_by_id', 'assigned_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function documentType()
    {
        return $this->belongsTo('App\Models\DocumentType', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function modified_by()
    {
        return $this->belongsTo('App\Models\User', 'modified_by_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function assigned_by()
    {
        return $this->belongsTo('App\Models\User', 'assigned_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function created_by()
    {
        return $this->belongsTo('App\Models\User', 'created_by_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by_id = auth()->user()->id;
        });
    }

    public function setFileAttribute($file)
    {
        $this->attributes['file'] = upload_document($file, 'documents');
    }

    // getter for status
    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }

}
