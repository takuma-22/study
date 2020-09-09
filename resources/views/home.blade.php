@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8  text-center">
            <h1 class="m-3 p-3 ">ホーム<i class="fas fa-users" ></i> </h1>
             <h3 class="m-3 p-3 ">自分の投稿<i class="fas fa-users" ></i> </h3>
        </div>
        <div class="col-md-8 mb-3 text-center">
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    @foreach( $question as $questions)
                    <div class="ml-2 d-flex flex-column">
                        <a class="text-secondary">{{ $questions->text }}</a>
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
                <div class="card-footer text-center mr-3-3 d-flex bg-white"id="Navber">
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👍</a>
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👎</a>
                    <a type="button" href="/question/edit" class="col-sm-4 col-md-3 btn btn-outline-primary" >問題を編集</a>
                    <a type="button" href="/comment/hyouji" class="col-sm-4 col-md-3 btn btn-outline-primary ">コメントをみる</a>
                    <a class="col-sm-4 col-md-3 text-right d-flex align-items-center">
                        @foreach($posts as $post)
                        <i class="fas fa-ellipsis-v  text-right">{{ $post->updated_at->format('Y年m月d日') }}</i>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-4 d-flex justify-content-center">
    </div>
</div>
@endsection
