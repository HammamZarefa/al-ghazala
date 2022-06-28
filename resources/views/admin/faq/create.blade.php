@extends('layouts.admin')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.faq.store') }}" method="POST">
    @csrf

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach(Config::get('app.languages') as $lang)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{$lang == 'en' ? "active" : ""}}" id="{{$lang}}-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#{{$lang}}" type="button" role="tab" aria-controls="home"
                            aria-selected="{{$lang == 'en' ? "true" : "false"}}">{{$lang}}</button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach(Config::get('app.languages') as $lang)
                <div class="tab-pane fade {{$lang == 'en' ? "show  active" : ""}}" id="{{$lang}}" role="tabpanel"
                     aria-labelledby="{{$lang}}-tab">
                    <div class="form-group ml-5">
                        <label for="question_{{$lang}}" class="col-sm-2 col-form-label">Question {{$lang}}</label>
                        <div class="col-sm-9">
                            <input type="text" name='question_{{$lang}}'
                                   class="form-control {{$errors->first('question_'.$lang) ? "is-invalid" : "" }} "
                                   value="{{old('question_'.$lang)}}" id="question_{{$lang}}" placeholder="Question {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('question_'.$lang) }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group ml-5">
                        <label for="answer_{{$lang}}" class="col-sm-2 col-form-label">Answer {{$lang}}</label>
                        <div class="col-sm-7">
                            <textarea name='answer_{{$lang}}' class="form-control {{$errors->first('answer_'.$lang) ? "is-invalid" : "" }} " id="answer_{{$lang}}" placeholder="Answer {{$lang}}">{{old('answer_'.$lang)}}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('answer_'.$lang) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="form-group ml-5">

            <div class="col-sm-3">

                <button type="submit" class="btn btn-primary">Create</button>

            </div>

        </div>

    </div>

  </form>
@endsection
