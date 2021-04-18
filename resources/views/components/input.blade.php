<div>
    <input id="{{$id ?? ''}}" type="{{$type??'text'}}" placeholder="{{$placeholder??''}}" min="{{$min??null}}"
           class="w-full shadow-lg bg-gray-300 outline-none p-2 my-3 @error($name) border border-red-500 @enderror" required="{{$required}}" name="{{$name}}" value="{{$value??''}}">
    @error($name)
    <div>
        <strong class="text-xs text-red-600 font-normal">{{$message}}</strong>
    </div>
    @enderror
</div>
