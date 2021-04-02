@extends ('master')
@section ('title','halaman Home')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>

    #profile
    {
        
        background-image : url(img/1.jpg);
        background-size : cover;
        height: 350px;

    }
</style>
@section ('content')
    <di class="container">
    <section class="container" id="profile">
    <div class="row">
        <div class="col-md-5 text-center">
            <img class="rounded-circle img-thumbanail mt-3" widht="45%"  src="img/165.jpg">
            <h1> Fajar Agsa Hatmal</h1>
            <h2> 1810530165</h2>
        </div>
    </div>
    </section>
</div>

<div class="container">
    <section class="my-6">
        <div class="row">
        <div class="col-md bg-info text-center">
        <h4>Pengalaman</h4>
        </div>

        <div class="col-md bg-info text-center">
        <h4>Pendidikan</h4>
        </div>
        <div class="col-md bg-info text-center">
        <h4>Kontak</h4>
        </div>

    </div>
    </div>
    </section>

<div class="container">
<div class="row">
    <div class="col-md bg-secondary text-justify text-dark">
    <p></P>
    <h5> 1. Pernah bekerja sebagai Operator </h5>
    <h5> 2. Pernah bekerja sebagai Teknisi Jaringan </h5>
    <h5> 2. Pernah PKL di Kantor Kecamatan </h5>

    </div>

    <div class="col-md bg-warning text-black">
    <P></p>
    <h5>-> 2006-2012 : SDN 2 Empang</h5>
    <h5>-> 2012-2015 : SMPN 1 Empang</h5>
    <h5>-> 2015-2018 : SMKN 1 Tarano</h5>
    <h5>-> 2018-Sekarang : Universitas Bumigora</h5>
    </div>

     <div class="col-md bg-secondary text-justify text-dark">
           <p></p>
            <h5>-> No HP     : 081803616677</h5>
            <h5>-> E-Mail    : fajar.hatmal01@gmail.com</h5>
            <h5>-> Facebook  : Fajar Hatmal</h5>
            <h5>-> Instagram : @fajar12</h5>
    </div>

    

    <div class="container">
<div class="row">
    <div class="col-md bg-dark text-justify text-light">
    <h4><marquee><b>---->Terimakasih Sudah Berkunjung | By : Fajar Agsa Hatmal (1810530165)<----</b> </marquee></h4>
    </div>
    </div>
</div>
<br><br><br><br>
@endsection