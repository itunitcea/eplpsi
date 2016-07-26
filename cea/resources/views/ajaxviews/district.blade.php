@if(count($district) > 0 )
    @foreach($district as $dist)
        <option value="{{$dist->dicode}}">{{$dist->diname}}</option>
    @endforeach
@else
    <option value=""></option>
@endif
