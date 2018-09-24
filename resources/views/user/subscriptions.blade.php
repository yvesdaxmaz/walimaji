@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Vos Abonnements</h3>
                        </div>
                        <div class="box-body">
                        <table   class="example1 table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($followings as $following)
                                <tr>
                                    <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                    <td>{{$following->name}}</td>
                                    <td> {{$following->description}}</td>
                                    <td> {{$following->designation}}</td>
                                    <td>{{$following->email}}</td>
                                    <td>{{$following->phone}}</td>
                                    <td>
                                        <a href="{{route('user/userDetail',$following->id ) }}">
                                            <button class="btn bg-blue">Se desabonner</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Avatar</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div/>
                    <!-- /.nav-tabs-custom -->
                </div>
                <div class="col-md-1"></div>
                <!-- /.col -->
            </div>
        </section>
    </div>
@endsection