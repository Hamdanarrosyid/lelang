<x-layouts.dashboard title="Auctions" headerTitle="Auctions" auctions="active">
    @section('content')
        <div>
            <div class="bg-blue-300 h-12 items-center justify-between flex px-4">
                <div></div>
                <x-button title="Create" bg="bg-gray-800" color="text-white"/>
            </div>
            <div class="pt-2 px-4">
                @foreach($auctions as $item)
                    <table class="table-fixed w-full">
                        <thead>
                        <tr class="text-left text-gray-500">
                            <th>Name</th>
                            <th>Auctions Date</th>
                            <th>Auctions Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-gray-600">
                            <td><p class="block text-blue-600">{{$item->goods->goods_name}}</p><p class="text-xs text-gray-500">{{$item->descriptions}}</p></td>
                            <td>{{$item->auction_date}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <x-button title="Edit" bg="bg-yellow-300" color="text-white"/>
                                <x-button title="Delete" bg="bg-red-400" color="text-white"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
