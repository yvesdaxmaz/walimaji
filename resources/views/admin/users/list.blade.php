@extends('layouts.app-admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Listes d'utilisateurs
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Acceuil</a>
                </li>
                <li class="active">Produit</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- ////////////////////////////////////////// list des produit /////////////////////////////////// -->
                    <div class="box">
                        <div class="box-body">
                            <table id="productsList1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Avatar</th>
                                    <th>Nom</th>
                                    <th>description</th>
                                    <th>email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>
                                        <a href="edit_type_product.html">
                                            <button class="btn bg-green">edit</button>
                                        </a>
                                        <button class="btn bg-red">delete</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- ////////////////////////////////////////// list des produit /////////////////////////////////// -->

                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection