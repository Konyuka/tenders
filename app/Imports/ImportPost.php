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
            'purchasing_Authority' => $row[0],
            'tender_number' => $row[1],
            'tender_brief' => $row[2],
            'competition_type' => $row[3],
            'funded_by' => $row[4],
            'country' => $row[5],
            'value' => $row[6],
            'work_detail' => $row[7],
            'expiry' => $row[8],
            'address' => $row[9],
            // 'email' => $row[11],
            // 'link' => $row[12],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
