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
                                <x-button title="Place Bid" bg="bg-blue-600" color="text-white modal-open"/>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <x-modal/>
            </div>
        </div>
    @endsection
</x-layouts.bidding>
