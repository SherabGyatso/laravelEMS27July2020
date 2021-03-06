<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'listofficecategory';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
