<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name*')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone*')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Escola -->
        <div class="mt-4">
            <x-input-label for="escola" :value="__('Escola')" />
            <x-text-input id="escola" class="block mt-1 w-full" type="text" name="escola" :value="old('escola')" autocomplete="escola" />
            <x-input-error :messages="$errors->get('escola')" class="mt-2" />
        </div>

        <!-- Ano-Série -->
        <div class="mt-4">
            <x-input-label for="anoserie" :value="__('Série')" />
            <select id="anoserie" class="block mt-1 w-full border-gray-300" name="anoserie" autocomplete="série">
                <option>Outro</option>    
                <option>7º ano do Ens. Fundamental</option>
                <option>8º ano do Ens. Fundamental</option>
                <option>9º ano do Ens. Fundamental</option>
                <option>1º ano do Ens. Médio</option>
                <option>2º ano do Ens. Médio</option>
                <option>3º ano do Ens. Médio</option>
            </select>
            <x-input-error :messages="$errors->get('anoserie')" class="mt-2" />
        </div>

        <!-- Turno -->
        <div  class="mt-4">
            <x-input-label for="turno" :value="__('Turno')" />
            <select id="turno" class="block mt-1 w-full border-gray-300" name="turno" autocomplete="turno">
                <option>Outro</option>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
                <option>Integral</option>
            </select>
            <x-input-error :messages="$errors->get('turno')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Confirmar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
