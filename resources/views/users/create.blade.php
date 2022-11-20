@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cargar Usuarios</div>

                    <div class="card-body">
                        @if(isset($errors) && $errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                        <form action="{{route('users.imports.excel.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="file" name="import_users">
                            <button class="btn btn-primary" type="submit">Importar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
