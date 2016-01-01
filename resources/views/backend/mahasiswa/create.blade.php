@extends('backend/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/admin-mahasiswa.js')}}'></script>
@stop
@section('content')
<div class="main-content" ng-controller="mahasiswacreate">
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
{!! Breadcrumbs::render('mahasiswacreate',$id); !!}
                <div class="page-header">
                    <h1>{{$title}}</h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tabbable">
                    <ul class="nav nav-tabs tab-bricky" id="myTab">
                        <li class="active">
                            <a data-toggle="tab" href="#panel_tab2_example1">
                                <i class="green fa fa-home"></i> Tambah mahasiswa
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="panel_tab2_example1" class="tab-pane active">
                                                   <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                             <form class="form-horizontal" role="form" name="agendaForm" ng-submit="submit()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> jurusan </label>
                                    <div class="col-sm-9">
                                        <select name="id_jurusan" class="form-control" ng-model="data.id_jurusan">
                                            <option value="">Pilih jurusan</option>
                                            <option ng-repeat="unit in jurusan" ng-selected="unit.id == {{$id}}" value="<%unit.id%>"><% unit.label %></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Nama mahasiswa </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='nama_mahasiswa' ng-model='data.nama_mahasiswa'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Tempat/Tanggal Lahir </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='tmp_tgl_lahir' ng-model='data.tmp_tgl_lahir'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Jenis Kelamin </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='jenkel' ng-model='data.jenkel'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Agama </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='agama' ng-model='data.agama'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Ukuran Jas </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='ukuranjas' ng-model='data.ukuranjas'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Status Pekerjaan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='s_kerja' ng-model='data.s_kerja'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Status Pernikahan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='s_nikah' ng-model='data.s_nikah'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Alamat </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='alamat' ng-model='data.alamat'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> No. HP </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='no_hp' ng-model='data.no_hp'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Nama Orang Tua </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='nama_ortu' ng-model='data.nama_ortu'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Nama Suami/Istri </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='nama_suis' ng-model='data.nama_suis'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Pendidikan Terakhir </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='pendidikan_terakhir' ng-model='data.pendidikan_terakhir'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Alamat Sekolah </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='alamat_skolah' ng-model='data.alamat_skolah'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Berkas Persyaratan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='persyaratan' ng-model='data.persyaratan'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"></label>
                                    <div class="col-sm-9">
                                        
                                        <button class="btn btn-success" type="submit">
                                            Save
                                        </button>
                                        <a href='{{route('admin.jurusan.{id}.mahasiswa.index',$id)}}' class="btn btn-blue">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop