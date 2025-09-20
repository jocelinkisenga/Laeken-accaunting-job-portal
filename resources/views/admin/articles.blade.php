@extends("front.front")
@section("content")
<main class="py-5">




<main class="py-5">
    <div class="container container-max">
        <div class="row justify-content-center">
                <div class="col-8"><a href="{{ route('admin.create.article') }}" class="btn btn-primary btn-lg"> Ajouter un article </a></div>

        </div>


        <h5 class="mt-5">Gestion des articles</h5>

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

</main>
@endsection
