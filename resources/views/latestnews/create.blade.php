<x-base-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded-lg mt-10">
        <!-- Please Fix CSS of this page -->
        <h2 class="text-2xl font-semibold mb-6">Add Latest News</h2>

        <form action="{{ route('latestnews.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">News Description</label>
                <textarea name="content" id="content" rows="4" class="w-full border rounded p-2">{{ old('content') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="pdf" class="block text-gray-700 font-semibold mb-2">Upload PDF</label>
                <input type="file" name="pdf" accept="application/pdf" class="w-full border rounded p-2" />
            </div>

           
                <a href="{{ route('latestnews.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 mr-2">Cancel</a>
                <button type="submit">Submit</button>
        </form>
    </div>
</x-base-layout>
