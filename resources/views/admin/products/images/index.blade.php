@extends('layouts.app')

@section('title', 'Imágenes de productos')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-0.3.5&s=94abdde7c5c34726196939f58e6ff8f3&auto=format&fit=crop&w=1350&q=80');"></div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Imágenes del producto "{{ $product->name }}"</h2>

                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo" required>
                        <button type="submit" class="btn btn-primary">Subir nueva imágen</button>
                        <a href="{{ url('/admin/products') }}" class="btn btn-default">Volver al listado de productos</a>
                    </form>
                    <hr>
                    <div class="row">
                        @foreach ($images as $image)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <img src="{{ $image->url }}" width="250" alt="">
                                    <form method="post" action="">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <button type="submit" class="btn btn-danger">Eliminar imágen</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        @include('includes.footer')
@endsection
