@extends('layouts.common')
@section('create', '問題作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>問題作成</h2>
                <form action="{{ action('Question\CreateController@add') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="genre" value="{{ old('genre') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">問題本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="text" rows="10">{{ old('text') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">回答形式</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="style" >{{ old('style') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">解説</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="kaisetu" rows="10">{{ old('kaisetu') }}</textarea>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="問題を作成">
                    <input type="submit" class="btn btn-primary" value="キャンセル">
                </form>
            </div>
        </div>
    </div>
@endsection