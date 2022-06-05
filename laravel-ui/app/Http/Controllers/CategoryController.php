<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
    public function index(CategoryDataTable $categoryDataTable)
    {
        return $categoryDataTable->render('dashboard.category.index');
    }
}
