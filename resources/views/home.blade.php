@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32"> 
            1
            @include('_sidebar-links')
        </div>
        
        <div class="lg:flex-1 lg:mx-10" style="max-width: 720px">

            <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">

                @include('_publish-tweet-panel')

            </div>

            <div class="border border-gray-300 rounded-lg">
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
            </div>
        </div>

        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">

            @include('_friends-list')

        </div>
    </div>
@endsection
