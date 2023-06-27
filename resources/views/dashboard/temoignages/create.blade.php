@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        CREATION DE NOUVEAU MEMBRE
                    </h5>

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

                                <form id="" method="post" action="{{route('pratiquants.store')}}">
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
                                                    <label for="prenoms">Prénoms</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenoms" value="{{ old('prenoms') }}">

                                                </div>
                                            </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="dat_nais">Date de naissance</label>
                                                <input type="date" class="form-control" placeholder="" name="dat_nais" value="{{ old('dat_nais') }}">

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lieu">Lieu</label>
                                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu" value="{{ old('lieu') }}">

                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" class="form-control" placeholder="Ex : +225 0707572125" name="contact" value="{{ old('contact') }}">

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="profession">Profession</label>
                                                <input type="text" class="form-control" placeholder="Profession" name="profession" value="{{ old('profession') }}">

                                            </div>
                                        </div>
                                   </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="num_passeport">Numéro de passeport</label>
                                                <input type="text" class="form-control" placeholder="Numéro de passeport" name="num_passeport" value="{{ old('num_passeport') }}">

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="grade">Grade Actuel</label>
                                                <select class="form-select" aria-label="" name="grade" value="{{ old('num_passeport') }}">
                                                    <option selected>Selectionner le grade</option>
                                                    <option value="Blanche">Blanche</option>
                                                    <option value="1ème Jaune">1ère Jaune</option>
                                                    <option value="2ème Jaune">2ème Jaune</option>
                                                    <option value="1ème Verte">1ère Verte</option>
                                                    <option value="2ème Verte">2ème Verte</option>
                                                    <option value="1ème Bleu">1ère Bleu</option>
                                                    <option value="2ème Bleu">2ème Bleu</option>
                                                    <option value="1ème Rouge">1ère Rouge</option>
                                                    <option value="2ème Rouge">2ème Rouge</option>
                                                    <option value="1ère Dan">1ère Dan</option>
                                                    <option value="2ère Dan">2ère Dan</option>
                                                    <option value="3ère Dan">3ère Dan</option>
                                                    <option value="4ère Dan">4ère Dan</option>
                                                    <option value="5ère Dan">5ère Dan</option>
                                                    <option value="6ère Dan">6ère Dan</option>
                                                    <option value="7ère Dan">7ère Dan</option>

                                                </select>

                                            </div>
                                        </div>


                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact_urgence">Contact en cas d'urgence</label>
                                                <input type="text" class="form-control" placeholder="Contact en cas d'urgence" name="contact_urgence" value="{{ old('contact_urgence') }}">

                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="photo">

                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Inscrire</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('pratiquants.index')}}">Retour</a>
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
