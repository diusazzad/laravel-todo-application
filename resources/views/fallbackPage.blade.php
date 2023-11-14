@extends('layouts.template')

@section('content')

<div class="flex justify-center items-center h-screen">
    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        data-toggle="modal" data-target="#exampleModal">
        <a href="/">
            Launch demo modal
        </a>
    </button>

    <!-- Modal -->
    <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">

                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Modal title</p>
                    <div class="modal-close cursor-pointer z-50">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <!--Body-->
                <p>...</p>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button
                        class="modal-close px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400">Close</button>
                    <a href="/" class="px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Return to
                        Homepage</a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
