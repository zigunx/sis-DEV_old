@extends('backend/templates/index')
@section('content')
<div class="main-content" ng-controller="foto">
    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                {!! Breadcrumbs::render('lembaga'); !!}
                <div class="page-header">
                    <h1>
                        Home<br />
                        <small>Halaman Administrator LF Wonosobo</small>
                    </h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="core-box">
                    <div class="heading">
                        <i class="clip-user-4 circle-icon circle-green"></i>
                        <h2>Manajemen mahasiswa</h2>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                    <!-- route admin.mahasiswa.index belum terdefinisi, diubah sementara -->
                    <a class="view-more" href="{{route('admin.jurusan.index')}}">
                        View More <i class="clip-arrow-right-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="core-box">
                    <div class="heading">
                        <i class="clip-clip circle-icon circle-teal"></i>
                        <h2>Manajemen Kepegawaian</h2>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                    <a class="view-more" href="{{route('admin.pegawai.index')}}">
                        View More <i class="clip-arrow-right-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop