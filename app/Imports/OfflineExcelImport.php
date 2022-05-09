<?php

namespace App\Imports;

use App\Models\PersonInformationSecond;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OfflineExcelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new PersonInformationSecond([
            'person_code'     => $row['person_code'],
            'name_mm'     => $row['name_mm'],
            'birth_date'     => $this->transformDate($row['birth_date']),
            'gender'     => $row['gender'],
            'nrc'     => $row['nrc_no'],
            'father_name_mm'     => $row['father_name_mm'],
            'queue_token'     => $row['queue_token'],
            'appointed_date'     =>  $this->transformDate($row['appointed_date']),
            'created_date'     =>  $this->transformDate($row['created_date']),
            'status'     => $row['status'],
            'stationid'     => $row['station_id'],
            'from_time'     => $this->transformDate($row['from_time']),
            'server_time'     => $this->transformDate($row['arrivaltime']),
            'remark'     => $row['remark'],

        ]);
    }

    
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
}
