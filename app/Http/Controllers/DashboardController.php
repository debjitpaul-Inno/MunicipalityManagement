<?php

namespace App\Http\Controllers;

use App\Models\EducationInstitution;
use App\Models\Equipment;
use App\Models\EquipmentRent;
use App\Models\Hospital;
use App\Models\Invoice;
use App\Models\Market;
use App\Models\People;
use App\Models\PublicToilet;
use App\Models\Ward;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $wards= Ward::all()->count();
        $peoples =People::where('is_alive', true)->count();
        $markets = Market::where('status', 1)->get()->count();
        $educationInstitutes = EducationInstitution::where('status', 1)->get()->count();
        $hospitals = Hospital::where('status',1)->get()->count();
        $publicToilets = PublicToilet::where('status',1)->get()->count();
        $equipments = Equipment::where('status',1)->get()->count();
        $rentedEquipments = EquipmentRent::where('status',1)->get()->count();
        $today = Carbon::now()->toDateString();
        $week = Carbon::now()->subDays(6)->toDateString();
        $month = Carbon::now()->subDays(\Carbon\Carbon::now()->subDays(1)->day)->toDateString();
        $year = Carbon::now()->subMonth(\Carbon\Carbon::now()->subMonth(1)->month)->toDateString();
        $earningFromLicenses = Invoice::whereDate('date', $today)->sum('amount');
        $weeklyEarningFromLicenses = Invoice::whereBetween('date', [$week, $today])->sum('amount');
        $monthlyEarningFromLicenses = Invoice::whereBetween('date', [$month, $today])->sum('amount');
        $yearlyEarningFromLicenses = Invoice::whereBetween('date', [$year, $today])->sum('amount');
        $employees= User::all()->count();
        return view('dashboard.index', compact('wards', 'peoples', 'markets',
            'educationInstitutes','hospitals','publicToilets',
            'equipments', 'rentedEquipments', 'earningFromLicenses', 'weeklyEarningFromLicenses', 'monthlyEarningFromLicenses', 'yearlyEarningFromLicenses', 'employees'));
    }
    public function table(){
        return view('dashboard.table');
    }
    public function form(){
        return view('dashboard.form');
    }
}
