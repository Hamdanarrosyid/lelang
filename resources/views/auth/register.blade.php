<x-layouts.auth title="Register">
    @section('content')
        <div
            class="lg:w-2/6 bg-gray-50 rounded-lg shadow-2xl overflow-hidden p-8 flex flex-col items-center justify-center">
            <form class="flex flex-col w-full" action="{{route('register')}}" method="POST">
                @csrf
                <h2 class="tracking-widest text-2xl text-gray-700 text-center">Register</h2>
                <x-input placeholder="username" type="text" required name="name" value="{{old('name')}}"/>
                <x-input placeholder="email" type="email" required name="email" value="{{old('email')}}"/>
                <x-input placeholder="password" type="password" required name="password" value="{{old('password')}}"/>
                <x-input placeholder="confirm password" type="password" required name="password_confirmation" value="{{old('password_confirmation')}}"/>
                <button type="submit" class="bg-primary p-2 text-white mt-3 outline-none rounded-lg focus:outline-none hover:bg-gray-700">Register</button>
                <div class="flex justify-between mt-3 text-gray-500">
                    <a class="bg-transparent focus:outline-none"><- Home</a>
                    <a class="bg-transparent focus:outline-none" href="{{route('login')}}">Login -></a>
                </div>
            </form>
        </div>
    @endsection
</x-layouts.auth>
