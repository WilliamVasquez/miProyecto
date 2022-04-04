@extends('layouts.app')

@section('css')

@endsection

@section('buttons')
<!-- route('products.create') -->
<a class="btn btn-primary mr-2" href="{{ route('products.index') }}">Regresar</a>
@endsection

@section('content')
<style type="text/css">
body {
    background-color: #fff;
}
</style>
<h2 class="text-center mb-2">Crear nuevo producto</h2>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="productName" class="form-control" id="productName" placeholder="Nombre de Producto" @error('productName') is-invalid @enderror value="{{old('productName')}}">
                    @error('productName')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <select name="" id="" class="form-control">
                        <option value="William">William</option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" value="Agregar producto">
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

@endsection

@section('js')

@endsection