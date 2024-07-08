<div class="mx-6">
    <input  class="mx-6" wire:model='message' type="text">
    <button class="mx-6 text-red-500" wire:click='submitMessage'>Submit</button>
    
    <div class="m-6">
        @foreach($conversation as $message)
            <p class="m-6">{{ $message }}</p>
        @endforeach
    </div>

  </div>

</div>

