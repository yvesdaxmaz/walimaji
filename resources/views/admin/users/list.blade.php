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

        <section class="content">
            <div class="row">
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#Trader" data-toggle="tab">Traders</a>
                            </li>
                            <li>
                                <a href="#Provider" data-toggle="tab">Providers</a>
                            </li>
                            <li>
                                <a href="#Producer" data-toggle="tab">Producers</a>
                            </li>
                            <li>
                                <a href="#Transformer" data-toggle="tab">Tranformers</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="Trader">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
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
                                            <td></td>
                                            <td> </td>
                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="edit_type_product.html">
                                                    <button class="btn bg-green">Detail</button>
                                                </a>
                                                <button class="btn bg-red">Supprimer</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Provider">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
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
                                        <td></td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit_type_product.html">
                                                <button class="btn bg-green">Detail</button>
                                            </a>
                                            <button class="btn bg-red">Supprimer</button>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="Producer">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
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
                                        <td></td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit_type_product.html">
                                                <button class="btn bg-green">Detail</button>
                                            </a>
                                            <button class="btn bg-red">Supprimer</button>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Transformer">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
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
                                        <td></td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit_type_product.html">
                                                <button class="btn bg-green">Detail</button>
                                            </a>
                                            <button class="btn bg-red">Supprimer</button>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>
@endsection