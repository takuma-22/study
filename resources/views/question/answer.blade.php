@extends('layouts.common')
@section('Answer', '答え')

@section('content')
    <div class="container">
        <div class="row">
            @foreach( $question as $questions)
            <div class="col-md-10 text-center">
                <h2 class="m-3 p-3 ">問題回答</h2>
                <label class="col-sm-2 control-lavel">問題本文</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="text" rows="10">{{ $questions->text }}</textarea>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-8">答え</label>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ans1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">{{ $questions -> ans1 }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ans2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">{{ $questions -> ans2 }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ans3" value="option3">
                        <label class="form-check-label" for="inlineRadio2">{{ $questions -> ans3 }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ans4" value="option4">
                        <label class="form-check-label" for="inlineRadio4">{{ $questions -> ans4 }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ans55" value="option5">
                        <label class="form-check-label" for="inlineRadio5">{{ $questions -> ans5 }}</label>
                    </div>

                </div>
                @endforeach
                {{ csrf_field() }}
                <a href="/seigohyouji" type="button" class="btn btn-primary btn-lg btn-block">回答</a>
            </div>
        </div>
       
    </div>
@endsection