<x-app-layout>
    <h1 class="font-bold text-1xl pt-2">Add Legion</h1>
    
    <div class="pt-4">
        <form method="POST" action="/legion/new">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Legion Name" value="{{ old('name') }}" />
                @error('name')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>

            <br>
            <div>
                <input type="text" name="colour" placeholder="Legion Colour" value="{{ old('colour') }}" />
                @error('colour')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>

            <br>
            <div>
                <button>Submit</button>
            </div>

        </form>
    </div>
</x-app-layout>