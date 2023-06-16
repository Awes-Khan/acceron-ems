<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //Creating/Importing New Employee into Database
        // dd($row);

        // $data = [

        //     'employee_id' => $row[0],
        //     'full_name' => $row[1],
        //     'job_title' => $row[2],
        //     'department' => $row[3],
        //     'business_unit' => $row[4],
        //     'gender' => $row[5],
        //     'ethnicity' => $row[6],
        //     'age' => $row[7],
        //     'hire_date' => $row[8],
        //     'annual_salary' => $row[9],
        //     'bonus' => $row[10],
        //     'country' => $row[11],
        //     'city' => $row[12],
        //     'exit_date' => $row[13],
        // ];

        $row['hire_date'] = ($row['hire_date']) ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['hire_date'])->format('Y-m-d H:i:s') : null;
        $row['exit_date'] = ($row['exit_date']) ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['exit_date'])->format('Y-m-d H:i:s') : null;

        return new Employee($row);
    }
}
