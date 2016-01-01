<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', '/admin', ['icon' => 'clip-home-3']);
});
Breadcrumbs::register('homeguru', function($breadcrumbs) {
    $breadcrumbs->push('Home', '/guru', ['icon' => 'clip-home-3']);
});
Breadcrumbs::register('gurupegawaiedit', function($breadcrumbs) {
    $breadcrumbs->parent('homeguru');
    $breadcrumbs->push('Edit Pegawai', route('guru.pegawai.edit'), ['icon' => '']);
});
Breadcrumbs::register('gurupersyaratan', function($breadcrumbs) {
    $breadcrumbs->parent('homeguru');
    $breadcrumbs->push('persyaratan', route('guru.persyaratan.index'), ['icon' => '']);
});
Breadcrumbs::register('gurupersyaratancreate', function($breadcrumbs) {
    $breadcrumbs->parent('gurupersyaratan');
    $breadcrumbs->push('Tambah persyaratan', route('guru.persyaratan.create'), ['icon' => '']);
});
Breadcrumbs::register('gurupersyaratanshow', function($breadcrumbs) {
    $breadcrumbs->parent('gurupersyaratan');
    $breadcrumbs->push('Lihat persyaratan', route('guru.persyaratan.show'), ['icon' => '']);
});
Breadcrumbs::register('gurupersyaratanedit', function($breadcrumbs) {
    $breadcrumbs->parent('gurupersyaratan');
    $breadcrumbs->push('Edit persyaratan', route('guru.persyaratan.edit'), ['icon' => '']);
});

Breadcrumbs::register('guruupload', function($breadcrumbs) {
    $breadcrumbs->parent('homeguru');
    $breadcrumbs->push('Upload', route('guru.upload.index'), ['icon' => '']);
});
Breadcrumbs::register('guruuploadcreate', function($breadcrumbs) {
    $breadcrumbs->parent('guruupload');
    $breadcrumbs->push('Tambah Upload', route('guru.upload.create'), ['icon' => '']);
});
Breadcrumbs::register('guruuploadedit', function($breadcrumbs) {
    $breadcrumbs->parent('guruupload');
    $breadcrumbs->push('Edit Upload', route('guru.upload.edit'), ['icon' => '']);
});
Breadcrumbs::register('datastatis', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data Statis', route('admin.datastatis.index'), ['icon' => '']);
});
Breadcrumbs::register('datastatiscreate', function($breadcrumbs) {
    $breadcrumbs->parent('datastatis');
    $breadcrumbs->push('Tambah Data', route('admin.datastatis.create'), ['icon' => '']);
});
Breadcrumbs::register('datastatisedit', function($breadcrumbs) {
    $breadcrumbs->parent('datastatis');
    $breadcrumbs->push('Edit Data', route('admin.datastatis.edit'), ['icon' => '']);
});
/*Breadcrumbs::register('datadinamis', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data Dinamis', route('admin.dashboard.datadinamis'), ['icon' => '']);
});
}); 

Breadcrumbs::register('indexberita', function($breadcrumbs) {
    $breadcrumbs->parent('datadinamis');
    $breadcrumbs->push('Index Berita', route('admin.berita.index'), ['icon' => '']);

*/
Breadcrumbs::register('lembaga', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('lembaga', route('admin.dashboard.lembaga'), ['icon' => '']);
});

Breadcrumbs::register('indexberitacreate', function($breadcrumbs) {
    $breadcrumbs->parent('indexberita');
    $breadcrumbs->push('Tambah Berita', route('admin.berita.create'), ['icon' => '']);
});
Breadcrumbs::register('indexberitaedit', function($breadcrumbs) {
    $breadcrumbs->parent('indexberita');
    $breadcrumbs->push('Edit Berita', route('admin.berita.edit'), ['icon' => '']);
});
Breadcrumbs::register('agenda', function($breadcrumbs) {
    $breadcrumbs->parent('datadinamis');
    $breadcrumbs->push('Agenda', route('admin.agenda.index'), ['icon' => '']);
});
Breadcrumbs::register('agendacreate', function($breadcrumbs) {
    $breadcrumbs->parent('agenda');
    $breadcrumbs->push('Tambah Agenda', route('admin.agenda.create'), ['icon' => '']);
});
Breadcrumbs::register('agendaedit', function($breadcrumbs) {
    $breadcrumbs->parent('agenda');
    $breadcrumbs->push('Edit Agenda', route('admin.agenda.edit'), ['icon' => '']);
});
Breadcrumbs::register('jurusan', function($breadcrumbs) {
    $breadcrumbs->parent('lembaga');
    $breadcrumbs->push('jurusan', route('admin.jurusan.index'), ['icon' => '']);
});
Breadcrumbs::register('jurusancreate', function($breadcrumbs) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('Tambah jurusan', route('admin.jurusan.create'), ['icon' => '']);
});
Breadcrumbs::register('jurusanedit', function($breadcrumbs) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('Edit jurusan', route('admin.jurusan.edit'), ['icon' => '']);
});
Breadcrumbs::register('mahasiswa', function($breadcrumbs, $id) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('mahasiswa', route('admin.jurusan.{id}.mahasiswa.index',$id), ['icon' => '']);
});
Breadcrumbs::register('mahasiswacreate', function($breadcrumbs, $id) {
    $breadcrumbs->parent('mahasiswa',$id);
    $breadcrumbs->push('Tambah mahasiswa', url('admin.jurusan.{id}.mahasiswa.create', $id), ['icon' => '']);
});
Breadcrumbs::register('mahasiswaedit', function($breadcrumbs,$id) {
    $breadcrumbs->parent('mahasiswa',$id);
    $breadcrumbs->push('Edit mahasiswa', route('admin.jurusan.{id}.mahasiswa.edit', $id), ['icon' => '']);
});
Breadcrumbs::register('pegawai', function($breadcrumbs) {
    $breadcrumbs->parent('lembaga');
    $breadcrumbs->push('Data Pegawai', route('admin.pegawai.index'), ['icon' => '']);
});
Breadcrumbs::register('pegawaicreate', function($breadcrumbs) {
    $breadcrumbs->parent('pegawai');
    $breadcrumbs->push('Tambah Pegawai', route('admin.pegawai.create'), ['icon' => '']);
});
Breadcrumbs::register('pegawaiedit', function($breadcrumbs) {
    $breadcrumbs->parent('pegawai');
    $breadcrumbs->push('Edit Pegawai', route('admin.pegawai.edit'), ['icon' => '']);
});
Breadcrumbs::register('galeri', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data Galeri', route('admin.galeri.index'), ['icon' => '']);
});
Breadcrumbs::register('galericreate', function($breadcrumbs) {
    $breadcrumbs->parent('galeri');
    $breadcrumbs->push('Tambah Galeri', route('admin.galeri.create'), ['icon' => '']);
});
Breadcrumbs::register('galeriedit', function($breadcrumbs) {
    $breadcrumbs->parent('galeri');
    $breadcrumbs->push('Edit Galeri', route('admin.galeri.edit'), ['icon' => '']);
});
Breadcrumbs::register('foto', function($breadcrumbs, $id) {
    $breadcrumbs->parent('galeri');
    $breadcrumbs->push('Foto', route('admin.galeri.{id}.foto.index',$id), ['icon' => '']);
});
Breadcrumbs::register('fotocreate', function($breadcrumbs, $id) {
    $breadcrumbs->parent('foto',$id);
    $breadcrumbs->push('Tambah Foto', url('admin.galeri.{id}.foto.create', $id), ['icon' => '']);
});
Breadcrumbs::register('fotoedit', function($breadcrumbs,$id) {
    $breadcrumbs->parent('foto',$id);
    $breadcrumbs->push('Edit Foto', route('admin.galeri.{id}.foto.edit', $id), ['icon' => '']);
});
Breadcrumbs::register('persyaratan', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data persyaratan', route('admin.persyaratan.index'), ['icon' => '']);
});
Breadcrumbs::register('persyaratancreate', function($breadcrumbs) {
    $breadcrumbs->parent('persyaratan');
    $breadcrumbs->push('Tambah persyaratan', route('admin.persyaratan.create'), ['icon' => '']);
});
Breadcrumbs::register('persyaratanshow', function($breadcrumbs) {
    $breadcrumbs->parent('persyaratan');
    $breadcrumbs->push('Lihat persyaratan', route('admin.persyaratan.show'), ['icon' => '']);
});
Breadcrumbs::register('upload', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data Upload', route('admin.upload.index'), ['icon' => '']);
});
Breadcrumbs::register('uploadcreate', function($breadcrumbs) {
    $breadcrumbs->parent('upload');
    $breadcrumbs->push('Tambah Upload', route('admin.upload.create'), ['icon' => '']);
});
Breadcrumbs::register('uploadedit', function($breadcrumbs) {
    $breadcrumbs->parent('upload');
    $breadcrumbs->push('Lihat Upload', route('admin.upload.edit'), ['icon' => '']);
});