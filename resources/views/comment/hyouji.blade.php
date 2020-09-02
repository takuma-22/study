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
                    <div class="ml-2 d-flex flex-column">
                        <a class="text-secondary">コメント</a>
                    </div>
                    <div class="d-flex justify-content-end flex-grow-1">
                        <p class="mb-0 text-secondary">画像</p>
                    </div>
                </div>
                <div class="card-body text-right">
                     <p class="mb-0">ユーザー名</p>
                </div>
                <div class="card-footer text-center d-flex bg-white">
                    <i class="fas fa-ellipsis-v  text-right">時間</i>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
        <a type="button" href="/timeline" class="btn btn-secondary btn-lg btn-block" >タイムラインへ戻る</a>
    </div>
</div>
@endsection