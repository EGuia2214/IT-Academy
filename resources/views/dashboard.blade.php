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
                    <h1 class="text-2xl">Teams</h1>
                   
                    <table class="table table-striped">
                         <tbody>    
                            @foreach ($teams as $team)
                            <tr class="leading-7">
                                <td>{{$team->team_name}}</td>

                              
                            

                            <td class="px-8"><button class="bg-blue-100 px-4 rounded text-blue-900"><a href="{{route('list.show',$team->id)}}">Show Team</a></button><br></td>
                            <td class="px-8"><button class="bg-blue-100 px-5 rounded text-blue-900"><a href="{{route('list.edit',$team->id)}}">Edit Team</a></button><br></td>
                            <td class="px-8">
                                <form action="{{route('list.destroy',$team->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-100 px-4 rounded text-red-900">Delete Team</button>
                                </form>
                            </td>
                            </tr>  
                            @endforeach
                        </tbody>  
                    </table>

                    <button class="bg-blue-100 px-4 rounded mt-4 leading-9 text-blue-800"><a href="{{(route('list.create'))}}">New team</a></button>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl">Matches</h1>
                   
                    <table class="table table-striped">
                         <tbody>
                                 @foreach ($scores as $score)
                                <tr class="leading-7">
                                    <td>{{$score->local->team_name}}&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{$score->local_score}} :&nbsp;&nbsp;</td>
                                    <td>{{$score->visitor_score}}&nbsp;&nbsp;</td>
                                    <td>{{$score->visitor->team_name}}</td>
                                    

                                
                                

                                <td class="px-8"><button class="bg-blue-100 px-4 rounded text-blue-900"><a href="{{route('scores.show',$score->id)}}">Show Match</a></button><br></td>
                                <td class="px-8"><button class="bg-blue-100 px-5 rounded text-blue-900"><a href="{{route('scores.edit',$score->id)}}">Edit Match</a></button><br></td>
                                <td class="px-8">
                                    <form action="{{route('scores.destroy',$score->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red-100 px-4 rounded text-red-900">Delete Match</button>
                                    </form>
                                </td>
                                </tr>  
                                @endforeach
                        </tbody>  
                    </table>

                    <button class="bg-blue-100 px-4 rounded mt-4 leading-9 text-blue-800"><a href="{{(route('scores.create'))}}">New Match</a></button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
