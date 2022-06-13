<?php

use App\Models\VehicleLicence;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VehicleLicencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas=[
            [
                "subCategory_id"=>'5',
                "name"=> 'jabbar',
                "address"=> '2 no gate',
                "phone_number"=> '01987845637',
                "gender"=> 'male',
                "owner_name"=> 'kalam',
                "father_name"=>'abdul kashem',
                "mother_name"=>'morjina begum',
                "issue_date"=>Carbon::createFromFormat('Y-m-d', '2020-06-01'),
                "expiry_date"=>Carbon::createFromFormat('Y-m-d', '2021-06-01'),
                "licence_number"=>"111222333444",
                "nid"=>"1234501204",

            ],
            [
                "subCategory_id"=>'5',
                "name"=> 'abdul kuddus',
                "address"=> '21 no gate',
                "phone_number"=> '01987845637',
                "gender"=> 'female',
                "owner_name"=> 'jamal',
                "father_name"=>'abdul rashid',
                "mother_name"=>'jina begum',
                "issue_date"=>Carbon::createFromFormat('Y-m-d', '2020-06-01'),
                "expiry_date"=>Carbon::createFromFormat('Y-m-d', '2021-06-01'),
                "licence_number"=>"1122334455",
                "nid"=>"1234501205",
            ],
            [
                "subCategory_id"=>'6',
                "name"=> 'rafique',
                "address"=> 'agrabad',
                "phone_number"=> '01987877737',
                "gender"=> 'male',
                "owner_name"=> 'tttttttt',
                "father_name"=>'zahid',
                "mother_name"=>'sokhina',
                "issue_date"=>Carbon::createFromFormat('Y-m-d', '2020-06-01'),
                "expiry_date"=>Carbon::createFromFormat('Y-m-d', '2021-06-01'),
                "licence_number"=>"1020304050",
                "nid"=>"1234501206",
            ],
        ];
        foreach ($datas as $data){
            VehicleLicence::create($data);
        }
    }
}
