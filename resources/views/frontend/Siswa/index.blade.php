
@extends('layouts.frontend')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('frontend/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Halaman Siswa</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">About Us</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline">
                            <span>Data Diri</span>
                        </h2>
                        <table>
                        <tr>
                            @foreach ($siswa as $siswas)
                        <td><span>Nama</span></td>
                        <td><span>:</span></td>
                        <td><span>{{$siswas->nama_siswa}}</span></td>
                        </tr>
                        <tr>
                        <td><span>Kelas</span></td>
                        <td><span>:</span></td>
                        </tr>
                        <tr>
                        <td><span>Jurusan</span></td>
                        <td><span>:</span></td>
                            @endforeach
                    </tr>
                        </table>
                        <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><span></span></td>
                            </tr>
                @php $no =1; @endphp

                <tr>

                </tr>

                </table>
            </div>
                    </div>
                </div>
        </div>
    </div>

        </div>
      </div>
  </div>
  <!-- .site-wrap -->

  <!-- loader -->
@endsection
