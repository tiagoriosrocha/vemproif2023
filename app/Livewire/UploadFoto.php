<?php

namespace App\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UploadFoto extends Component
{
    use WithFileUploads;

    public $photo;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // 1MB Max
        ]);
    }

 
    public function save()
    {
        $this->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // 1MB Max
        ]);

        if($this->photo){
            $userId = Auth::id();
            $user = User::find($userId);
            
            $filename= $user->id . '-' . date('YmdHi').'.'.$this->photo->extension();
            
            $this->photo->storeAs('public/images', $filename);
            
            $user->imagem = $filename;
            $user->save();
        }

        return redirect()->route('dashboard')->with('success','Imagem cadastrada com sucesso!');
    }
}
