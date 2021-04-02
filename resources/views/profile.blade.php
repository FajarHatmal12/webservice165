@extends ('master')
@section ('title','halaman Profile')

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
<br><br><br><br><br><br><br><br><br><br><br>
@endsection