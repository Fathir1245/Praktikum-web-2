<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): string
    {
        return 'Students data...';
    }

    public function show(string $id): string
    {
        return 'Student ID: ' . $id;
    }

    public function create(): string
    {
        return 'Create student data';
    }
}
