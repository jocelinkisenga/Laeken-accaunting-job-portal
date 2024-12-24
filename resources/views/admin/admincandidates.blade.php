@extends("admin.admin")
@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des candidatures</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Télephone</th>
                        <th>Domaine</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->email }}</td>
                        <td>{{ $candidate->phone }}</td>
                        <td>{{ $candidate->domaine }}</td>
                        <td>
                            <a href="{{ route("cv",["id" => $candidate->id]) }}" class="m-1">CV
                                <span class="fa fa-eye text-success"></span>
                            </a>
                            <a href="{{ route("lm",['id' => $candidate->id]) }}" class="m-1">LM
                                <span class="fa fa-eye text-warning"></span>
                            </a>
                            <a href="{{ route('confirm',['id'=> $candidate->id]) }}" class="btn read-more btn-primary">confirmer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection