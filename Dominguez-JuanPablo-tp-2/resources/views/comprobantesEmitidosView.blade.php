@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome-card">
                <h1 class="mb-4">Comprobantes Emitidos</h1>

                <form action="{{route('buscarComprobante')}}" method="GET">
                    <div class="mb-3">
                        <label for="textInput" class="form-label">CUIT:</label>
                        <input type="text" class="form-control" id="textInput" name="cuitCliente">
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Desde:</label>
                        <input type="date" class="form-control" id="startDate" name="fechaInicio">
                    </div>
                    <div class="mb-3">
                        <label for="endDate" class="form-label">Hasta:</label>
                        <input type="date" class="form-control" id="endDate" name="fechaFin">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <a href="{{route('listarComprobantes')}}" class="btn btn-secondary">Todos los comprobantes</a>
                </form>

                @if ($noEncontrado)
                    <div class="alert alert-warning mt-3">No se encontraron comprobantes</div>
                @endif

                @if (isset($comprobante) && $comprobante != null)
                    @foreach ($comprobante as $comp)
                        <ul class="list-group mt-3">
                            <li class="list-group-item">
                                CUIT Cliente: {{ $comp->cuitCliente }} |
                                Tipo Comprobante: {{ $comp->tipoComprobante }} |
                                Punto Venta: {{ $comp->puntoVenta }} |
                                Número Comprobante: {{ $comp->numeroComprobante }} |
                                Importe: {{ $comp->importe }} |
                                Fecha: {{ $comp->fecha }}
                            </li>
                        </ul>
                    @endforeach
                @endif

                @foreach ($listaComprobantes as $comp)
                    <ul class="list-group mt-3">
                        <li class="list-group-item">
                            CUIT: {{$comp->cuitCliente}} |
                            Fecha: {{$comp->fecha}}
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection