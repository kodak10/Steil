@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="row d-flex">
                        <h5 class="p-3">
                            CREATION DE PIECES
                        </h5>
                        <button class="btn btn-secondary">
                            <a href="" class="p-3">
                                IMPORTER
                            </a>
                        </button>

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

                                <form id="" method="post" action="{{route('pieces.store')}}"  enctype="multipart/form-data">
                                    @csrf


                                   <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="nom">Categorie</label>
                                                <select name="categorie_pieces" id="" class="form-control">
                                                    <option value="moteur">Moteur</option>
                                                    <option value="pieces_detachees">Pièces Détachées</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="nom">Référence</label>
                                                <input type="text" class="form-control" placeholder="Entrez la référence" name="reference" value="{{ old('reference') }}">

                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" class="form-control" placeholder="Entrez le nom" name="nom" value="{{ old('nom') }}">

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
                                        

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="5" name="description"></textarea>

                                            </div>
                                        </div>
                                    </div>



                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Ajouter</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('pieces.index')}}">Retour</a>
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
