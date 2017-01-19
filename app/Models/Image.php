<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Image extends Model
{
    //
    use CrudTrait;

    protected $table = 'images';
    protected $primaryKey = 'id';

    protected $fillable = ['filename','position'];

    protected $casts = [
        'filename' => 'array'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function setPhotosAttribute($value)
    {
        $attribute_name = "filename";
        $disk = "uploads";
        $destination_path = "";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
