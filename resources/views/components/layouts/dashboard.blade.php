<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lelang : {{$title??''}}</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
            integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

<!--Nav-->
<nav class="bg-gray-800 items-center md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="flex items-center py-3 justify-between">
        <div class="flex md:w-1/3 justify-center md:justify-start text-white">
            <a href="#">
                {{--                <span class="text-xl pl-2"><i class="em em-grinning"></i>Lelang</span>--}}
                <p class="text-xl pl-2 text-blue-500 tracking-widest">Auction</p>
            </a>
        </div>

        <div class="flex content-center md:w-1/3 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="md:flex-1 md:flex-none md:mr-3">
                    <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none">
                            <div>
                                <span class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{auth()->user()->name}}</span>
                                <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </button>
                        <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                            <a href="3" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-fw"></i>
                                Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
                <li class="md:flex-1 md:flex-none md:mr-3 invisible hidden md:block md:visible">
                    <a href="{{route('logout')}}"
                       class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                            class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                </li>
            </ul>
        </div>
    </div>

</nav>


<div class="flex flex-col md:flex-row">

    <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
        <div
            class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="mr-3 flex-1">
                    <a href="{{route('home')}}"
                       class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white hover:border-blue-600 border-transparent border-b-2 {{$home??'' === 'active' ? 'border-b-2 border-blue-600':''}} ">
                        <i class="fas fa-home pr-0 md:pr-3 {{$home ?? '' === 'active' ? 'text-blue-600':''}}"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Home</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('goods.index')}}"
                       class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-transparent border-b-2  {{$goods ?? '' === 'active'? 'border-b-2 border-purple-500':''}} hover:border-purple-500">
                        <i class="fas fa-briefcase pr-0 md:pr-3 {{$goods ?? '' === 'active'? 'text-purple-500':''}}"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Goods</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('auction_items.index')}}"
                       class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500 {{$auctions ?? '' === 'active'? 'border-b-2 border-pink-500':''}}">
                        <i class="fas fa-gavel pr-0 md:pr-3 {{$auctions ?? '' === 'active'? 'text-pink-500':''}}"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Auctions</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('reports.index')}}"
                       class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500 {{$reports ?? '' === 'active'? 'border-b-2 border-red-500':''}}">
                        <i class="fa fa-file-alt pr-0 md:pr-3 {{$reports ?? '' === 'active'? 'text-red-500':''}}"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Generate Reports</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>

    <div class="main-content flex-1 bg-gray-100 mt-5 md:mt-2 pb-24 md:pb-5">

        {{--        <div class="bg-gray-800 pt-3">--}}
        {{--            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">--}}
        {{--                <h3 class="font-bold pl-2">{{$headerTitle??'Home'}}</h3>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        @yield('content')


    </div>
</div>


<script>
    /*Toggle dropdown list*/
    const toggleDD = (myDropMenu) => {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>


</body>

</html>
