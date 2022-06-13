<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'uuid',
        'slug',
        'name',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $uuid = Str::uuid();
            $model->uuid = $uuid;

            $slug = Str::slug($model->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
    public function findBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_assign_to_roles',
            'role_id','permission_id')->withPivot("role_id", "permission_id")->withTimestamps();
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'role_assign_to_user');
    }
}
