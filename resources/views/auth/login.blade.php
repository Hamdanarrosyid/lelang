<x-layouts.auth title="Login">
    @section('content')
        <div
            class="lg:w-2/6 bg-gray-50 rounded-lg shadow-2xl overflow-hidden p-8 flex flex-col items-center justify-center">
            <form class="flex flex-col w-full" action="{{route('login')}}" method="POST">
                @csrf
                    <h2 class="tracking-widest text-2xl text-gray-700 text-center">Login</h2>
                <x-input placeholder="email" type="email" required name="email" value="{{old('email')}}"/>
                <x-input placeholder="password" type="password" required name="password" value="{{old('password')}}"/>
                <button type="submit" class="bg-primary p-2 text-white mt-3 outline-none rounded-lg focus:outline-none hover:bg-gray-700">Login</button>
                <div class="flex justify-between mt-3 text-gray-500">
                    <a class="bg-transparent focus:outline-none"><- Home</a>
                    <a class="bg-transparent focus:outline-none" type="button" href="{{route('register')}}">Register -></a>
                </div>
            </form>
        </div>
    @endsection
</x-layouts.auth>
