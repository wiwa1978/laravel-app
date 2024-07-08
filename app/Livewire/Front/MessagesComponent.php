<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Events\MessageEvent;

class MessagesComponent extends Component
{
    public $message = "";
    public $conversation = [];
    
    public function submitMessage(){
        //dd($this->message);
        MessageEvent::dispatch($this->message);
    }

    #[On('echo:our-channel, MessageEvent')]
    public function listenForMessage($data){
        dd($data['message']);
       $this->conversation[] = $data['message'];
  
    }
    
    public function render()
    {
        
        return view('components.messages');
    }
}
