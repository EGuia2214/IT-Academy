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
                            <h1>New Match</h1>
                            <form action="{{route('scores.store')}}" method="POST">

                                @csrf
                                <label for ="teams" class="form-label">Home</label>
                                <p></p>
                                <select id="teams" name="local_team">
                                    <option selected="true" disabled="disabled">select team</option>
                                    @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->team_name}}</option>
                                    @endforeach
                                </select>
                                @error('local_team')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror
                                <label class="px-4">Score</label>
                                <input type="text" class="form-control" name="local_score" size="2" >
                                <p></p>
                                @error('local_score')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror

                                <label class="form-label">Visitor</label>
                                <p></p>
                                <select id="teams" name="visitor_team">
                                    <option selected="true" disabled="disabled">select team</option>
                                    @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->team_name}}</option>   
                                    @endforeach
                                </select>
                                @error('visitor_team')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror
                                <label class="px-4">Score</label>
                                <input type="text" class="form-control" name="visitor_score" size="2" >
                                <p></p>
                                @error('visitor_score')
                                <div class="bg-red-200 text-red-800">{{ $message }}</div>
                                @enderror


                                <br />
                                <button class="bg-blue-100 p-4 rounded text-blue-800" type="submit">Add Match</button>
                            </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>