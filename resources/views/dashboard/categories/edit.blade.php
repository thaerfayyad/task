@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>category</h1>

            <ol class="breadcrumb">
{{--                <li><a href="{{ route('dashboard.admin') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>--}}
                <li><a href="{{ route('categories.index') }}"> category</a></li>
                <li class="active">edit</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">Edit</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <input type="text" name="description" class="form-control" value="{{ $category->description}}">
                            </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Update</button>
                        </div>

                    </form>
                </div>

            </div>

        </section>

    </div>

@endsection
