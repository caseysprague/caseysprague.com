<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show()
    {
        return view('resume')->with([
            Resume::first()
        ]);
    }

    public function print()
    {
        return view('resume-print')->with([
            'resume' => Resume::first(),
        ]);
    }
}
