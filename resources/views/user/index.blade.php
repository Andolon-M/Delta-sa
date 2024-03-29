@extends('layouts.app')

@section('template_title')
User
@endsection

@section('main')
<div class="container mx-auto">
    <div class="grid grid-cols-1">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex justify-between items-center">
                <span id="card_title" class="text-lg">{{ __('User') }}</span>
                <div class="float-right space-x-4">
                    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Create New') }}
                    </a>
                    <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-placement="left">
                        Regresar
                    </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ $message }}</span>
        </div>
        @endif
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="flex justify-center">
                <div class="w-full">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('No') }}</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('Name') }}</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('Email') }}</th>
                                <th class="px-6 py-3 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ ++$i }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    <a href="{{ route('users.show',$user->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Show') }}</a>
                                    <a href="{{ route('users.edit',$user->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">{{ __('Edit') }}</a>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! $users->links() !!}
</div>


@endsection