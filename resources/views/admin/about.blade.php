@extends('layouts.admin')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('about.update',1) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach($languges as $lang)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{$lang == 'en' ? "active" : ""}}" id="{{$lang}}-tab" data-bs-toggle="tab"
                            data-bs-target="#{{$lang}}" type="button" role="tab" aria-controls="home"
                            aria-selected="{{$lang == 'en' ? "true" : "false"}}">{{$lang}}</button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach($languges as $lang)
                <div class="tab-pane fade {{$lang == 'en' ? "show  active" : ""}}" id="{{$lang}}" role="tabpanel"
                     aria-labelledby="{{$lang}}-tab">
                    <div class="form-group ml-5">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-7">
                            <input type="text" name='title_{{$lang}}'
                                   class="form-control {{$errors->first('title') ? "is-invalid" : "" }} "
                                   value="{{old('title_'.$lang) ? old($about->getTranslation('title',$lang)) : $about->getTranslation('title',$lang)}}"
                                   id="link"
                                   placeholder="Title About {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="desc" class="col-sm-2 col-form-label">Desc</label>
                        <div class="col-sm-7">
                            <textarea name="desc_{{$lang}}" cols="30" rows="10"
                                      class="form-control {{$errors->first('desc'.$lang) ? "is-invalid" : "" }} "
                                      id="summernote{{$lang}}">{{old($about->getTranslation('desc',$lang)) ? old($about->getTranslation('desc',$lang)) : $about->getTranslation('desc',$lang)}}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('desc') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="title" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-7">
                            <input type="text" name='subject_{{$lang}}'
                                   class="form-control {{$errors->first('subject') ? "is-invalid" : "" }} "
                                   value="{{old('title_'.$lang) ? old($about->getTranslation('subject',$lang)) : $about->getTranslation('subject',$lang)}}"
                                   id="link"
                                   placeholder="subject {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('subject') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="form-group ml-5">
            <label for="subject" class="col-sm-2 col-form-label">Slogan</label>
            <div class="col-sm-7">
                <input type="text" name='subject'
                       class="form-control {{$errors->first('subject') ? "is-invalid" : "" }} "
                       value="{{old('subject') ? old('subject') : $about->subject}}" id="link"
                       placeholder="Slogan">
                <div class="invalid-feedback">
                    {{ $errors->first('subject') }}
                </div>
            </div>
        </div>
        <div class="form-group ml-5">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
