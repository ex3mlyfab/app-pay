@extends('layouts.creative')
@section('title')
    Dashboard
@endsection
@section('content')
    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-6 mx-2 mt-4 md:grid-cols-2 lg:gap-4 lg:grid-cols-4">
            <!--card begins -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="flex justify-between p-4 md:p-5 gap-x-3">
                    <div>
                        <p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
                            Total users
                        </p>
                        <div class="flex items-center mt-1 gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                                72,540
                            </h3>
                            <span class="flex items-center text-green-600 gap-x-1">
                                <svg class="self-center inline-block size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                                <span class="inline-block text-lg">
                                    1.7%
                                </span>
                            </span>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                </div>

                <a class="inline-flex items-center justify-between px-4 py-3 text-sm text-gray-600 border-t border-gray-200 md:px-5 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    View reports
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="flex justify-between p-4 md:p-5 gap-x-3">
                    <div>
                        <p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
                            Sessions
                        </p>
                        <div class="flex items-center mt-1 gap-x-2">
                            <h3 class="mt-1 text-xl font-medium text-gray-800 dark:text-neutral-200">
                                29.4%
                            </h3>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M5 22h14" />
                            <path d="M5 2h14" />
                            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                        </svg>
                    </div>
                </div>

                <a class="inline-flex items-center justify-between px-4 py-3 text-sm text-gray-600 border-t border-gray-200 md:px-5 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    View reports
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="flex justify-between p-4 md:p-5 gap-x-3">
                    <div>
                        <p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
                            Avg. Click Rate
                        </p>
                        <div class="flex items-center mt-1 gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                                56.8%
                            </h3>
                            <span class="flex items-center text-red-600 gap-x-1">
                                <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                                    <polyline points="16 17 22 17 22 11" />
                                </svg>
                                <span class="inline-block text-lg">
                                    1.7%
                                </span>
                            </span>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                            <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                        </svg>
                    </div>
                </div>

                <a class="inline-flex items-center justify-between px-4 py-3 text-sm text-gray-600 border-t border-gray-200 md:px-5 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    View reports
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="flex justify-between p-4 md:p-5 gap-x-3">
                    <div>
                        <p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
                            Pageviews
                        </p>
                        <div class="flex items-center mt-1 gap-x-2">
                            <h3 class="mt-1 text-xl font-medium text-gray-800 dark:text-neutral-200">
                                92,913
                            </h3>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                            <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                        </svg>
                    </div>
                </div>

                <a class="inline-flex items-center justify-between px-4 py-3 text-sm text-gray-600 border-t border-gray-200 md:px-5 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    View reports
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->


        </div>
        <div class="mt-4 p-3 w-full bg-primary shadow-xl bg-gray-400">
            {{public_path()}}
        </div>

    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Chart Js -->
    <script src="{{ URL::asset('build/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('build/js/appexchart-app.js') }}"></script>
@endsection
