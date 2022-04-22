<?php

namespace App\Imports;

use App\Models\Upload;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportPost implements ToModel, WithStartRow
{

    public function model(array $row)
    {
        return new Upload([
            'purchasing_authority' => $row[0],
            'tender_number' => $row[1],
            'tender_brief' => $row[2],
            'competition_type' => $row[3],
            'category' => $row[4],
            'funded_by' => $row[5],
            'country' => $row[6],
            'value' => $row[7],
            'work_detail' => $row[8],
            'expiry' => $this->transformDate($row[9]),
            'address' => $row[10],
            'email' => $row[11],
            'phone' => $row[12],
            'link' => $row[13],
        ]);
    }

    public function startRow(): int
    {
        return 2;
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
