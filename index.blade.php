@extends('admin.master')

@section('content')

<a href="/pertanyaan/create" class="btn  btn-primary">bikin baru</a>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nama</th>
                      <th>pertanyaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach($items as $key =>$item)
              <tr>
              <td> {{ $key+1 }} </td>
              <td>{{ $pertanyaan->name}}</td>
              <td>{{ $pertanyaan->pertanyaan}}</td>
              </tr>
              @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection