@extends('admin.layout.layout')

@section('title', 'Page Title')


@section('content')
 <section class="content-header">
           <h1>
            Menampilkan Data
            <small>Semua Wisata</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
 </section>
 <section class="content">
   <div class="box">
                <div class="box-header">
                  <div class="row">
                    <div class="col-md-2">
                      <a href="{!!URL::to('/admin/tambah_wisata')!!}"><button class="btn btn-block btn-info btn-lg">Tambah Wisata</button></a>
                    </div>
                  </div>
                
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Wisata</th>
                        <th>Alamat</th>
                        <th>Lokasi Latitude</th>
                        <th>Lokasi Longtitude</th>
                        <th>Wilayah</th>
                        <th>Link Affiliasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($wisata as $data)
                      <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>     
                        <td>{{ $data->latitude }}</td>  
                        <td>{{ $data->longtitude }}</td>
                        <td>{{ $data->wilayah }}</td>    
                        <td>{{ $data->aff }}</td>  
                        <td>  
                            <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('admin/wisata/'. $data->id_wisata . '/edit_wisata') }}">Edit</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Delete</a></li>
                          </ul>
                        </div>
                     </td>             

                        </tr>
                      </tbody>
                      @endforeach
                   
                    <tfoot>
                      <tr>
                       <th>Nama Wisata</th>
                        <th>Alamat</th>
                        <th>Lokasi Latitude</th>
                        <th>Lokasi Longtitude</th>
                        <th>Wilayah</th>
                        <th>Link Affiliasi</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</section>
@stop