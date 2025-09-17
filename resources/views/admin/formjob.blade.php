@extends("admin.admin")
@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">

        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">AJOUT D'UNE OFFRE</h6>
            </div>

            <div class="col-6"></div>


        </div>
    </div>
    <div class=" container">
                    <form method="post" action="{{ route('store.job') }}">
                        @csrf
                        <div class="m-3 row">
                            <div class="col-12">
                                <label for="inputName" class="col-form-label">Titre</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="title" id="inputName" placeholder="Titre" />
                                </div>

                            </div>
                            <div class="col-12">

                                <label for="inputName" class=" col-form-label">Date de fin</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" name="due_date" id="inputName" placeholder="Name" />

                                </div>

                            </div>
                        </div>


                        <fieldset class="mb-3 row">
                            <legend class="col-form-legend col-12">
                                description
                            </legend>
                            <div class="col-12 col-sm-12 col-md-12">

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
        @endsection
