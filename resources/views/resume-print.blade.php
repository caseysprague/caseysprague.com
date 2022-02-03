<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <title>{{ config('app.name') }} - Resume</title>

        <style type="text/css">
            @media print {
                .page-break {
                    page-break-after: always;
                }
            }
        </style>
    </head>
    <body class="px-8 text-sm text-gray-700 leading-normal antialiased">
        <div class="flex flex-col items-center border-b border-gray-100">
            @include('includes.logo')
        </div>
        <div class="flex border-b border-gray-100">
            <div class="w-1/5 py-4">Contact</div>
            <div class="w-4/5 py-4 flex flex-col">
                <span class="mb-2">{{ $resume->phone }}</span>
                <span class="mb-2">{{ $resume->email }}</span>
                <a href="{{ $resume->website }}" class="text-gray-700 hover:text-blue-500 no-underline mb-2">{{ $resume->website }}</a>
                <span>{{ $resume->address }}</span>
            </div>
        </div>
        <div class="flex border-b border-gray-100">
            <div class="w-1/5 py-4">Intro</div>
            <div class="w-4/5 py-4">{{ $resume->introduction }}</div>
        </div>
        <div class="flex">
            <div class="w-1/5 py-4 border-b border-gray-100">Experience</div>
            <div class="w-4/5">
                @foreach($resume->companies->sortByDesc('started_on') as $company)
                <div class="py-4 border-b border-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <span class="font-semibold text-blue-500">{{ $company->name }}</span>
                            <span> - {{ $company->location }}</span>
                        </div>
                        <div>
                            {{ $company->started_on->format('M Y') }} - {{ $company->ended_on ? $company->ended_on->format('M Y') : 'Present' }}
                        </div>
                    </div>
                    @foreach($company->jobs->sortByDesc('started_on') as $job)
                    <div class="ml-4 mt-4 mb-2">
                        <span class="italic font-semibold text-blue-500">
                            {{ $job->title }}
                        </span>
                        <span>
                            &nbsp;-&nbsp;{{ $job->started_on->format('M Y') }} - {{ $job->ended_on ? $job->ended_on->format('M Y') : 'Present' }}
                        </span>
                    </div>
                    <div class="ml-4 mt-2">{{ $job->description }}</div>
                    @endforeach
                </div>
                @if($loop->iteration % 2 === 0)
                    <div class="page-break"></div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="page-break"></div>
        <div class="flex">
            <div class="w-1/5 py-4 border-b border-gray-100">Education</div>
            <div class="w-4/5">
                @foreach($resume->education->sortByDesc('ended_on') as $education)
                    <div class="py-4 border-b border-gray-100">
                        <div class="flex justify-between">
                            <div>
                                <span class="font-semibold text-blue-500">{{ $education->institution_name }}</span> - {{ $education->institution_location }}
                                @if($education->gpa)<span> - {{ $education->gpa }}</span>@endif
                            </div>
                            <div>
                                {{ $education->ended_on ? $education->ended_on->format('M Y') : 'Present' }}
                            </div>
                        </div>
                        <div class="mt-2">{{ $education->description }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex border-b border-gray-100">
            <div class="w-1/5 py-6 flex items-center"><span>Skills</span></div>
            <div class="w-4/5 py-4">
                @foreach($resume->skills as $skill)
                    <span class="inline-block bg-gray-200 text-gray-600 rounded-full px-3 py-1 text-sm my-2 mr-2">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="flex border-b border-gray-100">
            <div class="w-1/5 py-6 flex items-center"><span>Certifications</span></div>
            <div class="w-4/5 py-4">
                @foreach($resume->certifications as $certification)
                    <span class="inline-block bg-gray-200 text-gray-600 rounded-full px-3 py-1 text-sm my-2 mr-2">{{ $certification->name }}</span>
                @endforeach
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
