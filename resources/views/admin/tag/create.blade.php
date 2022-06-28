@extends('layouts.admin')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.tag.store') }}" method="POST">
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
                        <label for="name" class="col-sm-2 col-form-label">Name {{$lang}}</label>
                        <div class="col-sm-9">
                            <input type="text" name='name_{{$lang}}'
                                   class="form-control {{$errors->first('name_'.$lang) ? "is-invalid" : "" }} "
                                   value="{{old('name_'.$lang)}}" id="name_{{$lang}}" placeholder="Name {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('name_'.$lang) }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group ml-5">
                        <label for="keyword" class="col-sm-2 col-form-label">Keyword {{$lang}}</label>
                        <div class="col-sm-7">
                            <input type="text" name='keyword_{{$lang}}' class="form-control {{$errors->first('keyword_'.$lang) ? "is-invalid" : "" }} " value="{{old('keyword_'.$lang)}}" id="keyword_{{$lang}}" placeholder="Keyword {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('keyword_'.$lang) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="meta_desc" class="col-sm-2 col-form-label">Meta Desc {{$lang}}</label>
                        <div class="col-sm-7">
                            <input type="text" name='meta_desc_{{$lang}}' class="form-control {{$errors->first('meta_desc_'.$lang) ? "is-invalid" : "" }} " value="{{old('meta_desc_'.$lang)}}" id="meta_desc_{{$lang}}" placeholder="Meta Description {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('meta_desc_'.$lang) }}
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
