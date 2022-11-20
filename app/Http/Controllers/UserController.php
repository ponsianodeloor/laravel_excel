<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersHeadersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportHeader(){
        return Excel::download(new UsersHeadersExport, 'users.xlsx');
    }
}
