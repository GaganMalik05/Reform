<x-base-layout>

<form action="{{ url('/login') }}" method="POST" class="flex flex-col justify-center mt-20 mb-20 ml-140 mr-140 pt-10 pb-10 border border-amber-400 rounded-2xl">
    @csrf

    <a class="flex justify-center p-4 text-lg">LOGIN</a>

    {{-- Global errors --}}
    @if ($errors->any())
        <div class="text-red-500 text-center mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Username --}}
    <div class="flex justify-between pl-12 pr-12 pt-5 pb-1">
        <label class="pt-1 pb-1">User Name :</label>
        <input type="text" name="user_name" id="username" class="border rounded-2xl pl-2 pr-2 pt-1 pb-1" value="{{ old('user_name') }}">
    </div>
    @error('user_name')
        <div class="text-red-500 text-sm text-center mt-1">{{ $message }}</div>
    @enderror

    {{-- Password --}}
    <div class="flex justify-between pl-12 pr-12 pt-5 pb-1">
        <label class="pt-1 pb-1">Password :</label>
        <input type="password" id="password" name="password" class="border rounded-2xl pl-2 pr-2 pt-1 pb-1">
    </div>
    @error('password')
        <div class="text-red-500 text-sm text-center mt-1">{{ $message }}</div>
    @enderror

    {{-- Submit --}}
    <button class="m-5 ml-40 mr-40 p-1 border rounded-lg">Login</button>
</form>

</x-base-layout>
