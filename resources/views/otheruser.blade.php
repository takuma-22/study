@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mb-3 text-center">
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    <div class="card-body text-left">
                        <h3 class="mb-0">ユーザー名</h3>
                    </div>    
                    <div class="ml-2 d-flex flex-column">
                        <div class="text-secondary">プロフィール</div>
                    </div>
                    <div class="d-flex justify-content-end flex-grow-1">
                        <p class="mb-0 text-secondary">画像</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8  text-center">
             <h3 class="m-3 p-3 ">○さんの投稿<i class="fas fa-users" ></i> </h3>
        </div>
        <div class="col-md-8 mb-3 text-center">
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    <div class="ml-2 d-flex flex-column">
                        <a class="text-secondary">本文</a>
                    </div>
                    <div class="d-flex justify-content-end flex-grow-1">
                        <p class="mb-0 text-secondary">画像</p>
                    </div>
                </div>
                <div class="card-body text-right">
                     <p class="mb-0">ユーザー名</p>
                </div>
                <div class="card-footer text-center mr-3-3 d-flex bg-white"id="Navber">
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👍</a>
                    <a type="button" class="col-sm-3 col-md-2 btn btn-outline-primary">👎</a>
                    <a type="button" href="/question/answer" class="col-sm-4 col-md-3 btn btn-outline-primary" >回答する</a>
                    <a type="button" href="/comment/hyouji" class="col-sm-4 col-md-3 btn btn-outline-primary ">コメントをみる</a>
                    <a class="col-sm-4 col-md-3 text-right d-flex align-items-center">
                        <i class="fas fa-ellipsis-v  text-right">時間</i>
                    </div>
                </div>
            </div>
        </div>
    s</div>
    <div class="my-4 d-flex justify-content-center">
    </div>
</div>
@endsection
