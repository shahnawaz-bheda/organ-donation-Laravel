@extends('clientside.layouts.main')
@section('main-container')
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Donate An Organ</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Donate An Organ </li>
        </ul>
      </div>
    </div>
  <!--//breadcrumb-bg-->
  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <!--/blank-->
  <section class="w3l-serices-6 py-5" id="services1">
    <div class="container py-lg-5 py-md-4 py-2">
    <form name="donate" action="/donate" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label for="name">Organ Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Organ Name" name="name">
  </div>
  <div class="form-group">
    <label for="image">Organ Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  
  <br>
  <div class="text-center">
  <button type="submit" class="btn btn-style btn-primary">Contribute Now</button>
  
</div>
</form>
    </div>
  </section>
  <!--//blank-->
  @endsection