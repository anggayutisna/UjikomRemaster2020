
@extends('layouts.frontend')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Guru</h2>
              <p>Halaman Guru</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Guru</span>
      </div>
    </div>


    <div class="justify-content-center">
        <div class="container pt-5 mb-5">
            <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        <div class="card">
                <div class="card-header">Daftar Siswa</div>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                <tr>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td><a href="" class="btn btn-warning">nlai</a></td>

                </tr>

                </table>

            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    </div>














  <!-- loader -->
@endsection
