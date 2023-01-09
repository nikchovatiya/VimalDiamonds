@extends('BackEnd\layout')
@section('content')
<div class="pagetitle">
    <h1>Users List</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" style="overflow:auto;">
                <h5 class="card-title"></h5>
                @if(session()->get('success'))
                <div class="alert alert-success">
                    @if (session()->get('success')['verified'] == 1)

                    {{ session()->get('success')['email'] }} has been activated.
                    @else
                    {{ session()->get('success')['email'] }} has been Deactivated.
                    @endif
                </div><br />
                @endif
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">Verify</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Role</th>
                            <th scope="col"> Edit</th>
                            <th scope="col"> Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            @if ($user->verified == 1)
                            <td>
                                <button class="btn" style="display:block; margin: auto;">
                                <a href="{{url('/admin/users/')}}/{{$user->verified}}/{{$user->id}}"> <i class="bi bi-check-all"></i></a>
                                </button>
                            </td>
                            @else
                            <td>
                                <button class="btn" style="display:block; margin: auto;">
                                   <a href="{{url('/admin/users/')}}/{{$user->verified}}/{{$user->id}}"> <i class="bi bi-x-circle-fill"></i></a>
                                </button>
                            </td>
                            @endif
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->companyname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->role}}</td>

                            <td>
                                <button class="btn btn-warning" style="display:block; margin: auto;">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            <td>
                                <button class="btn btn-danger" style="display:block; margin: auto;">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Primary Color Bordered Table -->

            </div>
        </div>
    </div>
</div>

@stop