@extends('admin.layouts.master')
@section('title','Categories')
@section('content')
    <div  id="content" class="main-content">
        <div class="container" style="max-width: 100% !important;">
            <div class="row w-100 layout-top-spacing">
                <div id="tableLight" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    @include('layouts.partials.errors')
                                    <h4>{{ @$thisCategory->id > 0 ? 'Edit' : "Add" }} Category</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">

                                <form method="post" action="{{ route('admin.categories.save',@$thisCategory->id) }}">
                                    @csrf
                                    <div class="form-group row-cols-2">
                           <p>Category name </p>
                           <input   id="t-text" type="text" name="category_name" placeholder="Some Text..." class="form-control mb-2" required value="{{ old('category_name', @$thisCategory->category_name ) }}">
                           <p>Category slug </p>
                           <input id="t-text" type="text" name="category_slug" placeholder="Some Text..." class="form-control" required value="{{ old('category_slug',@$thisCategory->category_slug ) }}">
                                        <button type="submit"  class="btn btn-dark mt-3" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                                      Save </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
