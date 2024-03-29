@extends('backend/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/admin-absensi.js')}}'></script>
@stop
@section('content')
<div class="main-content" ng-controller="absensicreate">
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
                {!! Breadcrumbs::render('absensicreate'); !!}
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
                                <i class="green fa fa-home"></i> {{$title}} {{$fulltanggal}} jurusan {{$mahasiswa->first()->jurusan->nama_jurusan}}
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="panel_tab2_example1" class="tab-pane active">
                            <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                            <form action="{{route('admin.absensi.store')}}" method="post">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="hidden" name="jurusan" value="{{$mahasiswa->first()->id_jurusan}}" />
                                <input type="hidden" name="tanggal" value="{{$tanggal}}" />
                                <input type="hidden" name="bulan" value="{{$bulan}}" />
                                <input type="hidden" name="tahun" value="{{$tahun}}" />
                                <table id="sample-table-1" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama mahasiswa</th>
                                            <th class="center">Keterangan (Absen)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mahasiswa as $sis)
                                        <tr>
                                            <td>{{$sis->nis}}</td>
                                            <td>{{$sis->nama_mahasiswa}}</td>
                                            <td class="center">
                                                <label class="radio-inline">
                                                    <input type="radio" value="S" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (S)Sakit
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="I" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (I)Ijin
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="A" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (A)Alpha
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="B" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (B)Bolos
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="H" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" checked required>
                                                    (H)Hadir
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="D" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (D)Dispen
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="SK" name="absen-{{$sis->id_mahasiswa}}[absen]" class="grey" required>
                                                    (SK)Skors
                                                </label>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-bricky" value="Submit">
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