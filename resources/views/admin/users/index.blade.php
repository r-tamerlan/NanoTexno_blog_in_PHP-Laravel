@extends('admin.layouts.master')
@section('title','Categories')
@section('content')
    <div id="content" class="main-content">
        <div class="container" style="max-width: 100% !important;">
            <div class="row w-100 layout-top-spacing">
                <div id="tableLight" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    @include('layouts.partials.alert')
                                    <h4>Posts</h4>
                                    {{--                       Seach and Add  -----------------------------------------------}}
                                    <div class="well ">
                                        <div class="text-right ">
                                            <div class="row">
                                                <div class="offset-md-6"></div>
                                                <div class="col-md-4 text-right">
                                                    <form method="post" action="{{ route('admin.posts.index') }}" >
                                                        @csrf
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text"
                                                                           class="form-control form-control-sm "
                                                                           style="height: 37px"
                                                                           name="search"
                                                                           is="search" placeholder="search..."
                                                                           value="{{ old('search' )}}">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button type="submit"  class="btn btn-dark btn-sm">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24"
                                                                                     height="24" viewBox="0 0 24 24"
                                                                                     fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-search">
                                                                                    <circle cx="11" cy="11"
                                                                                            r="8"></circle>
                                                                                    <line x1="21" y1="21" x2="16.65"
                                                                                          y2="16.65"></line>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <a href="{{ route('admin.posts.index') }}" class="btn btn-dark btn-sm">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24"
                                                                                     height="24" viewBox="0 0 24 24"
                                                                                     fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-corner-down-left">
                                                                                    <polyline
                                                                                        points="9 10 4 15 9 20"></polyline>
                                                                                    <path
                                                                                        d="M20 4v7a4 4 0 0 1-4 4H4"></path>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-2 text-right">
                                                    <a href="{{ route('admin.posts.new') }}"
                                                       class=" btn btn-dark btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-plus-circle">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                                        </svg>
                                                        Add</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                       Seach and Add --------------------------------------------------}}
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">


                                <table class="table table-hover table-light mb-4 ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Active</th>
                                        <th>Register date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($usersList as $user)
                                        <tr>
                                            <td class="text-center">{{$user->id}}</td>
                                            <td>{{$user->name }}</td>
                                            <td>{{$user->email}}</td>
                                            @if($user->active==1)
                                            <td><strong style="color: green">Active</strong></td>
                                            @else
                                            <td><strong style="color: red">Deactive</strong></td>
                                            @endif
                                            <td>{{$user->created_at}}</td>
                                            <td>

                                                <a href="{{ route('admin.users.delete',$user->id) }}"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

{{--                                {{ $postsList->links() }}--}}

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
