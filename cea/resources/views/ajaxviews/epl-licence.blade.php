@if(count($eplLicence) > 0 )
    @foreach($eplLicence as $epl)
        <option value="{{$epl->applicationID}}">{{$epl->ApplicantName}}</option>
    @endforeach
@else
    <option value="">No Epl licence under this Industry</option>
@endif
