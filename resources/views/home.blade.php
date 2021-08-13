@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>ชื่อ : </strong>{{ Auth :: user()->name}}</p>
                    <p><strong>อีเมล : </strong>{{ Auth :: user()->email}}</p>
                    <p><strong>โทรศัพท์ : </strong>{{ Auth :: user()->phone}}</p>
                    <p><strong>ที่อยู่ : </strong>{{ Auth :: user()->address}}</p>
                    <a href=""  class="btn btn-primary">Product Management</a>
                    <a href="" class="btn btn-success">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
