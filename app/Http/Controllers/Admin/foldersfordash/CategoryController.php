<?php

namespace App\Http\Controllers\Admin\foldersfordash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin/categories/index');
    }
}
