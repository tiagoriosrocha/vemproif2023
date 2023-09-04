<form wire:submit.prevent="save">
    @if($photo)
        <img src="{{ $photo->temporaryUrl() }}" alt="" width="200" height="200" class="rounded-circle">
        <br>
    @endif
    <br>
    <input type="file" class="form-control" wire:model="photo">
    @error('photo') <span class="error">{{ $message }}</span> @enderror
    <br>
    <button type="submit" class="btn btn-lg btn-primary"> 
        <div wire:loading class="spinner-border" role="status"></div>    
        Salvar Foto
    </button>
</form>