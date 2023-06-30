@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        LISTE DES PIECES
                    </h5>
                    <button class="btn btn-secondary">
                        <a href="{{route('pieces.create')}}" class="p-3">
                            NOUVELLE PIECES
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
                                        <th>Categorie de la pièce</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Image de couverture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($pieces as $piece)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>

                                            </td>
                                            <td>{{ $piece->nom }}</td>
                                            <td>{{ $piece->description }}</td>
                                            <td><img src="{{ $piece->couverture }}" alt="" style="height: 90px;height:90px"></td>
                                            <td class="text-center d-flex justify-content-center" >
                                                <button type="button" class="btn btn-primary mr-5">
                                                    <a href="{{ route('pieces.edit', $piece->id) }}" class="text-white ">Modifier</a>
                                                </button>
                                                <form

                                                    method="POST"
                                                    action="{{ route('pieces.destroy', $piece->id) }}"
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
