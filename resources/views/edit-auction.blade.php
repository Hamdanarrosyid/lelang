<x-layouts.dashboard title="Goods" headerTitle="Goods" goods="active">
    @section('content')
        <div>
            <div class=" h-12 items-center justify-between flex px-4">
                <a href="{{route('auction_items.index')}}" class="text-white focus:outline-none hover:bg-opacity-70 bg-gray-800 cursor-pointer px-4 py-1 rounded-md">< Back</a>
                <div></div>
            </div>
            <div class="pt-2 px-4 flex justify-center">
                <form id="add_goods_form" class="w-full" action="{{route('auction_items.update',['auction_item'=>$auction_item->id])}}" method="POST">
                    @csrf
                    @method('patch')
                    <label for="goods">Goods</label>
                    <x-select name="goods_id">
                        @foreach($goods as $goodsItem)
                            <option {{$auction_item->goods_id == $goodsItem->id ? 'selected' :null}} value="{{$goodsItem->id}}">{{$goodsItem->goods_name}}</option>
                        @endforeach
                    </x-select>
                    <label for="status">Status</label>
                    <x-select name="status">
                        <option {{$auction_item->status == 'opened'? 'selected':null}} value="opened">Open</option>
                        <option {{$auction_item->status == 'closed'? 'selected':null}} value="closed">Close</option>
                    </x-select>
                    <label for="auction-date">Date</label>
                    <x-input id="auction-date" required type="date" name="auction_date" class="focus:outline-none border" value="{{$auction_item->auction_date }}"/>
                    <x-button title="Submit" type="submit" bg="bg-green-500" color="text-white"/>
                </form>
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
