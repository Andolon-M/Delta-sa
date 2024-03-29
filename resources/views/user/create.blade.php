@extends('layouts.app')

@section('template_title')
{{ __('Create') }} User
@endsection

@section('main')
<section class="content container mx-auto">
    <div class="grid grid-cols-1">
        <div class="">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @includeif('partials.errors')
                <div class="card bg-white">
                    <div class="card-header">
                        <span class="text-lg">{{ __('Create') }} User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection