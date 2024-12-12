<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['item_no', 'name', 'description', 'image', 'para1', 'para2', 'gallery', 'slug', 'status'];
        
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function image()
    {
        return $this->hasOne(ServiceImage::class)->orderBy('created_at', 'asc');
    }
    
    public function singleImage($id)
    {
        return ServiceImage::class->where('id', $id);
    }

}
