<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                      <form method="post" action="{{ route('tasks.store') }}" class="mt-6 space-y-6">
                          @csrf                          

                          <div>
                              <x-input-label for="title" :value="__('Title')" />
                              <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')"/>
                              <x-input-error :messages="$errors->get('title')" class="mt-2" />
                              
                          </div>

                          <div>
                              <x-input-label for="description" :value="__('Description')" />
                              <x-text-area id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description')"/>  
                              <x-input-error :messages="$errors->get('description')" class="mt-2" />                            
                          </div>                          

                          <div class="flex items-center gap-4">
                              <x-primary-button>{{ __('Save') }}</x-primary-button>                              
                          </div>
                      </form>
                  </section>
                </div>
            </div>            
        </div>
    </div>
</x-app-layout>