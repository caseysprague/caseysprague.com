@extends('layouts.app')

@section('body')
    <body class="text-sm text-gray-600 antialiased space-y-10">
        <header class="flex flex-col items-center">
            @include('includes.logo')
        </header>
        {{-- <div class="border-b border-gray-100"></div> --}}
        <section class="flex">
            <div class="w-1/5">
                <h1 class="text-xs text-gray-400 font-medium">Contact</h1>
            </div>
            <div class="w-4/5 flex flex-col space-y-2 font-medium text-gray-500">
                <div class="flex flex-row items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <div>{{ $resume->phone }}</div>
                </div>
                <div class="flex flex-row items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                    </svg>
                    <a href="mailto:{{ $resume->email }}" class="hover:text-blue-500 no-underline">{{ $resume->email }}</a>
                </div>

                <div class="flex flex-row items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd" />
                    </svg>
                    <a href="{{ $resume->website }}" class="text-blue-500 no-underline">{{ $resume->website }}</a>
                </div>

                @empty(!$resume->address)
                <div class="flex flex-row items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <span>{{ $resume->address }}</span>
                </div>
                @endif
            </div>
        </section>
        {{-- <div class="border-b border-gray-100"></div> --}}
        <section class="flex">
            <div class="w-1/5">
                <h1 class="text-xs text-gray-400 font-medium">About Me</h1>
            </div>
            <div class="w-4/5">{!! $resume->introduction !!}</div>
        </section>
        {{-- <div class="border-b border-gray-100"></div> --}}
        <section class="flex">
            <div class="w-1/5">
                <h1 class="text-xs text-gray-400 font-medium">Experience</h1>
            </div>
            <div class="w-4/5 space-y-8"> {{-- Space Between Companies --}}
                @foreach($resume->companies->sortByDesc(fn($company) => $company->ended_on ?? now()); as $company)
                <article class="break-inside-avoid space-y-4"> {{-- Space Between Jobs --}}
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-semibold text-blue-500">{{ $company->name }}</h2>
                            <div class="text-xs text-gray-400 font-medium">{{ $company->location }}</div>
                        </div>
                        <div class="text-xs text-gray-400 font-medium">
                            {{ $company->started_on->format('M Y') }} - {{ $company->ended_on ? $company->ended_on->format('M Y') : 'Present' }}
                        </div>
                    </div>
                    @foreach($company->jobs->sortByDesc('started_on') as $job)
                    <div class="break-inside-avoid">
                        <div class="ml-4">
                            <h3 class="italic font-medium text-blue-500">
                                {{ $job->title }}
                            </h3>
                            @if($company->jobs->count() > 1)
                            <div class="text-xs text-gray-400 font-medium">
                                {{ $job->started_on->format('M Y') }} - {{ $job->ended_on ? $job->ended_on->format('M Y') : 'Present' }}
                            </div>
                            @endif
                        </div>
                        @empty(!$job->description)
                        <div class="ml-4 mt-2">{!! $job->description !!}</div>
                        @endif
                    </div>
                    @endforeach
                </article>
                @if(!$loop->last)
                    {{-- <div class="border-b border-gray-100"></div> --}}
                @endif
                @endforeach
            </div>
        </section>
        {{-- <div class="border-b border-gray-100"></div> --}}
        <section class="flex break-inside-avoid">
            <div class="w-1/5">
                <h1 class="text-xs text-gray-400 font-medium">Education</h1>
            </div>
            <div class="w-4/5 space-y-8">
                @foreach($resume->education->sortByDesc('ended_on') as $education)
                    <article class="break-inside-avoid">
                        <div class="flex justify-between">
                            <div>
                                <h2 class="font-semibold text-blue-500">{{ $education->institution_name }}</h2>
                                <div class="text-xs text-gray-400 font-medium">
                                    {{ $education->institution_location }}
                                    @if($education->gpa)
                                        <span> - {{ $education->gpa }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="text-xs text-gray-400 font-medium">
                                {{ $education->ended_on ? $education->ended_on->format('M Y') : 'Present' }}
                            </div>
                        </div>
                        <div class="mt-2">{!! $education->description !!}</div>
                    </article>
                    @if(!$loop->last)
                        {{-- <div class="border-b border-gray-100"></div> --}}
                    @endif
                @endforeach
            </div>
        </section>
        {{-- <div class="border-b border-gray-100"></div> --}}
        <section class="space-y-10 break-inside-avoid">
            <article class="flex">
                <div class="w-1/5 flex items-center">
                    <h1 class="text-xs text-gray-400 font-medium">Buzzwords</h1>
                </div>
                <div class="w-4/5">
                    @foreach($resume->skills as $skill)
                        <span class="inline-block bg-gray-200 text-gray-600 rounded-full px-3 py-1 text-sm my-2 mr-2">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </article>
            {{-- <div class="border-b border-gray-100"></div> --}}
            <article class="flex">
                <div class="w-1/5 flex items-center">
                    <span class="text-xs text-gray-400 font-medium">Certifications</span>
                </div>
                <div class="w-4/5">
                    @foreach($resume->certifications as $certification)
                        <span class="inline-block bg-gray-200 text-gray-600 rounded-full px-3 py-1 text-sm my-2 mr-2">{{ $certification->name }}</span>
                    @endforeach
                </div>
            </article>
        </section>
        @vite(['resources/js/app.js'])
    </body>
@endsection
