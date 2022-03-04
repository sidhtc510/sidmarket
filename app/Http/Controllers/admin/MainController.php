<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Imports\CategoriesImport;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;


class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    public function importExcel()
    {
        return view('admin.importExcel');
    }

    public function importProductsExcelStore(Request $request)
    {
        $importedFile = $request->file('importedFile');
        Excel::import(new ProductsImport, $importedFile);

        return view('admin.importExcel')->with('flash_message', 'Import good!');
    }

    public function importCategoriesExcelStore(Request $request)
    {
        $importedFile = $request->file('importedFile');
        Excel::import(new CategoriesImport, $importedFile);
        $subCategories = Excel::toCollection(new CategoriesImport, $importedFile);
        foreach ($subCategories[0] as $sc){
            Category::where('id', $sc['id'])->update([
                'category_id' => $sc['category_id'],
            ]);
            // dump($sc['category_id']);
        }
        // dd($subCategory);

        return view('admin.importExcel')->with('flash_message', 'Import good!');
    }

    public function exportProductsExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }



    // importCategoryExcelStore

}
