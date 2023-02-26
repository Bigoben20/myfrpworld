<?php

namespace App\Http\Livewire;

use App\Models\MyCharacter;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MyCharacters extends Component
{
    use LivewireAlert;

    public $characterName;
    
    public $selectedCharacter;

    public function delete($id)
    {
        $this->selectedCharacter = MyCharacter::find($id);
    }

    public function destroy()
    {
        try {
            $this->characterName = $this->selectedCharacter->name;
            $this->selectedCharacter->delete();
            $this->alert('success', "$this->characterName başarıyla silindi bir hata oluştu.");
        } catch (\Throwable $th) {
            $this->alert('error', "$this->characterName silinirken bir hata oluştu.");
        }
    }


    public function render()
    {
        $myCharacters = MyCharacter::where('user_id', Auth::id())->get();

        return view('livewire.my-characters', [
            'myCharacters' => $myCharacters
        ]);
    }
}
