@extends('layouts.admin')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.link.update',$link->id) }}" method="POST">
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
                                   value="{{old('name_'.$lang) ? old('name_'.$lang) : $link->getTranslation('name',$lang)}}" id="name_{{$lang}}" placeholder="Name {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('name_'.$lang) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="form-group ml-5">

            <label for="link" class="col-sm-2 col-form-label">Link</label>

            <div class="col-sm-7">

                <input type="text" name='link' class="form-control {{$errors->first('link') ? "is-invalid" : "" }} " value="{{old('link') ? old('link') : $link->link}}" id="link" placeholder="Link">

                <div class="invalid-feedback">
                    {{ $errors->first('link') }}
                </div>

            </div>

        </div>

        <div class="form-group ml-5">

            <div class="col-sm-3">

                <button type="submit" class="btn btn-primary">Update</button>

            </div>

        </div>

    </div>

  </form>
@endsection
