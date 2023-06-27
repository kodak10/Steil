@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        CREATION DE NOUVEAU PRATIQUANT
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
                                <form id="" method="post" action="">
                                    @csrf
                                   <div class="row">
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label for="nom">Nom</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" required>
                                                    @error('nom')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prenoms">Prénoms</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenoms" required>
                                                    @error('prenoms')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="dat_nais">Date de naissance</label>
                                                <input type="date" class="form-control" placeholder="" name="dat_nais">
                                                @error('dat_nais')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lieu">Lieu</label>
                                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu">
                                                @error('lieu')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" class="form-control" placeholder="Ex : +225 0707572125" name="contact">
                                                @error('contact')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="profession">Profession</label>
                                                <input type="text" class="form-control" placeholder="Profession" name="profession">
                                                @error('profession')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>




                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="num_passeport">Numéro de passeport</label>
                                                <input type="text" class="form-control" placeholder="Numéro de passeport" name="num_passeport" required>
                                                @error('num_passeport')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="grade">Grade Actuel</label>
                                                <select class="form-select" aria-label="" required>
                                                    <option selected>Selectionner le grade</option>
                                                    <option value="1">Blanche</option>
                                                    <option value="1">1ère Jaune</option>
                                                    <option value="2">2ème Jaune</option>
                                                    <option value="1">1ère Verte</option>
                                                    <option value="2">2ème Verte</option>
                                                    <option value="1">1ère Bleu</option>
                                                    <option value="2">2ème Bleu</option>
                                                    <option value="1">1ère Rouge</option>
                                                    <option value="2">2ème Rouge</option>
                                                    <option value="1">1ère Dan</option>
                                                    <option value="1">2ère Dan</option>
                                                    <option value="1">3ère Dan</option>
                                                    <option value="1">4ère Dan</option>
                                                    <option value="1">5ère Dan</option>
                                                    <option value="1">6ère Dan</option>
                                                    <option value="1">7ère Dan</option>

                                                </select>
                                                    @error('grade')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact_urgence">Contact en cas d'urgence</label>
                                                <input type="text" class="form-control" placeholder="Contact en cas d'urgence" name="contact_urgence">
                                                @error('contact_urgence')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="photo">
                                                @error('photo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Inscrire</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-success btn-block my-4">Retour</button>
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
