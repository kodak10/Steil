@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        LISTE DES MARQUES
                    </h5>
                    <button class="btn btn-secondary">
                        <a href="{{route('marques.create')}}" class="p-3">
                            AJOUTER UNE MARQUE
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
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($marques as $marque)
                                        <?php $i++; ?>
                                        <tr>
                                            {{-- {{ $marque->image }} --}}
                                            <td>{{$i}}</td>
                                            <td ><img style="width:90px; height:90px;" src="{{ asset($marque->chemin) }}" alt=""></td>
                                            <td class="text-center d-flex justify-content-center" >
                                                <form
                                                    method="POST"
                                                    action="{{ route('marques.destroy', $marque->id) }}"
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
