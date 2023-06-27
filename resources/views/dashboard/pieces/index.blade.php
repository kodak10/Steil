@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        LISTE DES MEMBRES
                    </h5>
                    <button class="btn btn-secondary">
                        <a href="/pratiquants/create" class="p-3">
                            NOUVEAU PRATIQUANT
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
                                        <th>Numéro de passeport</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Date de naissance</th>
                                        <th>Contact</th>
                                        <th>Grade Actuel</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($pratiquants as $pratiquant)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{ $pratiquant->num_passeport }}</td>
                                            <td>{{ $pratiquant->nom }} {{ $pratiquant->prenoms }}</td>
                                            <td>{{ $pratiquant->dat_nais }}</td>
                                            <td>{{ $pratiquant->contact }}</td>
                                            <td>{{ $pratiquant->grade }}</td>
                                            <td class="text-center d-flex justify-content-between" > <a href=""><i class="fa-solid fa-pen-to-square"></i></a> <a href="" class="bg-danger"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            {{-- <table id="liste_pratiquant" class="display expandable-table dataTable no-footer" style="width: 100%;" role="grid">
                                  <thead>
                                      <tr role="row">
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Cocher</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">N° de passeport</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date d'adhesion</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Nom & Prenoms</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date de naissance</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Profession</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro de téléphone</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Personne à contacter en cas d'urgence</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro à contacter en cas d'urgence</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Grade Actuel</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Modifier</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Supprimer</th>

                                        </tr>
                                  </thead>
                                  <tbody>

                                    @php $num=1 @endphp
                                    @foreach ($pratiquants as $pratiquant)
                                        <tr>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                            <td>{{$pratiquant->num_passeport}}</td>
                                            <td>{{$pratiquant->created_at}}</td>
                                            <td>{{$pratiquant->nom}} {{$pratiquant->prenoms}}</td>
                                            <td>{{$pratiquant->date_nais}}</td>
                                            <td>{{$pratiquant->profession}}</td>
                                            <td>{{$pratiquant->contact_pratiquant}}</td>
                                            <td>{{$pratiquant->nom_parent}}</td>
                                            <td>{{$pratiquant->contact_parent1}}</td>
                                            <td>{{$pratiquant->grade}}</td>


                                            <td><a class="btn btn-primary" href="{{ route('pratiquant.edit',$pratiquant->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a></td>

                                            <td>
                                                <form

                                                    method="POST"
                                                    action="{{ route('pratiquant.destroy', $pratiquant->id) }}"
                                                    onsubmit="return confirm('Etes vous sur de vouloir supprimer ? Cette action est irreversible.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn " type="submit"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach



                                  </tbody>
                                </table> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- Page end  -->
</div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#liste_pratiquant').DataTable();
        });
    </script>
@endpush
