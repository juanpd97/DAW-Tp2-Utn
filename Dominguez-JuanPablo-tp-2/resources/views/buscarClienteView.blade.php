@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome-card">
                <h1 class="mb-4">Buscar Clientes</h1>

                <form action="{{ route('buscarClientePorCuit') }}" method="GET">
                    <div class="mb-3">
                        <label for="cuit" class="form-label">CUIT:</label>
                        <input type="text" class="form-control" id="cuit" name="unCuit">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>

                <div class="mt-4">
                    <a href="{{route('listarClientes')}}" class="btn btn-secondary">Listar todos los clientes</a>
                </div>

                @if($error)
                    <div class="alert alert-warning mt-3">Cliente no encontrado</div>
                @endif

                @if(isset($cliente) && $cliente != null)
                    <ul class="list-group mt-3">
                        <li class="list-group-item">
                            {{$cliente->cuit}}
                            <a href="{{ route('editarCliente', ['cliente' => $cliente->id]) }}" class="btn btn-primary btn-sm float-end">Editar cliente</a>
                        </li>
                    </ul>
                @else
                    @foreach ($listaClientes as $cliente)
                        <ul class="list-group mt-3">
                            <li class="list-group-item">
                                {{$cliente->cuit}}
                                <a href="{{ route('editarCliente', ['cliente' => $cliente->id]) }}" class="btn btn-primary btn-sm float-end">Editar cliente</a>
                            </li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection