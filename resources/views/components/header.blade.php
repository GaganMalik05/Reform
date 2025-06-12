    <header>
        <div class="flex bg-emerald-700 justify-end pr-15">
            <a  href="#" class="mr-2">Dark</a>
            <a class="mr-2">|</a>
            <a href="#" class="mr-2">A+</a>
            <a class="mr-2">|</a>
            <a href="#" class="mr-2">A</a>
            <a class="mr-2">|</a>
            <a href="#" class="mr-2">A-</a>
        </div>
        <div class="flex justify-around p-3.5 bg-emerald-700">
            <img src="{{ asset('images/emblem.svg.webp') }}" alt="Emblem of India" class="h-[80px] w-[55px]">
            <div class="flex flex-col ">
                <h1 class="text-3xl text-blue-950 font-bold">Department of Administrative Reforms</h1>
                <h1 class="text-white font-bold text-2xl">Government of Aruanachal Pradesh</h1>
            </div>
            <img src="{{ asset('images/stateLogo.svg.png') }}" alt="Emblem of Arunachal Pradesh" class="h-[90px] w-[180px]">
        </div>
        <nav class="flex bg-blue-500 p-2.5 justify-center space-x-16 text-white">
            <ul class="flex space-x-16">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="relative group">
                    <a href="#">About Us<i class=""></i></a>

                    <ul class="absolute hidden group-hover:block bg-blue-500 w-fit whitespace-nowrap p-3">
                        <li><a>Profile</a></li>
                        <li><a href="{{ route('whoswho.index') }}">WhoIsWho</a></li>
                        <li><a>Organizational Structure</a></li>
                    </ul>

                </li>
                <li class="relative group">
                    <a href="#">Act & Rules</a>

                    <ul class="absolute hidden group-hover:block bg-blue-500 w-fit whitespace-nowrap p-3">
                        <li><a>Acts</a></li>
                        <li><a>Rules</a></li>
                        <li><a>Recruitment Rules</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a href="#">Circulars</a>

                    <ul class="absolute hidden group-hover:block bg-blue-500 w-fit whitespace-nowrap p-3">
                        <li><a>Office Memorandums</a></li>
                        <li><a>Notifications</a></li>
                        <li><a>Orders</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a href="#">RTI</a>

                    <ul class="absolute hidden group-hover:block bg-blue-500 w-fit whitespace-nowrap p-3">
                        <li><a>RTI Act</a></li>
                        <li><a>APRTI Rules</a></li>
                        <li><a>APRTI Appeal Rules</a></li>
                        <li><a>Circulars & Notifications</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a href="#">Attached Offices</a>

                    <ul class="absolute hidden group-hover:block bg-blue-500 w-fit whitespace-nowrap p-3">
                        <li class="relative group">
                            <a class="block">APPSC</a>

                            {{-- <ul class="absolute hidden group-hover:block left-full top-0">
                                <li><a>Regulations</a></li>
                                <li><a>Limitations of Functions</a></li>
                                <li><a>Orders</a></li>
                            </ul> --}}
                        </li>

                        <li class="relative group">
                            <a class="block">Arunachal Pradesh Information Commision</a>

                            {{-- <ul class="absolute hidden group-hover:block left-full top-0">
                                <li><a>Chief Information Commisione</a></li>
                                <li><a>Information Commisioner</a></li>
                                <li><a>SIC Website</a></li>
                            </ul> --}}
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Publications</a>
                </li>
                <li>
                    <a href="#">Feedback</a>
                </li>
            </ul>
            <a href="login">Login</a>
        </nav>
    </header>
