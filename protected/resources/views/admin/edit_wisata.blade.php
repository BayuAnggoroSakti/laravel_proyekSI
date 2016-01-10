@extends('admin.layout.layout')

@section('title', 'Page Title')


@section('content')
<section class="content-header">
           <h1>
            Form Edit Wisata
            <small>Semua Wisata</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Wisata</a></li>
            <li class="active">Edit Wisata</li>
          </ol>
 </section>
 <section class="content">
   <div class="box">
{!! Form::model($wisata, ['method' => 'PATCH','class' => 'form-horizontal','action' => ['WisataController@update', $wisata->id_wisata]])!!}
  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Wisata</label>
                      <div class="col-sm-10">
                       {!! Form::text('nama', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                         {!! Form::text('alamat', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Latitude</label>
                      <div class="col-sm-10">
                         {!! Form::text('latitude', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Longtitude</label>
                      <div class="col-sm-10">
                         {!! Form::text('longtitude', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Isi Deskripsi</label>
                      <div class="col-sm-10">
                         <form>
                            <textarea id="editor1" name="deskripsi" rows="10" cols="80" required>
                               {{ $wisata->deskripsi }}
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </form>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">Wilayah</label>
                      <div class="col-sm-10">
                        <select class="form-control wilayah" id="combobox"  name="wilayah">
                        <option value="none">Select one...</option>
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
                         {!! Form::text('aff', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                  <div class="box-footer">
                    {!! Form::submit('Edit data', array('class' => 'btn btn-primary')) !!}
                  </div>
    
 
{!! Form::close() !!}
</div>
</section>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.wilayah').val('{{ $wisata->wilayah }}');
  });
  </script>
@stop