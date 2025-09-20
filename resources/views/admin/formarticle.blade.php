@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">

        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Ajouter un article</h6>
            </div>

            <div class="col-6"></div>


        </div>
    </div>
    <div class="container">
        <form method="post" action="{{ route("admin.store.article") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label
                    for="inputName"
                    class="col-4 col-form-label"
                    >Titre</label
                >
                <div
                    class="col-12"
                >
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="inputName"
                        placeholder="Name"
                    />
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Choisissez une image</label>
                <input
                    type="file"
                    class="form-control"
                    name="image"
                    id=""
                    placeholder=""
                    aria-describedby="fileHelpId"
                />

            </div>

            <fieldset class="mb-3 row">
                <legend
                    class="col-form-legend col-4"
                >
                    description
                </legend>
                <div
                    class="col-12"
                >
                    <div class="mb-3">

                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
                    </div>

                </div>
            </fieldset>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Ajouter
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</main>
 @endsection
