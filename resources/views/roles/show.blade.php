@extends('layouts.grain')

@section('title', 'Dashboard')

@section('content')

@include('components.notification')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Role</h2>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            <div>
            @if(!empty($rolePermissions))
           
                 @foreach($rolePermissions as $v)
                <ul>
                    <label class="label label-success">{{ $v->name }},</label>
                </ul>
                    
                @endforeach
            
            @endif
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary " href="{{ route('roles.index') }}"> Back</a>
        </div>
</div>
@endsection
