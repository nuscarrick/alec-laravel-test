<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-primary-button>
                    <a class="no-underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('tasks.create') }}">
                        {{ __('Create task') }}
                    </a>
                    </x-primary-button>
                    <table class="border-collapse table-fixed w-full text-sm">
                      <thead>
                        <tr>
                          <th class="border-b  font-medium p-4 pl-8 pt-0 pb-3 text-left"><b>{{ __('Title') }}</b></th>
                          <th class="border-b  font-medium p-4 pl-8 pt-0 pb-3 text-left"><b>{{ __('Description') }}</b></th>
                          <th class="border-b  font-medium p-4 pl-8 pt-0 pb-3 text-left"><b>{{ __('Actions') }}</b></th>
                        </tr>
                      </thead>
                      <tbody class="bg-white dark:bg-slate-800">
                        @foreach ($tasks as $task)
                          <tr>
                            <td class="border-b p-4 pl-8">{{$task->title}}</td>
                            <td class="border-b p-4 pl-8">{{$task->description}}</td>
                            <td class="border-b p-4 pl-8 inline-flex ">
                              <x-primary-button>
                                <a class="no-underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('tasks.edit', $task->id) }}">
                                    {{ __('Edit') }}
                                </a>
                              </x-primary-button>
                                
                              <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                  @csrf
                                  @method('DELETE')
                                  <x-danger-button class="ml-3">
                                    {{ __('Delete') }}
                                  </x-danger-button>
                              </form>                              
                            </td>
                          </tr>                             
                        @endforeach                        
                      </tbody>
                    </table>
                    <div>
                      {{ $tasks->links() }}
                    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
