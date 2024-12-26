<div>
    @if (session("message"))
    <div class="m-4">
        <span class="alert alert-success text-success">{{ session('message') }}</span>
    </div>
@endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Envoyer un message</h6>
        </div>
        <div class="card-body">
        <form action="" wire:submit.prevent="submit">
            <div class="mb-3 col-8">
                <label for="" class="form-label"></label>
                <textarea class="form-control" wire:model="msg" id="" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-success" type="submit">Confirmer la candidature</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-danger"> Anuller la candidature</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
