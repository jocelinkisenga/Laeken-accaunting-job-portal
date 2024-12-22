@extends("admin.admin")
@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste d'offres</h6>
    </div>
  
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Télephone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($compagnies  as $key => $company)
                        
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection