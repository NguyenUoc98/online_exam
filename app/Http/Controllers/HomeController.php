<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $semesters = Semester::with('exams')->get();
        return view('admin.layout.trangchu',compact('semesters'));
    }
}
