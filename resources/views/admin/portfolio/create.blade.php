@extends('layouts.admin')

@section('styles')
@section('styles')
    <style>
        .picture-container {
            position: relative;
            cursor: pointer;
            text-align: center;
        }

        .picture {
            /* width: 800px; */
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

        .image {
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection
@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">

            {{-- image --}}
            <div class="image">
                {{-- image desktop --}}
                <div class="form-group col-md-12">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="" class="picture-src" id="wizardPicturePreview" height="200px" width="400px"
                                 title=""/>
                            <input type="file" id="wizard-picture" name="cover"
                                   class="form-control {{$errors->first('cover') ? "is-invalid" : "" }} ">
                            <div class="invalid-feedback">
                                {{ $errors->first('cover') }}
                            </div>
                        </div>
                        <h6>Pilih Cover</h6>
                    </div>

                </div>


            </div>
            <input type="file" class="form-control" name="images[]" multiple />
            <div class="form-group ml-5">

                <label for="category" class="col-sm-2 col-form-label">Category</label>

                <div class="col-sm-9">

                    <select name='category' class="form-control {{$errors->first('category') ? "is-invalid" : "" }} "
                            id="category">
                        <option disabled selected>Choose One!</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>

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
                            <label for="name" class="col-sm-2 col-form-label">Name {{$lang}}</label>
                            <div class="col-sm-9">
                                <input type="text" name='name_{{$lang}}'
                                       class="form-control {{$errors->first('name') ? "is-invalid" : "" }} "
                                       value="{{old('name_'.$lang)}}" id="name_{{$lang}}" placeholder="Name {{$lang}}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name_'.$lang) }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-5">
                            <label for="client" class="col-sm-2 col-form-label">Client {{$lang}}</label>
                            <div class="col-sm-9">
                                <input type="text" name='client_{{$lang}}'
                                       class="form-control {{$errors->first('client_'.$lang) ? "is-invalid" : "" }} "
                                       value="{{old('client_'.$lang)}}" id="client_{{$lang}}"
                                       placeholder="Client {{$lang}}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('client_'.$lang) }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-5">
                            <label for="desc" class="col-sm-2 col-form-label">Desc {{$lang}}</label>
                            <div class="col-sm-7">
                    <textarea name="desc_{{$lang}}" id="desc_{{$lang}}" cols="30" rows="10"
                              class="form-control {{$errors->first('desc') ? "is-invalid" : "" }} "
                              id="summernote">{{old('desc')}}</textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('desc') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="form-group ml-5">

                <label for="date" class="col-sm-2 col-form-label">Project Date</label>

                <div class="col-sm-9">

                    <input type="date" name='date' class="form-control {{$errors->first('date') ? "is-invalid" : "" }} "
                           value="{{old('date')}}" id="date">

                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>

                </div>

            </div>
            <div class="form-group ml-5">
                <label for="slug" class="col-sm-2 col-form-label">Slug </label>
                <div class="col-sm-9">
                    <input type="text" name='slug'
                           class="form-control {{$errors->first('slug') ? "is-invalid" : "" }} "
                           value="{{old('slug')}}" id="slug" placeholder="Slug">
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                </div>
            </div>
            <div class="form-group ml-5">
                <label for="link" class="col-sm-2 col-form-label">Link </label>
                <div class="col-sm-9">
                    <input type="text" name='link'
                           class="form-control {{$errors->first('link') ? "is-invalid" : "" }} "
                           value="{{old('link')}}" id="link" placeholder="link">
                    <div class="invalid-feedback">
                        {{ $errors->first('link') }}
                    </div>
                </div>
            </div>


            <div class="form-group ml-5">

                <div class="col-sm-3">

                    <button type="submit" class="btn btn-primary">Create</button>

                </div>

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
