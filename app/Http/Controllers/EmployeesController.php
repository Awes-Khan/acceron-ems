<?php

namespace App\Http\Controllers;

use App\Imports\EmployeesImport;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeesController extends Controller
{
    //writing function code
    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'nullable|max:819200',
        ]);
        // $file = $request->file('employee_file');
        $file = $request->file('file');
        // dd($request->file(), $file);
        // dd($request, $request->input('employee_file'), $file);
        Excel::import(new EmployeesImport, $file);

        return redirect('/import')->with('success', 'All Employees Imported Successfully!');
    }

    public function employee_search(Request $request)
    {
        // dd('in');
        $search = $request->input('search');
        $employee = DB::table('employee');
        if ($search) {
            $employee = $employee->where('employee_id', '=', $search);
        }
        if ($request->input('job_title')) {
            $employee = $employee->where('job_title', '=', $request->input('job_title'));
        }
        if ($request->input('department')) {
            $employee = $employee->where('department', '=', $request->input('department'));
        }
        if ($request->input('gender')) {
            $employee = $employee->where('gender', '=', $request->input('gender'));
        }
        if ($request->input('Country')) {
            $employee = $employee->where('Country', '=', $request->input('Country'));
        }
        if ($request->input('Country')) {
            $employee = $employee->where('Country', '=', $request->input('Country'));
        }
        if ($request->input('City')) {
            $employee = $employee->where('City', '=', $request->input('City'));
        }
        if ($request->input('from_hiring_date') && $request->input('to_hiring_date')) {
            $employee = $employee->whereBetween('hire_date', [$request->input('from_hiring_date'), $request->input('to_hiring_date')]);
        }
        $employee = $employee->orderBy('hire_date', 'desc')->get()->toArray();
        if (count($employee)) {

            return response()->json(['message' => count($employee).' Records Found', 'data' => $employee, 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Employee not found for current filter', 'data' => null, 'status' => 404]);
        }
    }
}
