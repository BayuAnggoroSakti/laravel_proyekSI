@extends('admin.layout.layout')

@section('title', 'Page Title')



  
  @section('content')

<section class="content-header">
           <h1>
            Form Isian Wisata
            <small>Semua Wisata</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
 </section>
 <section class="content">


         <div class="box-body">
                 <div class="row">
                    <div class="col-md-10">
                       <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Mohon Isikan Data - Data Wisata Dengan Benar</h3>
                </div><!-- /.box-header -->

                  {!! Form::open(['url' => 'admin/wisata', 'class' => 'form-horizontal']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Wisata</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Masukkan Nama Wisata">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Alamat Wisata">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Latitude</label>
                      <div class="col-sm-10">
                        <input type="number" name="latitude" class="form-control" id="inputPassword3" placeholder="Lokasi Latitude">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Longtitude</label>
                      <div class="col-sm-10">
                        <input type="number" name="longtitude" class="form-control" id="inputPassword3" placeholder="Lokasi Longtitude">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Wilayah</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="combobox" name="wilayah">
                       <option value="">Select one...</option>
                        <option value="ActionScript">ActionScript</option>
                        <option value="AppleScript">AppleScript</option>
                        <option value="Asp">Asp</option>
                        <option value="BASIC">BASIC</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Clojure">Clojure</option>
                        <option value="COBOL">COBOL</option>
                        <option value="ColdFusion">ColdFusion</option>
                        <option value="Erlang">Erlang</option>
                        <option value="Fortran">Fortran</option>
                        <option value="Groovy">Groovy</option>
                        <option value="Haskell">Haskell</option>
                        <option value="Java">Java</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Lisp">Lisp</option>
                        <option value="Perl">Perl</option>
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Scala">Scala</option>
                        <option value="Scheme">Scheme</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Link Affiliate</label>
                      <div class="col-sm-10">
                        <input type="text" name="aff" class="form-control" id="inputEmail3" placeholder="Link Afiliasi">
                      </div>
                    </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                {!! Form::close() !!}
                </div>
           
                </div>
                 
           

                    <!-- input states -->
              


                    <!-- radio -->
                  

               
</section>


@stop