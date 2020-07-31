@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3 ">
            <a href="{{ url('users') }}">タイムライン<i class="fas fa-users" class="fa-fw"></i> </a>
        </div>
                <div class="col-md-8 mb-3">
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            <div class="ml-2 d-flex flex-column">
                                <p class="mb-0"></p>
                                <a class="text-secondary"></a>
                            </div>
                            <div class="d-flex justify-content-end flex-grow-1">
                                <p class="mb-0 text-secondary"></p>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                        <div class="card-footer py-1 d-flex justify-content-end bg-white">
 
                                <div class="dropdown mr-3 d-flex align-items-center">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-fw"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <form method="POST"  class="mb-0">
                                            @csrf
                                            @method('DELETE')

                                            <a >編集</a>
                                            <button type="submit" class="dropdown-item del-btn">削除</button>
                                        </form>
                                    </div>
                                </div>
                           
                            <div class="mr-3 d-flex align-items-center">
                                <a></i></a>
                                <p class="mb-0 text-secondary"></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="" class="btn p-0 border-0 text-primary"><i class="far fa-heart fa-fw"></i></button>
                                <p class="mb-0 text-secondary"></p>
                            </div>
                        </div>
                    </div>
                </div>
          
    </div>
    <div class="my-4 d-flex justify-content-center">
    </div>
</div>
@endsection