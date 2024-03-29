@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} User
@endsection

@section('main')
<section class="content container mx-auto">
    <div class="grid grid-cols-1">
        <div class="">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @includeif('partials.errors')
                <div class="card bg-white">
                    <div class="card-header">
                        <span class="text-lg">{{ __('Update') }} User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
