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
                                    <h4>Posts Info</h4>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">


                                <table class="table table-hover table-light mb-4 ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#ID</th>
                                        <th>View</th>
                                        <th>Like</th>
                                        <th>Comment</th>
                                        <th>Updated</th>
                                        <th class="text-center" >Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($postsInfo as $info)
                                        <tr>
                                            <td class="text-center">{{$info->id}}</td>
                                            <td>{{$info->view}}</td>
                                            <td>{{$info->like}}</td>
                                            <td>{{$info->comment}}</td>
                                            <td>{{$info->updated_at}}</td>
                                            <td class="text-center">
                                                <a style="width: 80px" href="{{ route('admin.info.edit',$info->id) }}"
                                                   class="btn btn-dark btn-sm">Edit</a>
                                                <a href="{{ route('admin.info.delete',$info->id) }}"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>



                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

