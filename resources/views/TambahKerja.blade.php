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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>

<body style="background: #FAF6E9;">
    <div class=" sidenav">
        <img src="image/Head Logo.png" alt="Logo" width="200" height="85">
        <br></br>
        <a href="#">Dashboard</a>
        <button class="dropdown-btn">Master Data
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="/JenisMitra">Jenis Mitra</a>
            <a href="#">Skala Kerjasama</a>
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
                <button class="dropbtn">Universitas Pertamina<img
                        src="https://ppm.universitaspertamina.ac.id/uploads/profile/admin/Logo_Universitas_Pertamina_-_Full_Color.png"
                        alt="Photo" style="width:100%;max-width:50px"></button>

                <div class="dropdown-content">
                    <a href="#">Akun</a>
                    <a href="#">Keluar</a>
                </div>
            </div>
        </div>
        <br>
        <h2>Tambah Kerja Sama</h2><br>
        <div class="grid-container">
            <div class="grid-container2"></div>
        </div><br>
        <div class="grid-container">asas</div><br>
        <div class="grid-container">asas</div><br>
        <div class="grid-container">asas</div><br>
        <div class="grid-container">asas</div><br>

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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</body>

</html>