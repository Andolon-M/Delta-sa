@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Civil Project
@endsection

@section('main')
<section class="content container mx-auto">
    <div class="grid grid-cols-1">
        <div class="col-span-12">

            @includeif('partials.errors')

            <div class="bg-white shadow-md rounded-md">
                <div class="bg-gray-200 px-4 py-3">
                    <span class="text-lg font-semibold">{{ __('Create') }} Civil Project</span>
                </div>
                <div class="px-4 py-3">
                    <form method="POST" action="{{ route('civil-projects.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('civil-project.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection