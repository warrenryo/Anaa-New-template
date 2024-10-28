@extends('layouts.JobPortalLayout')

@section('content')
<!-- Header -->
<header class="border-b bg-white">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-blue-600">ParadiseHotel</h1>
        <div class="space-x-4">
            <button class="px-4 py-2 text-gray-600 hover:text-gray-900">Sign In</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Post a Job</button>
        </div>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-8">
    <!-- Search Section -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Job Search Input -->
            <div class="relative">
                <input type="text" placeholder="Job title, keywords" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <!-- Location Dropdown -->
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Location</option>
                <option value="sg">Singapore</option>
                <option value="my">Malaysia</option>
                <option value="id">Indonesia</option>
            </select>

            <!-- Job Type Dropdown -->
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Job Type</option>
                <option value="full">Full-time</option>
                <option value="part">Part-time</option>
                <option value="contract">Contract</option>
            </select>

            <!-- Search Button -->
            <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Search Jobs
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div class="space-y-4 ">
            @for($i = 0; $i < 10; $i++)
                <div class="bg-white rounded-xl border border-gray-300 p-5 space-y-2">
                <div class="">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs  bg-purple-200  text-purple-800 font-bold dark:bg-white dark:text-neutral-800">Urgently Hiring</s>

                </div>
                <div>
                    <h1 class="text-lg text-purple-900 font-bold">Software Engineer</h1>
                    <h1>Paradise Hotel</h1>
                </div>
                <div>
                    <h1 class="mt-2">Metro Manila</h1>
                    <h1>Engineering - Software</h1>
                </div>
                <ul class="list-disc pl-5 mt-2">
                    <li>Create scalable and efficient software applications based on user needs and technical specifications.</li>
                    <li>Write clean, maintainable code using best practices and coding standards.</li>
                    <li>Perform unit testing and debugging to ensure software quality and functionality.</li>
                </ul>
                <div class="mt-4">
                    <span class=" text-gray-500">3d ago</span>
                </div>
        </div>
        @endfor
    </div>
    <div class="relative">
        <div class="header hidden bg-white shadow-md p-4 transition-all duration-300 ease-in-out transform opacity-0 translate-y-[-20px]">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-xl font-semibold">Software Engineer</h1>
                    <p class="">Paradise Hotel</p>
                </div>
                <div class="mt-5 flex gap-4">
                    <button class="bg-pink-600 text-white py-2 px-4 rounded-lg font-bold">
                        Quick apply
                    </button>
                    <button class="bg-blue-100 text-blue-900 py-2 px-4 rounded-lg font-bold">
                        Save
                    </button>
                </div>
            </div>
        </div>
        <div class="max-h-[100vh] overflow-y-auto sticky top-4 " onscroll="handleScroll(this)">

            <div class="pb-20">
                <div>
                    <h1 class="text-3xl font-semibold">Software Engineer</h1>
                    <p class="text-lg">Paradise Hotel</p>
                </div>
                <div class="space-y-2 mt-4">
                    <span class="flex items-center gap-1">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Kuala Lumpur
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Full-time
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                        Engineering - Software
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>

                        70,000 - 80,000
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Posted 1 day ago
                    </span>
                </div>
                <div class="mt-5 flex gap-5">
                    <button class="bg-pink-600 text-white py-3 px-6 rounded-lg font-bold">
                        Quick apply
                    </button>
                    <button class="bg-blue-100 text-blue-900 py-3 px-6 rounded-lg font-bold">
                        Save
                    </button>
                </div>
                <div class="mt-10">
                    <div>
                        <h1 class="text-xl font-semibold ">Role Description</h1>
                        <p>
                            Accenture is a leading global professional services company that helps the world’s leading businesses, governments and other organizations build their digital core, optimize their operations, accelerate revenue growth and enhance citizen services—creating tangible value at speed and scale. We are a talent- and innovation-led company with approximately 733,000 people serving clients in more than 120 countries. Technology is at the core of change today, and we are one of the world’s leaders in helping drive that change, with strong ecosystem relationships. We combine our strength in technology and leadership in cloud, data and AI with unmatched industry experience, functional expertise and global delivery capability. We are uniquely able to deliver tangible outcomes because of our broad range of services, solutions and assets across Strategy & Consulting, Technology, Operations, Industry X and Song. These capabilities, together with our culture of shared success and commitment to creating 360° value, enable us to help our clients reinvent and build trusted, lasting relationships. We measure our success by the 360° value we create for our clients, each other, our shareholders, partners and communities. Visit us at www.accenture.com.
                        </p>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold mt-10">Benefits</h1>
                        <p>
                            HMO
                            HMO
                            HMO
                            HMO
                        </p>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold mt-10">Responsibilities</h1>
                        <ul class="list-disc pl-5 mt-2 space-y-2">
                            <li>Create scalable and efficient software applications based on user needs and technical specifications.</li>
                            <li>Write clean, maintainable code using best practices and coding standards.</li>
                            <li>Perform unit testing and debugging to ensure software quality and functionality.</li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold mt-10">Skills</h1>
                        <ul class="list-disc pl-5 mt-2 space-y-2">
                            <li>Create scalable and efficient software applications based on user needs and technical specifications.</li>
                            <li>Write clean, maintainable code using best practices and coding standards.</li>
                            <li>Perform unit testing and debugging to ensure software quality and functionality.</li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold mt-10">Qualifications</h1>
                        <ul class="list-disc pl-5 mt-2 space-y-2">
                            <li>Create scalable and efficient software applications based on user needs and technical specifications.</li>
                            <li>Write clean, maintainable code using best practices and coding standards.</li>
                            <li>Perform unit testing and debugging to ensure software quality and functionality.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-8">
        <button class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 inline-flex items-center gap-2">
            Load More
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>
    </div>
</main>

<script>
    function handleScroll(element) {
        const header = document.querySelector('.header');
        if (element.scrollTop > 280) {
            header.classList.remove('hidden', 'opacity-0', 'translate-y-[-20px]');
            header.classList.add('block', 'translate-y-0');
        } else {
            header.classList.add('hidden', 'translate-y-[-20px]');
            header.classList.remove('block', 'translate-y-0');
        }
    }
</script>
@endsection