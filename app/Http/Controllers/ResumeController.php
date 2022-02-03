<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
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
        $url = route('print-resume');

        $browsershot = Browsershot::url($url)
            ->margins(10, 10, 10, 10)
            ->showBackground()
            ->waitUntilNetworkIdle()
            ->base64pdf();

        $body = base64_decode($browsershot);

        return response($body, 200)->header('Content-Type', 'application/pdf');
    }
}
