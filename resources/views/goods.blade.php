<x-layouts.dashboard title="Goods" headerTitle="Goods" goods="active">
    @section('content')
        <div>
            <div class="h-12 items-center justify-between border-b-2 mx-2 flex px-4">
                <div>
                    <p>All Goods</p>
                </div>
                <x-button title="Add" bg="bg-gray-800 add-goods" color="text-white"/>
            </div>
            <div class="pt-2 px-4">
                @foreach($goods as $item)
                    <table class="table-fixed w-full">
                        <tbody>
                        <tr>
                            <td><p class="block text-blue-600">{{$item->goods_name}}</p><p class="text-xs text-gray-500">{{$item->descriptions}}</p></td>
                            <td class="text-gray-500">{{$item->goods_date}}</td>
                            <td>
                                <a href="{{route('goods.edit',['good'=>$item->id])}}" class="focus:outline-none hover:bg-opacity-70 cursor-pointer px-4 py-2 rounded-md bg-yellow-400 text-white">Edit</a>
                                <form action="{{route('goods.destroy',['good'=>$item->id])}}" method="post" class="inline-block">
                                    @method('delete')
                                    @csrf
                                    <x-button type="submit" title="Delete" bg="bg-red-400" color="text-white"/>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
                <x-modal modalClass="add-goods">
                    <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Add Goods</p>
                            <div class="add-modal-close cursor-pointer z-50">
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                </svg>
                            </div>
                        </div>

                        <!--Body-->
                        <div class="flex justify-between">
                            <form id="add_goods_form" class="w-full" action="{{route('goods.store')}}" method="POST">
                                @csrf
                                <label for="goods_name">Name</label>
                                <x-input id="goods_name" required type="text" name="goods_name" class="focus:outline-none border" placholder="Name goods"/>
                                <label for="initial_price">Initial Price</label>
                                <x-input id="initial_price" required type="number" name="initial_price" class="focus:outline-none border" placholder="inital price"/>
                                <label for="goods_date">Date</label>
                                <x-input id="goods_date" required type="date" name="goods_date" class="focus:outline-none border" placholder="goods_date"/>
                                <label for="goods_description">Description</label>
                                <textarea class="w-full shadow-lg bg-gray-300 outline-none p-2 my-3" id="goods_description" name="descriptions"></textarea>
                            </form>
                        </div>

                        <!--Footer-->
                        <div class="flex justify-end pt-2">
                            <button onclick="document.getElementById('add_goods_form').submit()" class="outline-none px-4 bg-transparent py-1 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 mr-2">Add</button>
                            <button class="outline-none modal-close px-4 bg-gray-500 py-1 rounded-lg text-white hover:bg-gray-800">Close</button>
                        </div>
                </x-modal>
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
