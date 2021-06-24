<label for="{{$name}}" class="{{$labelClass ?? 'col-sm-2 col-form-label p-0'}}">{{$label ?? ''}}</label>
<div class="{{$selectClass ?? 'col-sm-4 d-inline'}}">
    <select name="{{$name}}" id="{{$name}}" class="custom-select w-25">
        @foreach ($options as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
</div>

