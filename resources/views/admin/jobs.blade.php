@extends("admin.admin")
@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">

        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Liste des offres</h6>
            </div>

            <div class="col-6"><a href="{{ route('admin.create.job') }}" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#create""> Ajouter une offre </a></div>


        </div>
    </div>

    <div class=" card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>TITRE</th>
                                    <th>DATE FIN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($boulots as $key => $boulot)

                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $boulot->title }}</td>
                                    <td>{{ $boulot->due_date }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>






        @endsection

