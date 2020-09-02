@extends('layouts.master')
@section('title','Sign Up')
@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-md-7 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Sign Up</div>
                    <div class="panel-body">
                     @include('layouts.partials.errors')
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('users.registration') }}">
                        @csrf
                            <div class="form-group {{-- {{ $errors->has('name') ? 'has-error' : '' }} --}}">
                                <label for="name" class="col-md-4 control-label">Name Surname</label>
                                <div class="col-md-6">
                                    <input  id="name"  type="text" class="form-control" name="name" value="{{old('name')}}" required autofocus>
                                   {{-- @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Password (again)</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
