<?php

namespace App;

use App\Models\BloodGroup;
use App\Models\EmployeeDocument;
use App\Models\Role;
use App\Models\Ward;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'slug',
        'first_name',
        'first_name_bn',
        'last_name',
        'last_name_bn',
        'father_name',
        'father_name_bn',
        'mother_name',
        'mother_name_bn',
        'gender',
        'phone_number',
        'emergency_contact',
        'dob',
        'marital_status',
        'spouse_name',
        'spouse_name_bn',
        'present_address',
        'permanent_address',
        'nid',
        'cover',
        'file',


        'job_type',
        'join_date',
        'salary',
        'designation',

        'email',
        'password',
        'status',

        'ward_id',
        'blood_group_id',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $slug = Str::slug($model->first_name .'-'.$model->last_name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;

            $unique_id = $slug . $model->freshTimestampString();
            $model->uuid = substr(md5($unique_id), 0, 10);
        });
        static::updating(function($model) {
            $slug = Str::slug($model->first_name .'-'.$model->last_name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $model->slug = $count ? "{$slug}-{$count}" : $slug;

            $unique_id = $slug . $model->freshTimestampString();
            $model->uuid = substr(md5($unique_id), 0, 10);
        });

    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function wards() {
        return $this->belongsTo(Ward::class,'ward_id','id');
    }

    public function bloodGroups()
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id', 'id');
    }

    public function employeeDocuments()
    {
        return $this->hasMany(EmployeeDocument::class, 'employee_id', 'id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function findBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_assign_to_user',
            'user_id','role_id')->withPivot("user_id","role_id")->withTimestamps();
    }

}
