<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersonInformation;
use App\Models\PersonInformationSecond;
use App\Exports\OfflineExcelExport;
use App\Imports\OfflineExcelImport;
use Maatwebsite\Excel\Facades\Excel;

class PersonInformationSecondController extends Controller
{
    public function index(){
        $result = PersonInformationSecond::all();
        return view('offline-person-information',compact('result'));
    }
    function difflist(){
        $query = DB::table('offline_data.person_information_seconds as dt1')->join('online_data.person_information as dt2', 'dt1.nrc', '=', 'dt2.nrc','left outer')->select('dt1.*')->whereNull('dt2.ID');        
        $output = DB::table('online_data.person_information as dt1')->join('offline_data.person_information_seconds as dt2', 'dt1.nrc', '=', 'dt2.nrc','left outer')->select('dt1.*')->whereNull('dt2.ID')->unionAll($query)->get();
        return view('difflist',compact('output'));
        // return PersonInformation::all();
        // return DB::connection('mysql2')->table('person_information')->get();
    }
    public function export() 
    {
        return Excel::download(new OfflineExcelExport, 'offline-users.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new OfflineExcelImport,request()->file('file'));
             
        return back();
    }
}

