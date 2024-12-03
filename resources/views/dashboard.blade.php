@extends('layouts.base')
@extends('layouts.navbar')
@section('contenido')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <div class="">
        <section>
            <div class="row">
                @foreach ($aves as $ave)
                    <div class="col-md-4 mb-5" data-aos="fade-up">
                        <div class="card" data-toggle="modal" data-target="#modal-{{ $ave->id }}">
                            <img src="img/ave/{{ $ave->imagen }}" class="img-fluid" alt="...">
                            <div class="card-body">
                                {{-- <h5 class="card-title">{{ $ave->nombrecomun }}</h5>
                                <h5 class="card-title">{{ $ave->familia }}</h5> --}}
                                <h5 class="card-title">Nombre Científico: {{ $ave->nombrecientifico }}</h5>
                                <h5>Nombre Común: {{ $ave->nombrecomun }}</h5>

                                {{-- <h5 class="card-title">Categoría: {{ $ave->categoria }}</h5> --}}
                                {{-- <h5 class="card-title">Características: {{ $ave->caracteristicas }}</h5> --}}

                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $ave->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ $ave->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel-{{ $ave->id }}"><i class="fas fa-feather-alt"></i> {{ $ave->nombrecomun }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body text-center">
                                    <img src="img/ave/{{ $ave->imagen }}" class="modal-img" alt="...">
                                    <br>

                                    <h5 class="font-weight-bold">Familia: <span class="font-weight-normal">{{ $ave->familia }}</span></h5>
                                    <h5 class="font-weight-bold">Nombre Científico: <span class="font-weight-normal">{{ $ave->nombrecientifico }}</span></h5>
                                    <h5 class="font-weight-bold">Nombre Común: <span class="font-weight-normal">{{ $ave->nombrecomun }}</span></h5>
                                    <h5 class="font-weight-bold">Categoría: <span class="font-weight-normal">{{ $ave->categoria }}</span></h5>
                                    <p class="font-weight-bold">Características: <span class="font-weight-normal">{{ $ave->caracteristicas }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
