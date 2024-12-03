@extends('layouts.base')
@extends('layouts.navbar')
@section('contenido')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Familia</th>
                        <th scope="col">Nombre Cientifico</th>
                        <th scope="col">Nombre Comun</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Caracteristicas</th>
                        <th scope="col">Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aves as $a)
                        <tr>
                            <td>{{ $a->familia }}</td>
                            <td>{{ $a->nombrecientifico }}</td>
                            <td>{{ $a->nombrecomun }}</td>
                            <td>{{ $a->categoria }}</td>
                            <td>{{ $a->caracteristicas }}</td>
                            <td class="col-lg-2"><img src="img/ave/{{ $a->imagen }}" class="img-fluid img-thumbnail"></td>
                            <td>

                                <a href="{{ url('/aves/' . $a->id . '/edit') }}" class="btn btn-sm- btn-primary">Editar</a>
                                <form style="display: inline" action="{{ route('aves.destroy', $a->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm- btn-danger" title="Eliminar Registro"
                                        onclick="return confirm('Desea borrar este registro?','{{ $a->id }}')">Eliminar</a>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    {{ $aves->links('pagination::bootstrap-5') }}
</div>
@endsection
