<div>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
    <div @class([ 'bg-white border-b border-gray-200 transition-all' , 'max-h-40'=> !$showForm,
      'max-h-1000' => $showForm
      ])>
      @if ($showForm)
      <div class="">
        <div class="flex mb-5 p-6 pb-0">
          <div class="flex items-center justify-center">
            <span class="font-semibold text-xl text-gray-800">Agregar aplicación</span>
          </div>
          <div class="ml-auto">
            <x-n-button variant="warning" wire:click="showForm">
              cancelar
            </x-n-button>
          </div>
        </div>
        <div class="p-6 pt-0">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
              class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex justify-end">
          <x-n-button variant="primary" wire:click="showForm">
            guardar
          </x-n-button>
        </div>

      </div>
      @else
      <div class="p-6">
        <div class="flex">
          <div class="flex items-center justify-center">
            <span class="font-semibold text-xl text-gray-800">Aplicaciones</span>
          </div>
          <div class="ml-auto">
            <x-n-button variant="primary" wire:click="showForm">
              agregar
            </x-n-button>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>