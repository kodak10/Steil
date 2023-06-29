@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="row">
                        <h5 class="p-3">
                            CREATION DE REALISATION
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

                                <form id="" method="post" action="{{route('realisations.store')}}"  enctype="multipart/form-data">
                                    @csrf


                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Categorie</label>
                                                <select name="id_categories_realisations" id="" class="form-control">
                                                    @foreach ( $categorie_realisations as $categorie_realisation )
                                                        <option value="{{$categorie_realisation->id}}">{{$categorie_realisation->nom}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Titre</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre nom" name="titre" value="{{ old('nom') }}">

                                            </div>
                                        </div>

                                   </div>

                                   <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="form-control" rows="5" name="description"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Images</label>
                                            <input type="file" name="images[]" multiple class="form-control">
                                        </div>
                                    </div>

                               </div>



                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Ajouter</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('realisations.index')}}">Retour</a>
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
