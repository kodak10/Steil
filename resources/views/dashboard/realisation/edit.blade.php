@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

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

        <form action="{{route('realisations.update',$realisations->id)}}" method="POST" >
            @csrf
            @method('PUT')

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
                        <input type="text" class="form-control" placeholder="Entrez le Titre" name="titre" value="{{$realisations->titre}}">

                    </div>
                </div>

           </div>

           <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="prenoms">Description</label>
                        <textarea class="form-control" rows="5" name="description" value="{{$realisations->description}}"></textarea>

                    </div>
                </div>
           </div>



           <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-primary btn-block my-4" type="submit">Mettre à Jour</button>
                </div>
                <div class="col-lg-6">
                    <a class="btn btn-success btn-block my-4" href="{{route('realisations.index')}}">Retour</a>
                </div>
            </div>

        </form>
    </div>

</div>


@endsection
