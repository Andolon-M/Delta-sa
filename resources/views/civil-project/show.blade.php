@extends('layouts.app')

@section('template_title')
    {{ $civilProject->name ?? "{{ __('Show') Civil Project" }}
@endsection

@section('main')
<section class="content container mx-auto">
    <div class="grid grid-cols-1">
        <div class="col-span-12">
            <div class="bg-white shadow-md rounded-md">
                <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                    <span class="text-lg font-semibold">{{ __('Show') }} Civil Project</span>
                    <a href="{{ route('civil-projects.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Back') }}</a>
                </div>
                <div class="px-4 py-3">
                    <div class="mb-4">
                        <strong class="block mb-2">{{ __('Nombre') }}:</strong>
                        <p>{{ $civilProject->nombre }}</p>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-2">{{ __('Descripcion') }}:</strong>
                        <p>{{ $civilProject->descripcion }}</p>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-2">{{ __('Metros cuadrados') }}:</strong>
                        <p>{{ $civilProject->mt_cuadrado }}</p>
                    </div>
                    <div class="mb-4">
                        <strong class="block mb-2">{{ __('Id Ciudad') }}:</strong>
                        <p>{{ $civilProject->ciudad }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
