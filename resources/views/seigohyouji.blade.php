@extends('layouts.common')
@section('seigohyouji', '正誤表示')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="m-3 p-3 ">正解or間違い</h1>
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
                    <textarea class="form-control" name="comment" rows="10">{{ old('kaisetu') }}</textarea>
                    
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👍</a>
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👎</a>
                    <a type="button" href="/comment/toukou" class="col-sm-4 col-md-3 btn btn-outline-primary ">コメント</a>
                    <a type="button" class="col-sm-4 col-md-3 btn btn-outline-primary" >答えの誤りを指摘</a>
                    
                </div>
            </div>
            {{ csrf_field() }}
            <a type="submit" class="nav-link btn btn-primary btn-lg btn-block" id="timeline"href="/timeline">タイムラインへ戻る</a>
        </div>
    </div>
</div>
@endsection