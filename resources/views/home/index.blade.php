<x-base-layout>

    <section>
        <div class="flex flex-col justify-center pl-50 pr-50 pt-15 pb-15 space-y-3 tracking-wide leading-relaxed">
            <h1 class="text-2xl">Profile</h1>
            <p class="">The department of Administrative Reforms is the coordinating agency of the Government of
                Arunachal
                Pradesh in
                the matters related to public grievances, reforms in administrations, framing of recruitment rules,
                career
                development, staff welfare, process re-engineering, re-organizing and restructure of departments. The
                department is also concerned with the process of responsive people oriented modern administration.
                Allocation of business rules defines the work allotted for the department. The department comprises of
                the
                following wings.</p>

            <h1 class="text-2xl">Business</h1>
            <ul class="list-disc list-inside">
                <li>All policy matters relating to recruitment, promotions, service conditions, prescription of
                    educational qualifications etc.</li>
                <li>Preparation/Revision of office Manuals.</li>
                <li>Devising new methods and procedures for improvement in the standard of administration.</li>
                <li>Studies in specific aspects of administration.</li>
                <li>Work studies for assessing requirement of staff in various departments.</li>
                <li>Quality control in offices.</li>
                <li>Clearance of proposals for creation of posts.</li>
                <li>Re-organization of departments/office.</li>
                <li>Checks on delays.</li>
                <li>Chief Secretaries conferences.</li>
                <li>Secretaries meetings.</li>
                <li>Matters relating to office Inspection.</li>
                <li>Clearance of RRs/Service Rules of all Departments and issue of general instructions on the subject.
                </li>
                <li>Collection and scrutiny of Monthly arrear statements.</li>
                <li>All matters relating to Public Service Commission.</li>
                <li>All matters relating to Public Service Commission.</li>
                <li>Matters relating to public grievances.</li>
            </ul>
        </div>
        <!-- Please fix css -->
        <div class="flex flex-col justify-center pl-50 pr-50 pt-15 pb-15 space-y-3 tracking-wide leading-relaxed bg-gray-100">
            <h1 class="text-2xl">Latest News / Advertisements</h1>

            @if($news->isEmpty()) 
                <p>No news or advertisements available.</p> <!-- Shows this when no news or ad available -->
            @else
                <ul class="list-disc list-inside">
                    @foreach($news as $item)
                <li class="flex items-center space-x-2">
                        <a href="{{ asset($item->pdf_path) }}" target="_blank" class="text-blue-600 underline">
                            {{ $item->content }}  <!-- Display text content as clickable links  -->
                        </a>
                </li>
            @endforeach
                </ul>
            @endif
        </div>
    </section>

</x-base-layout>
