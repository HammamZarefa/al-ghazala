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

<form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">

        <div class="form-group">

            <div class="picture-container">

                <div class="picture">

                    <img src="" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>

                    <input type="file" id="wizard-picture" name="cover" class="form-control {{$errors->first('cover') ? "is-invalid" : "" }} ">

                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>

                </div>

                <h6>Pilih Cover</h6>

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
                        <label for="name" class="col-sm-2 col-form-label">Title {{$lang}}</label>
                        <div class="col-sm-9">
                            <input type="text" name='title_{{$lang}}'
                                   class="form-control {{$errors->first('title_'.$lang) ? "is-invalid" : "" }} "
                                   value="{{old('title_'.$lang)}}" id="title_{{$lang}}" placeholder="Title {{$lang}}">
                            <div class="invalid-feedback">
                                {{ $errors->first('title_'.$lang) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-5">
                        <label for="body" class="col-sm-2 col-form-label">Desc {{$lang}}</label>
                        <div class="col-sm-9">
                            <textarea name='body_{{$lang}}' class="form-control {{$errors->first('body_'.$lang) ? "is-invalid" : "" }} "  id="summernote_{{$lang}}" cols="30" rows="10">{{old('body_'.$lang)}}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('body_'.$lang) }}
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
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-9">
                <select name='category' class="form-control {{$errors->first('category') ? "is-invalid" : "" }} " id="category">
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
        <div class="form-group ml-5">
            <label for="tags" class="col-sm-2 col-form-label">Tags</label>
            <div class="col-sm-9">
                <select name='tags[]' class="form-control {{$errors->first('tags') ? "is-invalid" : "" }} select2" id="tags" multiple>
                    @foreach ($tags as $tags)
                        <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('tags') }}
                </div>
            </div>
        </div>
        <div class="form-group ml-5">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-7">
                <select name='status' class="form-control {{$errors->first('status') ? "is-invalid" : "" }} " id="status">
                    <option selected value="PUBLISH">PUBLISH</option>
                    <option value="DRAFT">DRAFT</option>
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('status') }}
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
    // languages
    // $("#selectTeam").change(function(){
    //     var lang = document.getElementById("selectTeam").value;
    //     if (lang == 'EN'){
    //         document.getElementById("local").value = lang;
    //     }else{
    //         document.getElementById("local").value = lang;
    //     }
    //     console.log(lang);
    // });

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
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
