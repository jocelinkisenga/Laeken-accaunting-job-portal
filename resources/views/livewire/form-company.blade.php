<div>
    <form class="row g-3" wire:submit.prevent="submit">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nom de la société
            @error("name")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror
          </label>
          <input type="text" wire:model="name" class="form-control" id="">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4"  class="form-label">Email
            @error("email")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror
          </label>
          <input type="email" wire:model="email" class="form-control" id="">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Téléphone
              @error("phone")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror
            </label>
            <input type="text" wire:model="phone" class="form-control" id="">
          </div>

          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Description
              @error("description")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror
            </label>
           <textarea wire:model="description" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Lettre
              @error("motivation")
            <span class="ml-4 text-danger">{{ $message }}</span>
          @enderror
            </label>
            <input type="file" wire:model="motivation" class="form-control" id="inputPassword4">
          </div>
      
  
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Envoyer la candidature</button>
        </div>
      </form>

</div>

