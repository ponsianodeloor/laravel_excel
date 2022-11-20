<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersHeadersExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('users', [
            'users'=>User::all()
        ]);
    }
}
