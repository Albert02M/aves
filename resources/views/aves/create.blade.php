@extends('layouts.base')
@section('contenido')
    @extends('layouts.navbar')
    <main class="flex-shrink-0">
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                                class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Ingresa los datos</h1>
                    </div>
                    {{-- 
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                <strong>Por favor!</strong> {{ $error }}
                            </div>
                        </div>
                    @endforeach

                @endif --}}

                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="{{ url('aves') }}" id="contactForm" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="familia" name="familia" value="" type="text"
                                        placeholder="Ingrese la familia" value="{{ old('familia') }}"
                                        />
                                    <label for="familia">Familia</label>
                                    @error('familia')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombrecientifico" name="nombrecientifico"
                                        value="{{ old('nombrecientifico') }}" type="text" placeholder="Nombre Cientifico"
                                        data-sb-validations="required" required />
                                    <label for="nombrecientifico">Nombre Cientifico</label>
                                    @error('nombrecientifico')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombrecomun" name="nombrecomun"
                                        value="{{ old('nombrecomun') }}" type="text" placeholder="Nombre Comun"
                                        data-sb-validations="required" required />
                                    <label for="nombrecomun">Nombre Comun</label>
                                    @error('nombrecomun')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="categoria" name="categoria"
                                        value="{{ old('categoria') }}" type="text" placeholder="Categoria"
                                        pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números"/>
                                    <label for="categoria">Categoria</label>
                                    @error('categoria')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="caracteristicas" name="caracteristicas"
                                        value="{{ old('caracteristicas') }}" type="text" placeholder="caracteristicas"
                                        pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números"/>
                                    <label for="caracteristicas">Caracteristicas</label>
                                    @error('caracteristicas')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="imagen" name="imagen" value="{{ old('imagen') }}"
                                        type="file" placeholder="imagen"/>
                                    <label for="imagen">Imagen</label>
                                    @error('imagen')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="purchase--btn btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
