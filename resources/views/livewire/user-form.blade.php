<form class="row g-3 offset-md-3 col-sm-12 col-md-6" wire:submit.prevent="salvar">
    <div class="form-group row mb-3">
        <label for="nome" class="col-3 col-form-label">Nome</label> 
        <div class="col-9">   
            <input wire:model.lazy="nome" id="nome" name="nome" placeholder="Digite seu nome completo" type="text" class="form-control" required="required"> 
            @error('nome') <span class="form-text text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="email" class="col-3 col-form-label">E-mail</label> 
        <div class="col-9">   
            <input wire:model.lazy="email" id="email" name="email" placeholder="Digite seu nome completo" type="text" class="form-control" required="required"> 
            @error('email') <span class="form-text text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="telefone" class="col-3 col-form-label">Telefone</label> 
        <div class="col-9">   
            <input wire:model.lazy="telefone" id="telefone" name="telefone" placeholder="Digite seu nome completo" type="text" class="form-control" required="required"> 
            @error('telefone') <span class="form-text text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="cidade" class="col-3 col-form-label">Cidade</label> 
        <div class="col-9">   
            <select id="cidade" class="form-select" name="cidade">
                <option>Ibirubá</option>    
                <option>Colorado</option>
                <option>Espumoso</option>
                <option>Fortaleza dos Valos</option>
                <option>Quinze de Novembro</option>
                <option>Selbach</option>
                <option>Tapera</option>
                <option>Outro</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="escola" class="col-3 col-form-label">Escola</label> 
        <div class="col-9">   
            <input wire:model.lazy="escola" id="telefone" name="escola" type="text" class="form-control"> 
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="serie" class="col-3 col-form-label">Série</label> 
        <div class="col-9">   
            <select id="serie" class="form-select" name="serie">
                <option>Outro</option>    
                <option>7º ano do Ens. Fundamental</option>
                <option>8º ano do Ens. Fundamental</option>
                <option>9º ano do Ens. Fundamental</option>
                <option>1º ano do Ens. Médio</option>
                <option>2º ano do Ens. Médio</option>
                <option>3º ano do Ens. Médio</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="turno" class="col-3 col-form-label">Turno</label> 
        <div class="col-9">   
            <select id="turno" class="form-select" name="turno">
                <option>Outro</option>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
                <option>Integral</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="time" class="col-3 col-form-label">Time</label> 
        <div class="col-9">   
            <select id="time" class="form-select" name="time">
                <option>Grêmio</option>
                <option>Internacional</option>
                <option>Outro/Nenhum</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
        <button name="submit" type="submit" class="btn btn-dark">
            <div wire:loading.delay class="spinner-border" role="status"></div>    
            Cadastrar
        </button>
        </div>
    </div>
</form>