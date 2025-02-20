<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function exportToExcel()
    {

       return Excel::download(new EmployeesExport, 'employees.xlsx');

    }

}
