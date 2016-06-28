@extends('master')
@section('content')
    <h3> List of Industries</h3>
    <a href="{{url('industry/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Location</th>
            <th>Address</th>
            <th>LA Code</th>
            <th>Sector</th>
            <th>Category</th>
            <th>File No</th>
            <th>OPTIONS</th>
            </tr>
        </thead>
        
        <tr>
            <th>26230</th>
            <th>Karukupane, Bangadeniya, Chilaw.</th>
            <th>Other</th>
            <th></th>
            <th>Karukupane, Bangadeniya,Chilaw,Sri Lanka, , Chilaw</th>
            <th>PAA</th>
            <th>BM</th>
            <th>A66</th>
            <th>NW/PX/PAA/BM/A66//</th>
            <td>
                <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('industry/1')}}">Show</a>
                <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
                <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
            </td>
        </tr>
        
        <tr>
            <th>26255</th>
            <th>Ananthaya Resorts, Karukupane, Bangadeniya, Chilaw.</th>
            <th>Other</th>
            <th></th>
            <th>Ananthaya Resorts, Karupane, Bangadeniya,Chilaw., , Chilaw</th>
            <th>PAA</th>
            <th>BM</th>
            <th>A66</th>
            <th>NW/PX/PAA/BM/A66//</th>
            <td>
                <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('industry/1')}}">Show</a>
                <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
            </td>
        </tr>
        
        <tr>
            <th>26366</th>
            <th>Hotal of tourism</th>
            <th>Other</th>
            <th></th>
            <th>Karukupane, Bangadeniya,Chilaw,Sri Lanka, , Chilaw</th>
            <th>PAA</th>
            <th>BM</th>
            <th>A66</th>
            <th>NW/PX/PAA/BM/A66//</th>
            <td>
                <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('industry/1')}}">Show</a>
                <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
            </td>
        </tr>
        
        <tr>
            <th>26367</th>
            <th>Ananthaya Resorts, Karukupane, Bangadeniya, Chilaw.</th>
            <th>Other</th>
            <th></th>
            <th>Karukupane, Bangadeniya,Chilaw,Sri Lanka, , Bangadeniya</th>
            <th>PAA</th>
            <th>BM</th>
            <th>A66</th>
            <th>NW/PX/PAA/BM/A66//</th>
            <td>
                <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('industry/1')}}">Show</a>
                <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
            </td>
        </tr>
        
        
    </table>
@endsection
