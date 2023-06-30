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

        <form action="{{route('temoignages.update',$testimonial->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" value="{{$testimonial->nom}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom">Fonction</label>
                        <input type="text" class="form-control" placeholder="Entrez votre nom" value="Particulier" name="fonction" value="{{$testimonial->fonction}}">

                    </div>
                </div>

           </div>

           <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="image" class="form-control" value="{{$testimonial->image}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="5" name="message" value="{{$testimonial->message}}"></textarea>

                    </div>
                </div>

            </div>




           <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-primary btn-block my-4" type="submit">Mettre à Jour</button>
                </div>
                <div class="col-lg-6">
                    <a class="btn btn-success btn-block my-4" href="{{route('temoignages.index')}}">Retour</a>
                </div>
            </div>

        </form>
    </div>

</div>


@endsection
