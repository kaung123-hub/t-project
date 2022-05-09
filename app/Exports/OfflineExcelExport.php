<?php

namespace App\Exports;

use App\Models\PersonInformationSecond;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OfflineExcelExport implements FromCollection, WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PersonInformationSecond::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Person Code',
            'Name mm',
            'Birth Date',
            'Gender',
            'NRC No',
            'Father Name mm',
            'Email',
            'Queue Token',
            'Appointed Date',
            'Created Date',
            'Status',
            'Station Id',
            'From Time',
            'Is Booking',
            'No Of Booking',
            'Server Time',
            'Remark',
        ];
    }
}

//export selected column

// class OfflineExcelExport implements FromCollection, WithHeadings, WithMapping{

//     public function collection(){
//            return PersonInformationSecond::all();
//     }

//     // here you select the row that you want in the file
//     public function map($row): array{
//            $fields = [
//               $row->person_code,
//               $row->name_mm,
//               $row->birth_date,
//               $row->gender,
//               $row->nrc,
//               $row->father_name_mm,
//               $row->queue_token,
//               $row->appointed_date,
//               $row->created_date,
//               $row->status,
//               $row->stationid,
//               $row->from_time,
//               $row->server_time,
//               $row->remark
//          ];
//         return $fields;
//     }

//     public function headings(): array
//     {
//         return [
//             'Person Code',
//             'Name mm',
//             'Birth Date',
//             'Gender',
//             'NRC No',
//             'Father Name mm',
//             'Queue Token',
//             'Appointed Date',
//             'Created Date',
//             'Status',
//             'Station Id',
//             'From Time',
//             'Server Time',
//             'Remark',
//         ];
//     }
// }
