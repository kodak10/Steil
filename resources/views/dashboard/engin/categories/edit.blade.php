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

        <form action="{{route('categorie_engin.update',$categorie_engin)}}" method="POST" >
            @csrf
            @method('PUT')

           <div class="row">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="Entrez le nom de la Catégorie" name="nom" value="{{$categorie_engin->nom}}">

                </div>
           </div>
           <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-primary btn-block my-4" type="submit">Mettre à Jour</button>
                </div>
                <div class="col-lg-6">
                    <a class="btn btn-success btn-block my-4" href="{{route('categorie_engin.index')}}">Retour</a>
                </div>
            </div>

        </form>
    </div>

</div>


@endsection
