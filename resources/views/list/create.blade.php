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
                            <h1>Nuevo Equipo</h1>
                            <form action="{{route('list.store')}}" method="POST">

                                @csrf

                                <label class="form-label">Team Name</label>
                                <p></p>
                                <input type="text" class="form-control" name="team_name">
                                <p></p>
                                @error('team_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                
                                <label class="form-label">Stadium</label>
                                <p></p>
                                <input type="text" class="form-control" name="stadium">
                                <p></p>
                                @error('stadium')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label class="form-label">Year of foundation</label>
                                <p></p>
                                <input type="text" class="form-control" name="foundation_year">
                                <p></p>
                                @error('foundation_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label class="form-label">City</label>
                                <p></p>
                                <input type="text" class="form-control" name="city">
                                <p></p>
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
        
                                <br />
                                <button class="bg-blue-100 p-4 rounded text-blue-800" type="submit">Add Team</button>
                            </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>