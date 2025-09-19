<div>
    @if (session()->has("message"))
    <div class="alert alert-success text-success">
        {{ session('message') }}
    </div>
    @endif


    <form wire:submit.prevent="submit">

        <div class="mb-3"><label class="form-label">Message
                @error("cv")
                <span class="ml-4 text-danger">{{ $message }}</span>
                @enderror</label>

            </label><textarea wire:model="description" class="form-control"></textarea></div>
        <div class="mb-3"><label class="form-label">CV (PDF)</label><input wire:model="cv" type="file" class="form-control"></div>
        <div wire:loading wire:target="motivation">En cours d'envoi</div>

        <button type="submit" class="btn btn-primary">Envoyer candidature</button>

    </form>

</div>
