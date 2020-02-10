@extends('layouts.frontend')

@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Penilaian</h2>
              <p>Halaman Guru</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
      <a href="{{url('/')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
      <a href="{{url('guru')}}">Guru</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Penilaian</span>
    </div>
    </div>

    <div class="container pt-5">
            <div class="row">
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Identitas</span>
                        </h2>
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <th>Angga Y</th>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <th>:</th>
                                <th>XII RPL 2</th>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <th>:</th>
                                <th>Rekayasa Perangkat Lunak</th>
                            </tr>
                            </table>
                    </div>
                </div>
        </div>

    <div class="justify-content-center">
        <div class="container pt-5 mb-5">
        <div class="card">
                <div class="card-header">Penilaian</div>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>UH1</th>
                                <th>UH2</th>
                                <th>UH3</th>

                            </tr>
                @php $no =1; @endphp
                <tr>
                    <td>a</td>
                    <td><input type="text" placeholder="90"></td>
                    <td><input type="text" placeholder="90"></td>
                    <td><input type="text" placeholder="90"></td>
                </tr>

                </table>

            </div>
        </div>

                <a href="" class="btn btn-info">Simpan</a>
    </div>
    </div>
    <br>
    <br>
    </div>







@endsection
