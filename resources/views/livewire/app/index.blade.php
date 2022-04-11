{{-- Care about people's approval and you will be their prisoner. --}}
<div>
  <div>
    <div class="flex flex-wrap -m-3">
      @foreach ($apps as $app)
      <div class="sm:w-full md:w-1/3 ">
        <x-app-card >
          <div class="flex">
            <div>
              <h1 class="font-semibold">{{$app->name}}</h1>
              <p class="">
                en linea
              </p>

            </div>
            <div class="ml-auto text-green-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
          <div class="text-right text-gray-400 italic">
            <p>ultima actualización {{now()->diffForHumans()}} </p>
          </div>
        </x-app-card>
      </div>
      @endforeach
    </div>
  </div>
</div>