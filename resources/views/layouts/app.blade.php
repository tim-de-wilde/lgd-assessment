@extends('layouts.base')

@section('body')
    <div class="min-h-full">
        @include('partials.header')

        <div>
            <main>
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    @yield('main')
                </div>
            </main>
        </div>
    </div>
@endsection
