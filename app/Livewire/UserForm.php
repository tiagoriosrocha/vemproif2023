<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserForm extends Component
{
    public $nome;
    public $email;
    public $telefone;
    public $cidade;
    public $escola;
    public $serie;
    public $turno;

    protected $rules = [
        'nome' => 'required|min:6',
        'email' => 'required|email',
        //'telefone' => 'required|numeric|digits:9',
        'telefone' => 'required',
    ];

    protected $msgs = [
        'nome.required' => 'Campo obrigatório.',
        'nome.min' => 'Mínimo 6 digitos',
        'email.required' => 'Campo obrigatório',
        'email.email' => 'Formato de e-mail incorreto',
        'telefone.required' => "Campo Obrigatório",
        //'telefone.numeric' => "Digite somente números",
        //'telefone.digits' => 'Mínimo 9 dígitos'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,$this->rules, $this->msgs);
    }

    public function salvar()
    {
        $validatedData = $this->validate($this->rules,$this->msgs);
        
        $user = User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'escola' => $this->escola,
            'cidade' => $this->cidade,
            'ano_serie' => $this->serie,
            'turno' => $this->turno,
            'password' => Hash::make('password'),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/imageform')->with('success','Usuário cadastrado com sucesso!');
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
