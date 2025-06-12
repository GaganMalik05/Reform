<x-base-layout>

<div class="border mt-15 mb-15 ml-50 mr-50 rounded-lg">
    <form method="POST" action="/publication/store" enctype="multipart/form-data">
        @csrf
        <div class="m-3 flex flex-col">
            <label class="p-3">Publiaction Date :</label>
            <input type="text" name="publication_date" required class="border rounded-lg p-1 m-3">
        </div>
        <div class="m-3 flex flex-col">
            <label class="p-3">Department :</label>
            <input type="text" name="department" required class="border rounded-lg p-1 m-3">
        </div>

        <div class="m-3 flex flex-col">
            <label class="p-3">Document Type :</label>
            <textarea type="text" name="document_type" class="row-span-4 border rounded-lg p-1 m-3" required ></textarea>
        </div>

        <div class="m-5 flex flex-col">
            <label class="p-3">Document file :</label>
            <input type="file" name="file"  class="border rounded-lg p-1 m-3 mr-215" required>
        </div>
        <div class="text-right">
            <button type="submit" class="border p-1 pl-5 pr-5 rounded-2xl mr-10 mb-5">Submit</button>
        </div>
    </form>
</div>

</x-base-layout>