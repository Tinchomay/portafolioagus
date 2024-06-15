
<header x-data="{open: false}">
    <nav class="mx-auto flex  items-center justify-between p-4 px-8">
      <div class="flex lg:flex-1">
        <x-link-navigation :href="route('index')" :active="request()->routeIs('index')" class="px-0 pt-2">
          <img src="{{ asset('img/logo.svg') }}" alt="Logo con letras ASM " class=" w-12 invert p-0">
        </x-link-navigation>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" x-on:click="open = true">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6 text-green-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      {{-- Botones principales --}}
      <div class="hidden lg:flex lg:gap-x-2">
        <x-link-navigation :href="route('sobre-mi')" :active="request()->routeIs('sobre-mi')">
            Sobre Mi
            <x-slot:numero>
                {{ '01.'}}
            </x-slot:numero>
        </x-link-navigation>
        <x-link-navigation :href="route('educacion')" :active="request()->routeIs('educacion')">
            Educacion y Experiencia
            <x-slot:numero>
                {{ '02.'}}
            </x-slot:numero>
        </x-link-navigation>
        <x-link-navigation :href="route('proyectos')" :active="request()->routeIs('proyectos')">
            Proyectos
            <x-slot:numero>
                {{ '03.'}}
            </x-slot:numero>
        </x-link-navigation>
        <a href="{{ route('contacto') }}" class="p-2 bg-green-300  border-b-transparent border-b-2 hover:border-b-2 hover:scale-110 duration-200 text-black rounded-lg">
          <span class="text-gray-600">04. </span> Contacto
        </a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open" >
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-sky-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" >
        <div class="flex items-center justify-between pl-2">
            <x-link-navigation :href="route('index')" :active="request()->routeIs('index')" class="px-0">
              <img src="{{ asset('img/logo.svg') }}" alt="Logo con letras ASM " class=" w-12 invert px-0">
            </x-link-navigation>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="open = false">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6 text-green-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="flex flex-col">
            <x-link-navigation :href="route('sobre-mi')" :active="request()->routeIs('sobre-mi')">
                Sobre Mi
                <x-slot:numero>
                    {{ '01.'}}
                </x-slot:numero>
            </x-link-navigation>
            <x-link-navigation :href="route('educacion')" :active="request()->routeIs('educacion')">
                Educacion y Experiencia
                <x-slot:numero>
                    {{ '02.'}}
                </x-slot:numero>
            </x-link-navigation>
            <x-link-navigation :href="route('proyectos')" :active="request()->routeIs('proyectos')">
                Proyectos
                <x-slot:numero>
                    {{ '03.'}}
                </x-slot:numero>
            </x-link-navigation>
            <x-link-navigation :href="route('contacto')" :active="request()->routeIs('contacto')">
              Contacto
              <x-slot:numero>
                  {{ '04.'}}
              </x-slot:numero>
          </x-link-navigation>
          </div>
        </div>
      </div>
    </div>
  </header>
  