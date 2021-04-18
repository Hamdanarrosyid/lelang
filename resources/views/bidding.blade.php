<x-layouts.bidding title="Bidding">
    @section('content')
        <div class="w-10/12">
            <div >
                <table class="w-full table-fixed">
                    <thead class="text-left">
                        <tr >
                            <th class="p-2">Name</th>
                            <th class="p-2">Date Bid</th>
                            <th class="p-2">Initial Price</th>
                            <th class="p-2">Current Bid</th>
                            <th class="p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($auctions as $item)
                        <tr class="text-gray-800 border">
                            <td class="py-3 px-2">{{$item->goods->goods_name}}</td>
                            <td class="py-3 px-2">{{$item->auction_date}}</td>
                            <td class="py-3 px-2">{{$item->goods->initial_price}}</td>
                            <td class="py-3 px-2">{{$item->final_price}}</td>
                            <td class="py-3 px-2">
{{--                                <x-button title="View Bid" bg="bg-blue-400" color="text-white"/>--}}
                                <x-button title="Place Bid" bg="bg-blue-600" color="text-white place-bid"/>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <x-modal modalClass="place-bid">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Place Bid</p>
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
                            <label for="place_bid">Bid</label>
                            <x-input id="place_bid" required type="number" min="10" name="bid" class="focus:outline-none border" placholder="Name goods"/>
                            <p class="text-sm text-gray-700">bids submitted must not be less than</p>
                        </form>
                    </div>

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button onclick="document.getElementById('add_goods_form').submit()" class="outline-none px-4 bg-transparent py-1 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 mr-2">Add</button>
                        <button class="outline-none add-modal-close px-4 bg-gray-500 py-1 rounded-lg text-white hover:bg-gray-800">Close</button>
                    </div>
                </x-modal>
            </div>
        </div>
    @endsection
</x-layouts.bidding>
