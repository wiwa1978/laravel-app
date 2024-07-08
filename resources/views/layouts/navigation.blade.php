<nav x-data="{ open: false }" class="relative bg-gray-50 navbar z-50">
<div class="relative bg-white shadow">
  <div class="mx-auto w-full px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=rose&shade=800" alt="Your Company"> -->
          <!--<img class="h-16 w-auto" src="{{ asset('storage/images/logo4.png')}}" alt="Your Company"> -->
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a wire:click="$refresh" wire:navigate class="rounded-md text-rose-700 px-3 py-2 text-xl font-medium hover:bg-rose-700 hover:text-white" href="{{ route('home') }}">Home</a>
              <a wire:click="$refresh" wire:navigate class="rounded-md text-rose-700 px-3 py-2 text-xl font-medium hover:bg-rose-700 hover:text-white" href="{{ route('messages') }}">Messages</a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu" x-show="open">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{ route('home') }}" wire:click="$refresh" wire:navigate class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
    </div>
  </div>

</div>
</nav>