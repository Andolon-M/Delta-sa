@extends('layouts.app')

@section('template_title')
    {{ $electricalProject->name ?? __('Show') . " " . __('Electrical Project') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Electrical Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('electrical-projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $electricalProject->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $electricalProject->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Mt Cableado:</strong>
                            {{ $electricalProject->mt_cableado }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $electricalProject->ciudad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
