@if(count($localauthority) > 0 )
    @foreach($localauthority as $local)
        <option value="{{$local->lid}}">{{$local->laname}}</option>
    @endforeach
@else
    <option value=""></option>
@endif
