<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfficialOrder extends Model
{
    use SoftDeletes ;

    protected $fillable =[
        'slug',

        'name',
        'date',
        'file',

        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $slug = Str::slug($model->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;

        });
        static::updating(function ($model) {
            $slug = Str::slug($model->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;

        });
    }
//    public function getFilePathAttribute()
//    {
//        return Storage::disk('public')->get('uploads/' . $this->file);
//    }

    public function findBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
}
