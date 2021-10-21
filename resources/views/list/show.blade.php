<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('European Super League') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if( request()->get('new') )
                    <p class="bg-green-100 p-4 rounded text-green-800">You added a new team!</p><br>
                    
                    @elseif( request()->get('updt') )
                    <p class="bg-green-100 p-4 rounded text-green-800">The team is updated</p><br>
                      
                    @else
                             
                    @endif

                    <p>Team: {{$team->team_name}}<br>
                       Stadium: {{$team->stadium}}<br>
                        Foundation Year: {{$team->foundation_year}}<br>
                        City: {{$team->city}}
                 
                     <br><br>
                     <button class="bg-blue-100 p-4 rounded text-blue-800"><a href="{{(route('list'))}}">Back to teams list</a></button>   
                     </div>        
    
                        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>