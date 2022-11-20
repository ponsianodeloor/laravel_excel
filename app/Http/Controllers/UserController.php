<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersHeadersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class UserController extends Controller
{
    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportHeader(){
        return Excel::download(new UsersHeadersExport, 'users.xlsx');
    }

    public function createExcel(){
        return view('users.create');
    }

    public function storeExcel(Request $request){
        $file_import_users = $request->file('import_users');
        Excel::import(new UsersImport(), $file_import_users);

        return redirect()->route('users.excel.index')->with('success', 'Productos importados exitosamente');
    }

    public function index(){
        $users = User::all();
        return view('users.index', compact(['users']));
    }
}
