@extends('layouts.app')

@section('template_title')
Civil Project
@endsection

@section('main')
<div class="container mx-auto">
    <div class="grid grid-cols-1">
        <div class="col-span-12">
            <div class="bg-white shadow-md rounded-md">
                <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                    <span class="text-lg font-semibold" id="card_title">
                        {{ __('Civil Project') }}
                    </span>
                    <div class="float-right space-x-2">
                        <a href="{{ route('civil-projects.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-placement="left">
                            {{ __('Create New') }}
                        </a>
                        <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-placement="left">
                            Regresar
                        </a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
                @endif
                <div class="px-4 py-2">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">{{ __('No') }}</th>
                                    <th class="px-4 py-2 border">{{ __('Nombre') }}</th>
                                    <th class="px-4 py-2 border">{{ __('Descripcion') }}</th>
                                    <th class="px-4 py-2 border">{{ __('Metos cuadrados') }}</th>
                                    <th class="px-4 py-2 border">{{ __('Id Ciudad') }}</th>
                                    
                                    <th class="px-4 py-2 border"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($civilProjects as $civilProject)
                                <tr>
                                    <td class="px-4 py-2 border">{{ ++$i }}</td>
                                    <td class="px-4 py-2 border">{{ $civilProject->nombre }}</td>
                                    <td class="px-4 py-2 border">{{ $civilProject->descripcion }}</td>
                                    <td class="px-4 py-2 border">{{ $civilProject->mt_cuadrado }}</td>
                                    <td class="px-4 py-2 border capitalize">{{ $civilProject->ciudad }}</td>
                                    
                                    <td class="px-4 py-2 border">
                                        <form action="{{ route('civil-projects.destroy', $civilProject->id) }}" method="POST" class="flex space-x-2">
                                            <a href="{{ route('civil-projects.show', $civilProject->id) }}" class="text-blue-500 hover:text-blue-700 font-bold py-1 px-2 rounded inline-flex items-center">
                                                <i class="fa fa-fw fa-eye"></i>
                                                <span class="ml-1">{{ __('Show') }}</span>
                                            </a>
                                            <a href="{{ route('civil-projects.edit', $civilProject->id) }}" class="text-green-500 hover:text-green-700 font-bold py-1 px-2 rounded inline-flex items-center">
                                                <i class="fa fa-fw fa-edit"></i>
                                                <span class="ml-1">{{ __('Edit') }}</span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold py-1 px-2 rounded inline-flex items-center">
                                                <i class="fa fa-fw fa-trash"></i>
                                                <span class="ml-1">{{ __('Delete') }}</span>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $civilProjects->links() !!}
        </div>
    </div>
</div>



@endsection