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
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('tasks.create') }}">
                        {{ __('Create task') }}
                    </a>
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
                            <td class="border-b p-4 pl-8"></td>
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
