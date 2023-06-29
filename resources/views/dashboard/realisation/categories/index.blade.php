@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">

                    <div class="col-lg-6">
                        <h5 class="p-3">
                            LISTE DES CATEGORIES DE REALISATION
                        </h5>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{route('categorie_realisation.create')}}" class="btn btn-primary w-100">Ajouter une Catégorie</a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <table class="table table-striped" id="liste_categorie_engin" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($categories_realisations as $categories_realisation)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{ $categories_realisation->nom }}</td>
                                            <td class="text-center d-flex justify-content-center" >
                                                <button type="button" class="btn btn-primary mr-5">
                                                    <a href="{{ route('categorie_realisation.edit', $categories_realisation->id) }}" class="text-white ">Modifier</a>
                                                </button>
                                                <form

                                                    method="POST"
                                                    action="{{ route('categorie_realisation.destroy', $categories_realisation->id) }}"
                                                    onsubmit="return confirm('Etes vous sur de vouloir supprimer ? Cette action est irreversible.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>

                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#liste_categorie_engin').DataTable();
        });
    </script>
@endpush
