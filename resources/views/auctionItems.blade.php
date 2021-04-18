<x-layouts.dashboard title="Auctions" headerTitle="Auctions" auctions="active">
    @section('content')
        <div>
            <div class="border-b-2 h-12 items-center justify-between flex px-4">
                <div>
                    <p>All Auctions</p>
                </div>
                <x-button title="Add Auction" bg="bg-gray-800 add-auction" color="text-white"/>
            </div>
            <div class="pt-2 px-4">

                    <table class="table-fixed w-full">
                        <thead>
                        <tr class="text-left text-gray-500">
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Final Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($auctions as $item)
                        <tr class="text-gray-600">
                            <td><p class="block text-blue-600">{{$item->goods->goods_name}}</p><p class="text-xs text-gray-500">{{$item->descriptions}}</p></td>
                            <td>{{$item->auction_date}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->final_price??'_'}}</td>
                            <td>
                                <x-anchor href="{{route('auction_items.show',['auction_item'=>$item->id])}}" title="History" bg="bg-gray-300" color="text-white"/>
                                <x-anchor href="{{route('auction_items.edit',['auction_item'=>$item->id])}}" title="Edit" bg="bg-yellow-300" color="text-white"/>
                                <x-button title="Delete" bg="bg-red-400" color="text-white"/>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <x-modal modalClass="add-auction">
{{--                    @section('modal-content')--}}
                        <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Add Auction</p>
                                <div class="add-modal-close cursor-pointer z-50">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!--Body-->
                            <div class="flex justify-between">
                                <form id="add_goods_form" class="w-full" action="{{route('auction_items.store')}}" method="POST">
                                    @csrf
                                    <label for="goods">Goods</label>
                                    <x-select name="goods_id">
                                        @foreach($goods as $goodsItem)
                                        <option value="{{$goodsItem->id}}">{{$goodsItem->goods_name}}</option>
                                        @endforeach
                                    </x-select>
                                    <label for="status">Status</label>
                                    <x-select name="status">
                                            <option value="opened">Open</option>
                                            <option value="closed">Close</option>
                                    </x-select>
                                    <label for="auction-date">Date</label>
                                    <x-input id="auction-date" required type="date" name="auction_date" class="focus:outline-none border"/>
                                </form>
                            </div>

                            <!--Footer-->
                            <div class="flex justify-end pt-2">
                                <button onclick="document.getElementById('add_goods_form').submit()" class="outline-none px-4 bg-transparent py-1 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 mr-2">Add</button>
                                <button class="outline-none modal-close px-4 bg-gray-500 py-1 rounded-lg text-white hover:bg-gray-800">Close</button>
                            </div>
{{--                        @endsection--}}
                    </x-modal>
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
