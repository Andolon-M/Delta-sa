@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Show') . " " . __('User') }}
@endsection

@section('main')
<section class="content container mx-auto">
    <div class="grid grid-cols-1">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex justify-between items-center">
                <span class="text-lg">{{ __('Show') }} User</span>
                <div class="float-right">
                    <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Back') }}</a>
                </div>
            </div>
        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="flex justify-center">
                <div class="w-full">
                    <div class="px-6 py-4 bg-white">
                        <div class="mb-4">
                            <strong class="block mb-1">Name:</strong>
                            <span>{{ $user->name }}</span>
                        </div>
                        <div>
                            <strong class="block mb-1">Email:</strong>
                            <span>{{ $user->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
