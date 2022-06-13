<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Permission extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
        'uuid',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model){
            $uuid = Str::uuid();
            $model->uuid =$uuid;

            $slug = Str::slug($model->title);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;
        });

        static::updating(function($model) {
            $slug = Str::slug($model->title);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class,'permission_assign_to_roles');
    }
    public function findBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }

}
