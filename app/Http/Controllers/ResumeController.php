<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function download()
    {
        return Storage::disk('public')->download('Casey Sprague - Resume.pdf');
    }
}
