@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="row">
                        <h5 class="p-3">
                            CREATION DE NOUVEAU ENGIN
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

                                <form id="" method="post" action="{{route('engin.store')}}" enctype="multipart/form-data">
                                    @csrf


                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Categorie</label>
                                                <select name="id_categories_engin" id="" class="form-control">
                                                    @foreach ( $categorie_engins as $categorie_engins )
                                                        <option value="{{$categorie_engins->id}}">{{$categorie_engins->nom}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" value="{{ old('nom') }}">

                                            </div>
                                        </div>

                                   </div>

                                   <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Image Couverture</label>
                                                <input type="file" name="couverture" multiple class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="prenoms">Images</label>
                                                <input type="file" name="images[]" multiple class="form-control">
                                            </div>
                                        </div>

                                   </div>

                                   <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="prenoms">Description</label>
                                            <textarea class="form-control" rows="5" name="description"></textarea>

                                        </div>
                                    </div>
                                   </div>



                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Ajouter</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('engin.index')}}">Retour</a>
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
