<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio | Risma Amelia Putri</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        body {
            font-family: "Sofia", sans-serif;
            background-color: #9CB4CC;
            /* font-family: monospace;
            background-color:#9CB4CC; */
          }
            .form-label>span{
              color:red;
            }
            /* body{
            } */
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#748DA6;">
  <div class="container">
    <a class="navbar-brand" href="#">Risma Amelia Putri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portofolio">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg>

  <!-- Home -->
    <section id="home" class="pt-3">
        <div class="container-fluid p-0">
            <div class="text-bg text-center p-5">
                <img src="/storage/{{ $profil->foto }}" width="250" class="img-thumbnail rounded-circle">
                <h2 class="fw-bold mt-3">{{ $profil->nama }}</h2>
                <p class="fs-5">{{ $profil->status }}</p>
            </div>
        </div>
    </section>
  <!-- Akhir Home -->
 
  <!-- About Me -->
    <section id="about" class="pt-5">
      <div class="container">
        <div class="p-5 text-center">
          <h3 class="fw-bold mb-3">About Me</h3>
          <div class="row justify-content-center">
            <div class="col-md-10">
              <p>{{ $profil->deskripsi }}</p>
              {{-- <p>Halo, Nama Saya Risma Amelia Putri. Saya Lahir Di Tasikmalaya, 23 Januari 2006. Saya Berumur 17 Tahun, Zodiak Saya adalah Aquarius. Hobi Saya Bernyanyi, Membaca Alternative Universe, Dan Ngefangirl Fandom Neon. Idola Saya Adalah Mark Lee NCT. Dia Adalah Seorang Rapper, Dancer, Dan Penyanyi Berkebangsaan Kanada. Ia Merupakan Anggota Dari Sub Unit NCT Yaitu NCT Dream, NCT 127, NCT U, Super M. Mark Baru Saja Menyelesaikan Tour America Concert The Link NCT 127 Dan Sekarang Sedang Disibukan Dengan Comeback Terbarunya Yaitu Ay-Yo.</p>
            </div>
            <div class="col-md-4">
              <p>Saya Seorang Pelajar Dari SMK YPC Tasikmalaya Yang Mengambil Jurusan Rekayasa Perangkat Lunak. Pada Semester Pertama Saya Mendapat Peringkat ke 2. Namun Pada Semester Kedua Peringakat Saya Turun Menjadi Peringkat Ke 4. Pada Semester Ketiga Peringkat Saya Turun Lagi Menjadi Peringkat Ke 6. Saya Berharap Pada Semester Kali Ini Dapat Lebih Baik Dari Semester Sebelumnya TIDAK UNTUK TURUN LAGI. </p>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
  <!-- Akhir About Me -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
  </svg>

  <!-- MyProject -->
    <section id="portofolio" class="page-section portofolio">
      <div class="container-fluid text-center">
          <h3 class="fw-bold mb-3">Portofolio</h3>
          <div class="row justify-content-center">
            @foreach ($portofolio as $item)
              {{-- <div class="card h-100" style="width: 370px;"> --}}
                <div class="col col-md-4 mb-5 text-center">
                  <div class="card mt-5 ms-4">
                    <img src="/storage/{{ $item->foto }}" class="card-img-top" width="250">
                    <div class="card-body">
                      <h4 class="fw-bold">{{ $item->nama }}</h4>
                      <p class="card-text">{{ $item->kategori }}</p>
                      <p class="card-text">{{ $item->deskripsi }}</p>                    
                    </div>
                  </div>
                </div>
                @endforeach
              {{-- </div> --}}
          </div>
        
      </div>
    </section>
  <!-- Akhir MyProject -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
  </svg>

  <!-- Contact Me -->
    <section id="contact" class="pt-5">
      <div class="container p-5">
        <h3 class="fw-bold text-center mb-3">Contact Me</h3>
          <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="{{ url('contact/create') }}" method="post">
              @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap <span>*</span></label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email <span>*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Pesan <span>*</span></label>
                  <input type="text" class="form-control" name="pesan" id="pesan" placeholder="Pesan">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn text-white" style="background-color:#748DA6; ">Kirim</button>
                </div>
            </form>
          </div>
      </div>
    </section>
  <!-- Akhir Contact Me -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>

<!-- Footer -->
  <div class="container-fluid">
    <footer class="py-3 my-3 border-top">
      <p class="text-center">&copy; 2023 <a href="https://www.instagram.com/r.amelitri" target="_blank" class="fw-bold text-decoration-none">Risma Amelia Putri</a></p>
    </footer>
  </div>
<!-- Akhir Footer -->

</body>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</html>