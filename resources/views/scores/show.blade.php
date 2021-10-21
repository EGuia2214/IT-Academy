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
                    <p class="bg-green-100 p-4 rounded text-green-800">You added a new match</p><br>
                    
                    @elseif( request()->get('updt') )
                    <p class="bg-green-100 p-4 rounded text-green-800">The match is updated</p><br>
                      
                    @else
                             
                    @endif

                    <p> Stadium: {{$score->local->stadium}} <br>
                        City: {{$score->local->city}}<br>
                        Score: {{$score->local->team_name}}&nbsp;&nbsp;{{$score->local_score}}&nbsp;&nbsp;:&nbsp;&nbsp;{{$score->visitor_score}}&nbsp;&nbsp;{{$score->visitor->team_name}}
                        <br><br>
                        <button class="bg-blue-100 p-4 rounded text-blue-800"><a href="{{(route('list'))}}">Back to teams & matches</a></button>   
                    </p>       
    
                        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>