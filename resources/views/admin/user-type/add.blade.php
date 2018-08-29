@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nouveau type d'utilisateur</div>
                    <div class="card-body">
                        <form method="post" action="/userType" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Designation</label>
                                <div class="col-md-6">
                                    <input id="designation" type="text" class="form-control" name="designation" value="" required>
                                </div>
                                @if ($errors->has('designation'))
                                        <h5>{{ $errors->first('designation') }}</h5>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control" name="description"></textarea>
                                </div>
                                @if ($errors->has('description'))
                                        <strong>{{ $errors->first('description') }}</strong>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Icon</label>
                                <div class="col-md-6">
                                    <input  id="icon" type="file" class="form-control" name="icon" value="" required >
                                </div>
                                @if ($errors->has('icon'))
                                        <strong>{{ $errors->first('icon') }}</strong>
                                @endif
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
