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
        $url = route('print-resume');

        $browsershot = Browsershot::url($url)
            ->addChromiumArguments([
                'font-render-hinting' => 'none',
                'force-color-profile' => 'srgb',
            ])
            ->margins(10, 17.5, 10, 17.5) // Top, Right, Bottom, Left
            ->showBackground()
            ->waitUntilNetworkIdle()
            ->base64pdf();

        $body = base64_decode($browsershot);
        $filename = config('app.name');
        $download = false;

        return response($body, 200)->header('Content-Type', 'application/pdf')->header('Content-Disposition', $download ? "attachment; filename={$filename}.pdf" : "filename={$filename}.pdf");
    }

    public function print()
    {
        return view('resume-print')->with([
            'resume' => Resume::first(),
        ]);
    }
}
