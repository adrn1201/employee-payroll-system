@props(['name', 'text'])

<div class="form-group">
    <label for="{{$name}}">{{$text}}</label>
    <input class="form-control" id="{{$name}}" name="{{$name}}" {{ $attributes(['value' =>old($name)])}}>
    <x-forms.error name="{{ $name }}" />
</div>

