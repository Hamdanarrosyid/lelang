<x-layouts.dashboard title="Goods" headerTitle="Goods" goods="active">
    @section('content')
        <div>
            <div class=" h-12 items-center justify-between flex px-4">
                <a href="{{route('goods.index')}}" class="text-white focus:outline-none hover:bg-opacity-70 bg-gray-800 cursor-pointer px-4 py-1 rounded-md">< Back</a>
                <div></div>
            </div>
            <div class="pt-2 px-4 flex justify-center">
                <form id="add_goods_form" class="w-full" action="{{route('goods.update',['good'=>$good->id])}}" method="POST">
                    @csrf
                    @method('patch')
                    <label for="goods_name">Name</label>
                    <x-input value="{{$good->goods_name}}" id="goods_name" required type="text" name="goods_name" class="focus:outline-none border" placholder="Name goods"/>
                    <label for="initial_price">Initial Price</label>
                    <x-input value="{{$good->initial_price}}" id="initial_price" required type="number" name="initial_price" class="focus:outline-none border" placholder="inital price"/>
                    <label for="goods_date">Date</label>
                    <x-input value="{{$good->goods_date}}" id="goods_date" required type="date" name="goods_date" class="focus:outline-none border" placholder="goods_date"/>
                    <label for="goods_description">Description</label>
                    <textarea class="w-full shadow-lg bg-gray-300 outline-none p-2 my-3" id="goods_description" name="descriptions">{{$good->descriptions}}</textarea>
                    <x-button title="Submit" type="submit" bg="bg-green-500" color="text-white"/>
                </form>
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
