@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-2">
                <a href="{{url('category')}}" class="btn btn-secondary">Kembali ke Kategori</a>
            </div>
            <div class="card">
                <div class="card-body">
                    @include('category.form.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection