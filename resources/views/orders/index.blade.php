@extends('layouts.grain')

@section('title', 'Dashboard')

@section('content')

@include('components.notification')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>orders</h2>
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
    @foreach($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->detail }}</td>
            <td>
                <form action="{{ route('orders.destroy',$order -> id) }}" method="POST">
                    
                    @can('order-edit')
                        <a class="btn btn-primary"
                            href="{{ route('orders.edit',$order ->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('order-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $orders->links() !!}
@endsection
