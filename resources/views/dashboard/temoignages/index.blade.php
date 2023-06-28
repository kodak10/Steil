@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        LISTE DES ENGIN
                    </h5>
                    <button class="btn btn-secondary">
                        <a href="{{route('temoignages.create')}}" class="p-3">
                            NOUVEL ENGIN
                        </a>
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <table class="table table-striped" id="liste_pratiquant" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Categorie de l'engin</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($temoignages as $temoignage)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td></td>
                                            <td>{{ $temoignage->nom }}</td>
                                            <td>{{ $temoignage->message }}</td>
                                            <td class="text-center d-flex justify-content-center" >
                                                <button type="button" class="btn btn-primary mr-5">
                                                    <a href="{{ route('temoignages.edit', $temoignage->id) }}" class="text-white ">Modifier</a>
                                                </button>
                                                <form

                                                    method="POST"
                                                    action="{{ route('temoignages.destroy', $temoignage->id) }}"
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
            $('#liste_pratiquant').DataTable();
        });
    </script>
@endpush
