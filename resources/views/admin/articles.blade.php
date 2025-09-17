@extends("admin.admin")
@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">

        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Liste des articles</h6>
            </div>

            <div class="col-6"><a href="{{ route('admin.create.article') }}" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#create""> Ajouter un article </a></div>


        </div>
    </div>

    <div class=" card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>TITRE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($articles as $key => $article)

                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        <a href="{{ route("admin.article.destroy", ["id" => $article->id]) }}" class="btn btn-sm btn-danger text-white">supprimer</a>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>






        @endsection
