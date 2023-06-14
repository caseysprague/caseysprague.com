@extends('layouts.app')

@section('body')
    <body>
        <div class="flex flex-col">
            <div class="topography border-t-8 border-blue-400 min-h-screen flex items-center font-sans">
                <div class="mx-auto my-8 py-16 px-8 sm:px-12">
                    <div class="mb-6">
                        @include('includes.logo')
                    </div>
                    <h2 class="mb-6 space-y-6 sm:space-y-4 md:space-y-2">
                        <p class="font-light text-xl sm:text-2xl text-gray-400 leading-normal">Developer, entrepreneur, investor. Scrum pilot. Actual pilot.</p>
                        <p class="font-light text-base text-gray-400 leading-normal">Co-Founder, <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://reservoirwave.com">ReservoirWave</a> and <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://contractcardinal.com">Contract Cardinal</a>. Previously CTO & Technical Co-Founder, <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://www.thera-link.com">thera-LINK</a>.</p>
                    </h2>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                        @if($showBlog)
                        <a class="text-blue-400 hover:text-blue-500 no-underline" href="{{ url('/blog') }}">Blog</a>
                        @endif
                        <a class="text-blue-400 hover:text-blue-500 no-underline" href="{{ route('resume') }}">Resume</a>
                        <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://github.com/caseysprague">GitHub</a>
                        <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://twitter.com/caseysprague">Twitter</a>
                        <a class="text-blue-400 hover:text-blue-500 no-underline" href="https://www.linkedin.com/in/caseysprague">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- @vite(['resources/js/app.js']) --}}
    </body>
@endsection
