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
                {!! Breadcrumbs::render('absensishow'); !!}
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
                                <input type="hidden" name="_token" value="{{{ csrf_token()}}}" />
                                <table id="sample-table-1" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama mahasiswa</th>
                                            <th class="center">Keterangan (Absen)</th>
                                            <th class="center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($mahasiswa)
                                        <input type="hidden" name="jurusan" value="{{$mahasiswa->first()->id_jurusan}}" />
                                        @if(count($mahasiswa->first()->absensi) > 0)
                                            @foreach($mahasiswa as $sis)
                                                    <tr>
                                                        
                                                        <td>{{$sis->nama_mahasiswa}}</td>
                                                        <td class="center">
                                                            {{$sis->absensi->first()->absen}}
                                                        </td>
                                                        <td class="center">
                                                            <a href="{{route('admin.absensi.edit',$sis->absensi->first()->id_absensi)}}" class="btn btn-blue">Edit Data</a>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                        @else
                                                <tr>
                                                    <td colspan="4" class="center">Tidak Ada Data</td>
                                                </tr>
                                        @endif
                                    @endif
                                    </tbody>
                                </table>
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