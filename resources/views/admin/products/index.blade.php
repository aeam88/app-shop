@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-0.3.5&s=94abdde7c5c34726196939f58e6ff8f3&auto=format&fit=crop&w=1350&q=80');"></div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Listado de productos</h2>
                    <a href="{{ url('/admin/products/create') }}" class="btn btn-primary">Nuevo producto</a>
                    <div class="team">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="col-md-5 text-center">Descripción</th>
                                        <th class="text-center">Categoria</th>
                                        <th class="text-right">Precio</th>
                                        <th class="text-right">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center">{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->category ? $product->category->name : 'General' }}</td>
                                        <td class="text-right">{{ $product->price }}</td>
                                        <td class="td-actions text-right">
                                            <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                                                @csrf
                                                @method("DELETE")
                                                 <a href="#" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Imágenes del producto" class="btn btn-warning btn-simple btn-xs">
                                                    <i class="fa fa-image"></i>
                                                </a>
                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $products->links() }}
                        </div>
                    </div>

                </div>
            </div>

        </div>

        @include('includes.footer')
@endsection
