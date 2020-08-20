@extends('layouts.common')
@section('profile', 'プロフィール')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 text-center">
            <h2 class="m-3 p-3 ">プロフィール</h2>
                <form action="{{ action('Admin\ProfileController@add') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">プロフィール</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="profile" rows="30">{{ old('profile') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <a type="button" href="/home"class="btn btn-primary btn-lg btn-block" >保存</a>
                </form>
        </div>
    </div>
</div>
@endsection