<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
        .berlin {
            border: 1px solid whitesmoke;
            border-radius: 20px;
            background-color: whitesmoke;
            margin-bottom: 1rem;
            padding: 10px;
        }
    </style>
</head>

<body style="background: #FAF6E9;">
    <div class=" sidenav">
        <img src="image/Head Logo.png" alt="Logo" width="200" height="85">
        <br></br>
        <a href="/">Dashboard</a>
        <button class="dropdown-btn">Master Data
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="/JenisMitra">Jenis Mitra</a>
            <a href="/SkalaKerja">Skala Kerjasama</a>
        </div>
        <a href="/Kerjasama">Kerja Sama </a>
    </div>
    <div class="card main" style="background: #FAF6E9;">
        <div class="card-header" style="float: right;">
            <div class=>
                <a href="#" class="notification">
                    <i class="fa fa-bell"></i>
                    <span class="badge">*</span>
                </a>
            </div>
            &nbsp
            <div class="dropdown">
                <button class="dropbtn">Universitas Pertamina<img src="https://ppm.universitaspertamina.ac.id/uploads/profile/admin/Logo_Universitas_Pertamina_-_Full_Color.png" alt="Photo" style="width:100%;max-width:50px"></button>

                <div class="dropdown-content">
                    <a href="#">Akun</a>
                    <a href="#">Keluar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="background-color: grey">
                <div class="row">
                    <div class="col-md-2 berlin">Status</div>
                    <div class="col-md-10" style="border-radius: 21px;">
                        <select class="form-control" name="status" id="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                            <option value="Kedaluwarsa">Kedaluwarsa</option>
                            <option value="Perpanjangan">Perpanjangan</option>
                            <option value="Dalam Penjajakan">Dalam Penjajakan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 berlin">
                        Nama Mitra
                    </div>
                    <div class="col-md-10">
                        <input placeholder="Masukkan nama Perusahaan di sini" class="form-control berlin">
                    </div>
                </div>
            </form>
        </div>


    </div>
    <br>
    <h2>Tambah Kerja Sama</h2><br>
    <div class="grid-container">
        <div class="grid-container2" width=50>
            <div class="item1">
                <p>Status</p>
            </div>
            <div class="item2">
                <form action="/action_page.php">
                    <select name="cars" id="cars">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                        <option value="Kedaluwarsa">Kedaluwarsa</option>
                        <option value="Perpanjangan">Perpanjangan</option>
                        <option value="Dalam Penjajakan">Dalam Penjajakan</option>
                    </select>
                    <br><br>

                </form>
            </div>
            <div class="item1">
                <p>Nama Mitra</p>
            </div>
            <div class="item2">
                <input type="nama_mitra" id="nama_mitra" placeholder="Masukkan Nama Mitra" name="nama_mitra">
            </div>
            <div class="item1">
                <p>Jenis Mitra</p>
            </div>
            <div class="item2">6</div>
            <div class="item1">
                <p>Judul Kerjasama</p>
            </div>
            <div class="item2">
                <input type="judul_kerja_sama" id="judul_kerja_sama" placeholder="Masukkan Judul Kerja Sama" name="judul_kerja_sama">
            </div>
            <div class="item1">
                <p>Skala Kerjasama</p>
            </div>
            <div class="item2">8</div>
            <div class="item1">
                <p>Alamat</p>
            </div>
            <div class="item2">
                <input type="alamat" id="alamat" placeholder="Masukkan Alamat" name="alamat">
            </div>
            <div class="item1">
                <p>Negara</p>
            </div>
            <div class="item2">
                <input type="negara" id="negara" placeholder="Masukkan Negara" name="negara">
                </form>
            </div>
            <div class="item1">
                <p>Nomor Telephone</p>
            </div>
            <div class="item2">
                <input type="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon" name="no_telp">
                </form>
            </div>
            <div class="item1">
                <p>Website</p>
            </div>
            <div class="item2">
                <input type="web" id="web" placeholder="Masukkan URL Website" name="web">
                </form>
            </div>
            <div class="item1">
                <p>Bulan Kerjasama</p>
            </div>
            <div class="item2">
                <input type="bulan_kerja_sama" id="bulan_kerja_sama" placeholder="Masukkan Bulan Kerja Sama" name="bulan_kerja_sama">
                </form>
            </div>

        </div>
    </div><br>
    <div class="grid-container">
        <div class="grid-container2">
            <div class="item1">
                <p>Nilai Kontrak</p>
            </div>
            <div class="item2">
                <input type="email" id="email" placeholder="Masukkan Nilai Kontrak" name="email">
                <! --type, id, email masih blm d ganti -->
                    </form>
            </div>
            <div class="item1">
                <p>Tanggal Mulai</p>
            </div>
            <div class="item2">4</div>
            <div class="item1">
                <p>Tanggal Selesai</p>
            </div>
            <div class="item2">6</div>
            <div class="item1">
                <p>Perjanjian Kerjasama</p>
            </div>
            <div class="item2">6</div>
        </div>
    </div><br>
    <div class="grid-container">
        <div class="grid-container2">
            <div class="item1">
                <p>Jenis Kontrak</p>
            </div>
            <div class="item2">
                <input type="email" id="email" placeholder="Enter email" name="email">
                </form>
            </div>
            <div class="item1">
                <p>Judul Kerjasama</p>
            </div>
            <div class="item2">4</div>
            <div class="item1">
                <p>Dokumen MoU</p>
            </div>
            <div class="item2">6</div>
        </div>
    </div><br>
    <div class="grid-container">
        <div class="grid-container2">
            <div class="item1">
                <p>Judul Kerjasama</p>
            </div>
            <div class="item2">
                <input type="email" id="email" placeholder="Enter email" name="email">
                </form>
            </div>
            <div class="item1">
                <p>Dokumen MoA</p>
            </div>
            <div class="item2">4</div>
            <div class="item1">
                <p>Jenis Mitra</p>
            </div>
            <div class="item2">6</div>
        </div>
    </div><br>
    <div class="grid-container">
        <div class="grid-container2">
            <div class="item1">
                <p>PIC</p>
            </div>
            <div class="item2">
                <input type="email" id="email" placeholder="Enter email" name="email">
                </form>
            </div>
            <div class="item1">
                <p>Nomor Telepon</p>
            </div>
            <div class="item2">4</div>
            <div class="item1">
                <p>Email</p>
            </div>
            <div class="item2">6</div>
        </div>
    </div><br>

    <div>
        <a href="#">
            <button style="float:left;border-radius:15px;">Simpan </button>
        </a>

        <a href="#">
            <button style="float:right;border-radius:15px;">Hapus Kerja Sama</button>
        </a>
    </div><br>




    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>