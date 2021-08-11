@props(['name', 'text'])

<div class="form-group">
    <label for="{{$name}}">{{$text}}</label>
    <input class="form-control" id="{{$name}}" name="{{$name}}" {{ $attributes(['value' =>old($name)])}}>
    <x-forms.error name="{{ $name }}" />
</div>
{{--<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>--}}
