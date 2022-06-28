@extends('layouts.admin')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.page.update', $page->id) }}" method="POST">
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
                        <label for="name" class="col-sm-2 col-form-label">Title {{$lang}}</label>
                        <div class="col-sm-9">
                            <input type="text" name='title_{{$lang}}'
                                   class="form-control {{$errors->first('title_'.$lang) ? "is-invalid" : "" }} "
                                   value="{{old('title_'.$lang) ? old('title_'.$lang) : $page->getTranslation('title',$lang)}}" id="title_{{$lang}}" placeholder="Title {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('title_'.$lang) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="text" class="col-sm-2 col-form-label">Text {{$lang}}</label>
                        <div class="col-sm-9">
                            <textarea name='text_{{$lang}}' class="form-control {{$errors->first('text_'.$lang) ? "is-invalid" : "" }} "  id="summernote" cols="30" rows="10">{{old('text_'.$lang) ? old('text_'.$lang) : $page->getTranslation('text',$lang)}}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('text_'.$lang) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="form-group ml-2">

            <div class="col-sm-3">

                <button type="submit" class="btn btn-primary">Update</button>

            </div>

        </div>

    </div>

  </form>
@endsection
