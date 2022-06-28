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
  width:300px;
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

<form action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-9">

                <input type="text" name='name' class="form-control {{$errors->first('name') ? "is-invalid" : "" }} " value="{{old('name')}}" id="name" placeholder="Ex: Susi Similikiti">

                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>

            </div>

        </div>

        {{-- assign role --}}

        <div class="form-group ml-5">

            <label for="permissions" class="col-sm-2 col-form-label">Assign Role</label>

            <div class="col-sm-9">

                <select name='permissions[]' class="form-control {{$errors->first('permissions') ? "is-invalid" : "" }} select2" id="permissions" multiple>
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('permissions') }}
                </div>

            </div>

        </div>

        {{-- <div class="form-group ml-5">

            <label for="role" class="col-sm-2 col-form-label">Assign Role</label>

            @foreach ($permissions as $permission)

                <div class="col-sm-9">

                    <label><input type="checkbox" name="permissions[]" class="{{$errors->first('permissions') ? "is-invalid" : "" }} " value="{{ $permission->id }}"> {{ $permission->name }}</label>

                    <div class="invalid-feedback">
                        {{ $errors->first('permissions') }}
                    </div>

                </div>

            @endforeach

        </div> --}}

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
