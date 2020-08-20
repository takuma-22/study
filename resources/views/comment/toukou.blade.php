@extends('layouts.common')
@section('comment', 'コメント')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="m-3 p-3 ">コメント</h1>
            <form action="{{ action('Comment\ToukouController@add') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                        <label class="col-md-12"></label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="comment" rows="40">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                   
                    {{ csrf_field() }}
                    <a type="button" href="/comment/hyouji"class="btn btn-primary btn-lg btn-block" >コメントを送信</a>
                    <a type="button"href="/seigohyouji" class="btn btn-secondary btn-lg btn-block" >キャンセル</a>
                </form>
            </div>
        </div>
    </div>
@endsection