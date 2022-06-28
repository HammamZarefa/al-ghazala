@extends('layouts.admin')

@section('styles')

<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('content')

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Roles</h1>

@if (session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="{{ route('admin.role.create') }}" class="btn btn-success">Create role</a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Name</th>

                        {{-- <th>Email</th> --}}

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                @php

                $no=0;

                @endphp

                @foreach ($roles as $role)

                    <tr>

                        <td>{{ ++$no }}</td>

                        <td>{{ $role->name }}</td>

                        {{-- <td>{{ $user->email }}</td> --}}

                        <td>

                            {{-- <a href="#" data-toggle="modal" data-target="#changepasswordModal" class="btn btn-primary btn-sm">Change Password</a> --}}
                            <a href="{{route('admin.role.edit', [$role->id])}}" class="btn btn-info btn-sm"> Edit </a>

                            <form method="POST" action="{{route('admin.role.destroy', [$role->id])}}" class="d-inline" onsubmit="return confirm('Delete this role permanently?')">

                                @csrf

                                <input type="hidden" name="_method" value="DELETE">

                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

@endpush
