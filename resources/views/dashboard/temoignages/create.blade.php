@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="row">
                        <h5 class="p-3">
                            CREATION DE NOUVEAU TEMOIGNAGE
                        </h5>

                    </div>

                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <div class="row">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <div class="row">
                                            @foreach ($errors->all() as $error)
                                                <div class="col-lg-4">
                                                    <li>{{ $error }}</li>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <form id="" method="post" action="" enctype="multipart/form-data">
                                    @csrf


                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" value="{{ old('nom') }}">

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Fonction</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre nom" name="fonction" value="{{ old('fonction') }}">

                                            </div>
                                        </div>

                                   </div>

                                   <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="prenoms">Images</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="prenoms">Temoignages</label>
                                                <textarea class="form-control" rows="5" name="message"></textarea>

                                            </div>
                                        </div>
                                   </div>



                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Ajouter</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('temoignages.index')}}">Retour</a>
                                        </div>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
