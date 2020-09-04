@extends('layouts.common')
@section('create', '問題作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <h2 class="m-3 p-3 ">問題作成</h2>
                <form action="{{ action('Question\CreateController@create') }}" method="post" enctype="multipart/form-data">
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
                        <select type="button" class="btn btn-defalt btn-lg btn-block">
                        @foreach(config('genre') as $key => $genre)
                        <option name="genre"　role="button"　data-toggle="dropdown" value="{{ $key }}">{{ $genre['genre'] }}</option>
                        @endforeach
                        </select>
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
                        <select name= "style" type="button" data-toggle="dropdown" role="button" class="btn btn-defalt btn-lg btn-block" onchange="changeSelect()">
                            <option id="quest5" value='5'>5肢択一</option>
                            <option id="quest4" value='4'>4肢択一</option>
                        </select> 
                        
                        <input id="ans1"class="form-control form-control-lg"　 type="text" placeholder="1">
                        <input id="ans2"class="form-control form-control-lg" type="text" placeholder="2">
                        <input id="ans3"class="form-control form-control-lg" type="text" placeholder="3">
                        <input id="ans4"class="form-control form-control-lg" type="text" placeholder="4">
                        <input id="ans5" class="form-control form-control-lg" type="text" placeholder="5">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">答え</label>
                    <div class="col-md-10">
                        <input class="form-control form-control-lg" name="colans" type="text" placeholder="答え">
                    </div>
                </div>    
                    <div class="form-group row">
                        <label class="col-md-2">解説</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="kaisetu" rows="10">{{ old('kaisetu') }}</textarea>
                        </div>
                    </div>    
                {{ csrf_field() }}
                    <a type="button" href="/home" class="btn btn-primary btn-lg btn-block" >問題を作成</a>
                    <a type="button" href="/timeline" class="btn btn-secondary btn-lg btn-block" >キャンセル</a>
            </div>
        </div>
    </div>
    <script>
    document.getElementById("ans5").style.display ="block";
        function changeSelect(){
            const ans5 = document.getElementById("ans5");
            if(ans5.style.display == "none"){
                ans5.style.display = "block";
            }
            else{
                ans5.style.display = "none";
            }
            
        }
    </script>
@endsection