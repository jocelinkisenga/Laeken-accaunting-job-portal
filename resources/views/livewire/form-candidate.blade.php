<div>
    <form class="row g-3" wire:submit.prevent="submit">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nom et Post-Nom @error("name")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror</label>
          <input type="text" wire:model="name" class="form-control" id="">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4"  class="form-label">Email @error("email")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror</label>
          <input type="email" wire:model="email" class="form-control" id="">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Téléphone @error("phone")
              <span class="ml-4 text-danger">{{ $message }}</span>
            @enderror</label>
            <input type="text" wire:model="phone" class="form-control" id="">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Domaine de travail @error("domaine")
              <span class="ml-4 text-danger">{{ $message }}</span>
            @enderror</label>
            <input type="text" wire:model="domaine" class="form-control" id="">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">CV @error("cv")
              <span class="ml-4 text-danger">{{ $message }}</span>
            @enderror</label>
            <input type="file" wire:model="cv" class="form-control" id="">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Lettre de motivation @error("motivation")
              <span class="ml-4 text-danger">{{ $message }}</span>
            @enderror</label>
            <input type="file" wire:model="motivation" class="form-control" id="inputPassword4">
          </div>
      
  
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Envoyer la candidature</button>
        </div>
      </form>

</div>
