@extends('layouts.admin')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.role.update',$role->id) }}" method="POST">
    @csrf

    <div class="container">

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-9">

                <input type="text" name='name' class="form-control {{$errors->first('name') ? "is-invalid" : "" }} " value="{{old('name') ? old('name') : $role->name}}" id="name" placeholder="Ex: Susi Similikiti">

                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>

            </div>

        </div>

        {{-- assign role --}}

        <div class="form-group ml-5">

            <label for="role" class="col-sm-2 col-form-label">Assign Role</label>

            @foreach ($permissions as $permission)

                <div class="col-sm-9">

                    <label>
                        <input type="checkbox" name="permissions[]"
                            class="{{$errors->first('permissions') ? "is-invalid" : "" }} "
                            value="{{ $permission->id }}"
                            @foreach ($role->permissions as $role_premit)
                                @if ($role_premit->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            > {{ $permission->name }}</label>

                    <div class="invalid-feedback">
                        {{ $errors->first('permissions') }}
                    </div>

                </div>

            @endforeach

            {{-- <select name="role" id="" class="form-control">
                <option value=""></option>
            </select> --}}

        </div>

        <div class="form-group ml-5">

            <div class="col-sm-3">

                <button type="submit" class="btn btn-primary">Update</button>

            </div>

        </div>

    </div>

  </form>
@endsection
