@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome-card">
                <h1 class="mb-4">Editar Cliente</h1>

                @if ($exito)
                    <div class="alert alert-success">Cambios guardados</div>
                @endif

                <form action="{{ route('actualizarCliente', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="cuit" class="form-label">CUIT:</label>
                        <input type="text" class="form-control" id="cuit" name="cuit" value="{{ $cliente->cuit }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="condicionIva" class="form-label">Condición IVA:</label>
                        <input type="text" class="form-control" id="condicionIva" name="condicionIva" 
                        <?php
                        $condicionIva = '';
                        switch($cliente->condicionIva) {
                            case 1:
                                $condicionIva = 'MONOTRIBUTISTA';
                                break;
                            case 2:
                                $condicionIva = 'RESPONSABLE INSCRIPTO';
                                break;
                            case 3:
                                $condicionIva = 'CONSUMIDOR FINAL';
                                break;
                            case 4:
                                $condicionIva = 'IVA EXENTO';
                                break;
                            case 5:
                                $condicionIva = 'IVA NO RESPONSABLE';
                                break;
                            case 6:
                                $condicionIva = 'IVA NO ALCANZADO';
                                break;
                            case 7:
                                $condicionIva = 'IVA NO ALCANZADO';
                                break;
                            default:
                                $condicionIva = 'No especificado';
                        }
                        ?>
                        value="{{ $condicionIva }}"
                        readonly>
                    </div>

                    <div class="mb-3">
                        <label for="alta" class="form-label">Alta:</label>
                        <input type="date" class="form-control" id="alta" name="alta" value="{{ $cliente->alta }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    <a href="{{route('listarClientes')}}" class="btn btn-secondary">Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection