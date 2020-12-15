<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('dashboard');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new ProductExport(), 'aselsis.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new ProductImport(),request()->file('file'));
        session()->flash('success','Başarıyla Yüklendi');
        return back();
    }
}
