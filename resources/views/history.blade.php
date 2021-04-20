<x-layouts.dashboard title="Auction Histories" headerTitle="Auction Histories" auctions="active">
    @section('content')
        <div>
            <div class=" h-12 items-center justify-between flex px-4">
                <a href="{{route('auction_items.index')}}" class="text-white focus:outline-none hover:bg-opacity-70 bg-gray-800 cursor-pointer px-4 py-1 rounded-md">< Back</a>
                <div></div>
            </div>
            <div class="pt-2 px-4">
                <table class="w-full table-fixed">
                    <thead class="text-left">
                    <tr >
                        <th class="p-2">Name</th>
                        <th class="p-2">Date Bid</th>
                        <th class="p-2">Bid Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($auction->auctionHistories as $item)
                        <tr class="text-gray-800 border">
                            <td class="py-3 px-2">{{$item->user->name}}</td>
                            <td class="py-3 px-2">{{$item->created_at->format('Y-m-d')}}</td>
                            <td class="py-3 px-2">{{number_format($item->user_bid)}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
