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
                            <h1>Edit match</h1>
                            <form action="{{route('scores.update', $score->id)}}" method="POST">

                                @csrf
                                @method('put')

                                <label for ="teams" class="form-label">Home</label>
                                <p></p>
                                <select id="teams" name="local_team">
                                    {{--<option value="{{$team->id}}">{{$team->team_name}}</option>--}}
                                    @foreach ($teams as $team)
                                    <option value="{{$team->id}}" {{$team->id==$score->local_team ?  'selected' : '' }}> {{$team->team_name}}</option>
                                    @endforeach
                                </select>
                                @error('local_team')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror
                                <label class="px-4">Score</label>
                                <input type="text" class="form-control" name="local_score" size="2" value={{$score->local_score}} >
                                <p></p>
                                @error('local_score')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror

                                <label class="form-label">Visitor</label>
                                <p></p>
                                <select id="teams" name="visitor_team">
                                    @foreach ($teams as $team)
                                    <option value="{{$team->id}}" {{$team->id==$score->visitor_team ?  'selected' : '' }}> {{$team->team_name}}</option>   
                                    @endforeach
                                </select>
                                @error('visitor_team')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror
                                <label class="px-4">Score</label>
                                <input type="text" class="form-control" name="visitor_score" size="2" value={{$score->visitor_score}}>
                                <p></p>
                                @error('visitor_score')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror
        
                                <br />
                                <button class="bg-blue-100 p-4 rounded text-blue-800" type="submit">Update</button>
                            </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>        