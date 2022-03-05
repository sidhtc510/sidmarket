<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Imports\CategoriesImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class importExportExcelController extends Controller
{

    public function importExcel()
    {
        return view('admin.importExcel');
    }

    public function importProductsExcelStore(Request $request)
    {
        if ($request->hasFile('importedFile')) {
            $importedFile = $request->file('importedFile');
            Excel::import(new ProductsImport, $importedFile);
            session()->flash('flash_message', 'Import Products good!');
            return view('admin.importExcel');
        } else {
            session()->flash('error_message', 'Attach file');
            return view('admin.importExcel');
        }
    }




    public function importCategoriesExcelStore(Request $request)
    {
        if ($request->hasFile('importedFile')) {
            $importedFile = $request->file('importedFile');
            Excel::import(new CategoriesImport, $importedFile);
            $subCategories = Excel::toCollection(new CategoriesImport, $importedFile);
            foreach ($subCategories[0] as $sc) {
                Category::where('id', $sc['id'])->update([
                    'category_id' => $sc['category_id'],
                ]);
                // dump($sc['category_id']);
            }
            // dd($subCategory);
            session()->flash('flash_message', 'Import good!');
            return view('admin.importExcel');
        } else {
            session()->flash('error_message', 'Attach file');
            return view('admin.importExcel');
        }
    }



    public function exportProductsExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
