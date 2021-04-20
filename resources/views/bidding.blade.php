<x-layouts.bidding title="Bidding">
    @section('content')
        <div class="w-10/12">
            <div>
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
                        <tr class="text-gray-800 border {{$item->id}}">
                            <td class="py-3 px-2">{{$item->goods->goods_name}}</td>
                            <td class="py-3 px-2">{{$item->auction_date}}</td>
                            <td class="py-3 px-2">{{number_format($item->goods->initial_price)}}</td>
                            <td class="py-3 px-2">{{number_format($item->auctionHistories->last()->user_bid??0)}}</td>
                            <td class="py-3 px-2">
{{--                                <x-button title="View Bid" bg="bg-blue-400" color="text-white"/>--}}
                                <x-button title="Place Bid" bg="bg-blue-600" color="text-white place-bid-{{$item->id}}"/>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @foreach($auctions as $item)
                <x-modal-input modalClass="place-bid-{{$item->id}}" id="{{$item->id}}">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3 {{$item->id}}">
                        <p class="text-2xl font-bold">Place Bid</p>
                        <div class="modal-close-{{$item->id}} cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                    </div>

                    <!--Body-->
                    <div class="flex justify-between">
                        <form id="modal-input-{{$item->id}}" class="w-full" action="{{route('bidding.store',['id'=>$item->id])}}" method="POST">
                            @method('patch')
                            @csrf
                            <label for="place_bid-{{$item->id}}">Bid</label>
                            <x-input id="place_bid-{{$item->id}}" required type="number" min="{{$item->auctionHistories->last()->user_bid ?? $item->goods->initial_price}}" name="bid" class="focus:outline-none border" placholder="example 10000" value="{{$item->auctionHistories->last()->user_bid??$item->goods->initial_price}}"/>
                            <p class="text-sm text-gray-700">bids submitted must not be less than {{number_format($item->auctionHistories->last()->user_bid??$item->goods->initial_price)}}</p>
                        </form>
                    </div>

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button onclick="document.getElementById('modal-input-{{$item->id}}').submit()" class="outline-none px-4 bg-transparent py-1 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 mr-2">Add</button>
                    </div>
                </x-modal-input>
                @endforeach
            </div>
        </div>
    @endsection
</x-layouts.bidding>
