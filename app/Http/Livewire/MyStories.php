<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class MyStories extends Component
{
    use LivewireAlert;

    public $storyName;
    public $storyGenre;
    public $storyLogline;
    
    public $selectedStory;
    public $selectedStoryName;

    protected $rules = [
        'storyName' => 'required',
        'storyGenre' => 'required',
        'storyLogline' => 'required | max: 255'
    ];

    protected $messages = [
        'storyName.required' => 'Story name cannot be empty.',
        'storyGenre.required' => 'Story genre cannot be empty.',
        'storyLogline.required' => 'Story Detail cannot be empty.',
        'storyLogline.max' => 'Story Detail must be max 255 character.'
    ];

    public function store()
    {
        $this->validate();
        
        $story = new Story();
        $story->name = $this->storyName;
        $story->genre = $this->storyGenre;
        $story->summary = $this->storyLogline;
        $story->user_id = Auth::id();
        $story->save();
        
        session()->flash('message', 'Story successfully created.');

    }

    public function delete($id)
    {
        $this->selectedStory = Story::find($id);
    }

    public function destroy($id)
    {   
        $this->selectedStory = Story::find($id);
        try {
            $this->selectedStoryName = $this->selectedStory->name;
            $this->selectedStory->delete();
            session()->flash('messageInfo', 'Story successfully deleted.');

        } catch (\Throwable $th) {
            session()->flash('error', "Story can't deleted.");
        }
    }
    
    public function render()
    {
        return view('livewire.my-stories',[
            'myStories' => Story::where('user_id', Auth::id())->get()
        ]);
    }
}
