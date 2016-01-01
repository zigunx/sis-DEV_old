@extends('backend/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/admin-persyaratan.js')}}'></script>
@stop
@section('content')
<div class="main-content" ng-controller="persyaratan">
    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                {!! Breadcrumbs::render('indexberita'); !!}
                <div class="page-header">
                    <h1>
                        {{$title}} <br />
                        <small>persyaratan mahasiswa di website LF Wonosobo</small>
                    </h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- start: BASIC TABLE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="form-group connected-group">
                            <form name="inputpersyaratan" action="{{route('admin.persyaratan.create')}}" method="POST">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <label class="control-label">
                                    Masukan Input persyaratan<span class="symbol required"></span>
                                </label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <select name="tanggal" class="form-control" ng-model="data.tanggal">
                                            <option ng-repeat="unit in date" ng-selected="unit.id == data.tanggal" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="bulan" class="form-control" ng-model="data.bulan">
                                            <option ng-repeat="unit in bulan" ng-selected="unit.id == data.bulan" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="tahun" class="form-control" ng-model="data.tahun">
                                            <option ng-repeat="unit in tahun" ng-selected="unit.id == data.tahun" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="jurusan" class="form-control" ng-model="data.jurusan">
                                            <option ng-repeat="unit in jurusan" ng-selected="unit.id == data.jurusan" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn btn-bricky" value="Submit">
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-group connected-group">
                         <form name="lihatpersyaratan" action="{{route('admin.persyaratan.show')}}" method="POST">
                            <label class="control-label">
                                Lihat persyaratan<span class="symbol required"></span>
                            </label>
                             <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="row">
                                <div class="col-md-2">
                                        <select name="tanggal" class="form-control" ng-model="data.tanggal">
                                            <option ng-repeat="unit in date" ng-selected="unit.id == data.tanggal" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="bulan" class="form-control" ng-model="data.bulan">
                                            <option ng-repeat="unit in bulan" ng-selected="unit.id == data.bulan" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="tahun" class="form-control" ng-model="data.tahun">
                                            <option ng-repeat="unit in tahun" ng-selected="unit.id == data.tahun" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="jurusan" class="form-control" ng-model="data.jurusan">
                                            <option ng-repeat="unit in jurusan" ng-selected="unit.id == data.jurusan" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn btn-bricky" value="Submit">
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: BASIC TABLE PANEL -->
</div>
@stop