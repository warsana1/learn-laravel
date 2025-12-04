<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private function getStudents()
    {
        return [
            ["name" => "Bobo"],
            ["name" => "Jesta"],
            ["name" => "Riyan"],
        ];
    }

    public function index()
    {
        $students = $this->getStudents();
        return view('students.index', compact('students'));
    }
}
