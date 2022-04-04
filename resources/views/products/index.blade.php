@extends('layouts.app')

@section('css')

@endsection

@section('buttons')
<!-- route('products.create') -->
<a class="btn btn-primary mr-2" href="{{ '/products/create' }}">Create</a>
@endsection

@section('content')
<style type="text/css">
body {
    background-color: #fff;
}
</style>
<h1>Products</h1>
<h2 class="text-center mb-2">Administración de productos</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col" class="text-center">Codigo</th>
                <th scole="col" class="text-center">Nombre</th>
                <th scole="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<br>


@endsection

@section('js')

@endsection