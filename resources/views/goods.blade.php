<x-layouts.dashboard title="Goods" headerTitle="Goods" goods="active">
    @section('content')
        <div>
            <div class="bg-blue-300 h-12 items-center justify-between flex px-4">
                <div></div>
                <x-button title="Create" bg="bg-gray-800" color="text-white"/>
            </div>
            <div class="pt-2 px-4">
                @foreach($goods as $item)
                    <table class="table-fixed w-full">
                        <tbody>
                        <tr>
                            <td><p class="block text-blue-600">{{$item->goods_name}}</p><p class="text-xs text-gray-500">{{$item->descriptions}}</p></td>
                            <td class="text-gray-500">{{$item->goods_date}}</td>
                            <td>
                                <x-button title="Edit" bg="bg-yellow-300" color="text-white"/>
                                <x-button title="Delete" bg="bg-red-400" color="text-white"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
{{--                <ul class="pt-2 px-4 flex justify-between items-center">--}}
{{--                    <li><p class="block text-blue-600">{{$item->goods_name}}</p><p class="text-xs text-gray-500">{{$item->descriptions}}</p></li>--}}
{{--                    <li class="text-gray-500">{{$item->goods_date}}</li>--}}
{{--                    <li>--}}
{{--                        <x-button title="Edit" bg="bg-yellow-300" color="text-white"/>--}}
{{--                        <x-button title="Delete" bg="bg-red-400" color="text-white"/>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                @endforeach
            </div>
        </div>
    @endsection
</x-layouts.dashboard>
