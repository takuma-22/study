@extends('layouts.common')
@section('create', '問題作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <h2 class="m-3 p-3 ">問題作成</h2>
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
                        <select type="button" class="btn btn-defalt btn-lg btn-block">
                            @foreach(config('style') as $key => $style)
                            <option name="genre"　role="button"　data-toggle="dropdown" value="{{ $key }}">{{ $style['style'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">答え</label>
                    <div class="col-md-10">
                        @if($style =='5肢択一')
                        
                            <input class="form-control form-control-lg"　 type="text" placeholder="1">
                            <input class="form-control form-control-lg" type="text" placeholder="2">
                            <input class="form-control form-control-lg" type="text" placeholder="3">
                            <input class="form-control form-control-lg" type="text" placeholder="4">
                            <input class="form-control form-control-lg" type="text" placeholder="5">
                            
                            @elseif($style =='4肢択一')
                            <input class="form-control form-control-lg" type="text" placeholder="1">
                            <input class="form-control form-control-lg" type="text" placeholder="2">
                            <input class="form-control form-control-lg" type="text" placeholder="3">
                            <input class="form-control form-control-lg" type="text" placeholder="4">
                            
                            @endif
                            
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
@endsection