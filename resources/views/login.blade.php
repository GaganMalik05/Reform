<x-base-layout>

<form action="#" method="POST" class="flex flex-col justify-center mt-20 mb-20 ml-140 mr-140 pt-10 pb-10 border border-amber-400 rounded-2xl">
    <a class=" flex justify-center p-4 text-lg">LOGIN</a>
    <div class="flex justify-between pl-12 pr-12 pt-5 pb-5">
        <label class="pt-1 pb-1">User Name :</label>
        <input type="text" id="username" id="username" class="border rounded-2xl pl-2 pr-2 pt-1 pb-1">
    </div>

    <div class="flex justify-between pl-12 pr-12 pt-5 pb-5">
        <label class="pt-1 pb-1">Password :</label>
        <input type="password" id="password" name="password" class="border rounded-2xl pl-2 pr-2 pt-1 pb-1">
    </div>

    <button class="m-5 ml-40 mr-40  p-1 border rounded-lg">Login</button>
</form>

</x-base-layout>