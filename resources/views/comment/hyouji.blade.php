@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8  text-center">
            <h1 class="m-3 p-3 ">コメント<i class="fas fa-users" ></i></h1>
        </div>
        <div class="col-md-8 mb-3 text-center">
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    @foreach( $comment as $comments)
                    <div class="ml-2 d-flex flex-column">
                        <a class="text-secondary">{{ $comments -> body }}</a>
                    </div>
                    @endforeach
                    @foreach( $profile as $profiles)
                    <div class="d-flex justify-content-end flex-grow-1">
                        <p class="mb-0 text-secondary">{{ $profiles -> image_path }}</p>
                    </div>
                </div>
                <div class="card-body text-right">
                     <p class="mb-0">{{ $profiles -> name }}</p>
                </div>
                @endforeach
                @foreach( $posts as $post )
                <div class="card-footer text-center d-flex bg-white">
                    <i class="fas fa-ellipsis-v  text-right">{{ $post->updated_at->format('Y年m月d日') }}</i>
                </div>
                @endforeach
            </div>
        </div>
        {{ csrf_field() }}
        <a type="button" href="/timeline" class="btn btn-secondary btn-lg btn-block" >タイムラインへ戻る</a>
    </div>
</div>
@endsection