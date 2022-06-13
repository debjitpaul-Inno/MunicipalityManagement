<?php


use App\Models\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'=> 1,
                'first_name' => 'Abdul',
                'first_name_bn' => 'আব্দুল',
                'last_name' => 'Goni',
                'last_name_bn' => 'গনি',
                'father_name' => 'Mokbul Goni',
                'father_name_bn' => 'মকবুল গনি',
                'mother_name' => 'Bilkis Goni',
                'mother_name_bn' => 'বিলকিস গনি',
                'gender' => 'male',
                'phone_number' => '01680530403',
                'emergency_contact' => '01652361403',
                'dob' => Carbon::createFromFormat('Y-m-d', '1980-08-12'),
                'marital_status' => 'married',
                'spouse_name' => 'Fatema Goni',
                'spouse_name_bn' => 'ফাতেমা গনি',
                'present_address' => 'Ishkaton, Dhaka',
                'permanent_address' => 'Ishkaton, Dhaka',
                'nid' => '12445304625165',
                'email_verified_at' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),

                'job_type' => 'permanent',
                'join_date' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),
                'salary' => 90000,
                'designation' => 'Admin',

                'email' => 'admin@gmail.com',
                'password' => '123456789',
//                'role' => 'admin',

                'ward_id' => null,
                'blood_group_id' => 1,
            ],

            [
                'id'=> 2,
                'first_name' => 'Dipta',
                'first_name_bn' => 'দিপ্ত',
                'last_name' => 'Dey',
                'last_name_bn' => 'দে',
                'father_name' => 'Bishnu Dey',
                'father_name_bn' => 'বিষ্ণু দে',
                'mother_name' => 'Shathi Dey',
                'mother_name_bn' => 'সাথি দে',
                'gender' => 'male',
                'phone_number' => '01680530403',
                'emergency_contact' => '01652361403',
                'dob' => Carbon::createFromFormat('Y-m-d', '1980-08-12'),
                'marital_status' => 'married',
                'spouse_name' => 'Setu Dey',
                'spouse_name_bn' => 'সেতু দে',
                'present_address' => 'Ishkaton, Dhaka',
                'permanent_address' => 'Ishkaton, Dhaka',
                'nid' => '12445304625165',
                'email_verified_at' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),

                'job_type' => 'permanent',
                'join_date' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),
                'salary' => 90000,
                'designation' => 'Admin',

                'email' => 'dipta@gmail.com',
                'password' => '123456789',
//                'role' => 'admin',

                'ward_id' => null,
                'blood_group_id' => 1,
            ],



            [
                'id'=> 3,
                'first_name' => 'Kashem',
                'first_name_bn' => 'কাশেম',
                'last_name' => 'Uddin',
                'last_name_bn' => 'উদ্দীন',
                'father_name' => 'Hashem Uddin',
                'father_name_bn' => 'হাশেম উদ্দীন',
                'mother_name' => 'Rahima Khatun',
                'mother_name_bn' => 'রহিমা উদ্দীন',
                'gender' => 'male',
                'phone_number' => '01685236403',
                'emergency_contact' => '01614851403',
                'dob' => Carbon::createFromFormat('Y-m-d', '1985-09-10'),
                'marital_status' => 'unmarried',
                'spouse_name' => null,
                'spouse_name_bn' => null,
                'present_address' => 'Malibag, Dhaka',
                'permanent_address' => 'Malibag, Dhaka',
                'nid' => '12258963015165',
                'email_verified_at' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),

                'job_type' => 'permanent',
                'join_date' => Carbon::createFromFormat('Y-m-d', '2018-12-01'),
                'salary' => 70000,
                'designation' => 'Commissioner',

                'email' => 'commissioner@gmail.com',
                'password' => '123456789',
//                'role' => 'commissioner',

                'ward_id' => '2',
                'blood_group_id' => '2',
            ],
            [
                'id'=> 4,
                'first_name' => 'Shuvo',
                'first_name_bn' => 'শুভ',
                'last_name' => 'Mohajon',
                'last_name_bn' => 'মহাজন',
                'father_name' => 'Pradip Mohajon',
                'father_name_bn' => 'প্রদীপ মহাজন',
                'mother_name' => 'Rumi Mohajon',
                'mother_name_bn' => 'রুমি মহাজন',
                'gender' => 'male',
                'phone_number' => '01685236403',
                'emergency_contact' => '01614851403',
                'dob' => Carbon::createFromFormat('Y-m-d', '1985-09-10'),
                'marital_status' => 'unmarried',
                'spouse_name' => null,
                'spouse_name_bn' => null,
                'present_address' => 'Malibag, Dhaka',
                'permanent_address' => 'Malibag, Dhaka',
                'nid' => '12258963015165',
                'email_verified_at' => Carbon::createFromFormat('Y-m-d', '2020-10-15'),

                'job_type' => 'permanent',
                'join_date' => Carbon::createFromFormat('Y-m-d', '2018-12-01'),
                'salary' => 70000,
                'designation' => 'Commissioner',

                'email' => 'shuvo@gmail.com',
                'password' => '123456789',
//                'role' => 'commissioner',

                'ward_id' => '1',
                'blood_group_id' => '1',
            ],

        ];
        foreach ($users as $user) {
            $this->model->create($user);
            if ($user){
                DB::table('role_assign_to_user')->insert(array(
                    array(
                        'user_id' => $user['id'],
                        'role_id' => 1,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    )
                ));
            }
        }

    }
}
