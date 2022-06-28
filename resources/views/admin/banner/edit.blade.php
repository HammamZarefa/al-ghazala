@extends('layouts.admin')

@section('styles')
    <style>
        .picture-container {
            position: relative;
            cursor: pointer;
            text-align: center;
        }

        .picture {
            width: 800px;
            height: 400px;
            background-color: #999999;
            border: 4px solid #CCCCCC;
            color: #FFFFFF;
            /* border-radius: 50%; */
            margin: 5px auto;
            overflow: hidden;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
        }

        .picture:hover {
            border-color: #2ca8ff;
        }

        .picture input[type="file"] {
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .picture-src {
            width: 100%;
            height: 100%;
        }
    </style>

@endsection

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="picture-container">
                <div class="picture">
                    <img src="{{ asset('storage/'.$banner->cover) }}" class="picture-src" id="wizardPicturePreview"
                         height="200px" width="400px" title=""/>
                    <input type="file" id="wizard-picture" name="cover">
                </div>
                <h6>Upload Cover</h6>
            </div>
        </div>
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
                        <label for="title" class="col-sm-2 col-form-label">Title {{$lang}}</label>
                        <div class="col-sm-7">
                            <input type="text" name='title_{{$lang}}'
                                   class="form-control {{$errors->first('title') ? "is-invalid" : "" }} "
                                   value="{{old('title') ? old($banner->getTranslation('title',$lang)) : $banner->getTranslation('title',$lang)}}"
                                   id="title{{$lang}}" placeholder="Title">
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="desc" class="col-sm-2 col-form-label">Desc {{$lang}}</label>
                        <div class="col-sm-7">
                <textarea name="desc_{{$lang}}" id="desc_{{$lang}}" cols="30" rows="10"
                          class="form-control {{$errors->first('desc') ? "is-invalid" : "" }} ">{{old('desc') ? old($banner->getTranslation('desc',$lang)) : $banner->getTranslation('desc',$lang)}}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('desc') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="form-group ml-5">
            <label for="link" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-7">
                <input type="text" name='link' class="form-control {{$errors->first('link') ? "is-invalid" : "" }} "
                       value="{{old('link') ? old('link') : $banner->link}}" id="link" placeholder="Link">
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
    </form>
@endsection

@push('scripts')
    <script>
        // Prepare the preview for profile picture
        $("#wizard-picture").change(function () {
            readURL(this);
        });

        //Function to show image before upload
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endpush
