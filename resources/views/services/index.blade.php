@extends('layouts.grain')

@section('title', 'Dashboard')

@section('content')

@include('components.notification')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>services</h2>
        </div>
        
    </div>
</div>
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($services as $service)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->detail }}</td>
            <td>
                <form action="{{ route('services.destroy',$service -> id) }}" method="POST">
                    
                    @can('service-edit')
                        <a class="btn btn-primary"
                            href="{{ route('services.edit',$service ->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('service-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $services->links() !!}
@endsection
