<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pramuditax | Home </title>

    <!-- LINK CSS BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK ICON BOOTSTRAP 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- LINK STYLE.CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container-md ">
            <img src="/img/ditaxweb.png" alt="" width="100" height="60" class="">
            <a class="navbar-brand" href="/" style="font-family:cursive;">Pramuditax.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/tambah">Join Member</a></li>
                            <li><a class="dropdown-item" href="/member">Data Member</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <form class=" d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success me-2" type="submit">Search</button>
                </form>
                <a href="/tambah" class="btn btn-primary" type="submit">Join Member</a>
            </div>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->
    <!-- Carousel -->
    <section class="container-md-fluid mt-5 pt-5">
        <div class="container ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active bg-dark" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active bg-dark" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-around text-end">
                            <div class="col-sm-12 col-md-7">
                                <img src="/img/calas.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <h4 class="display-6 fs-1">SELAMAT DATANG DI WEBSITE DITAX PROGRAMMING</h4>
                                <p class="" style="color: #777;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam hic vitae quisquam sapiente adipisci perferendis qui ad corrupti ratione eligendi!</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around text-end">
                            <div class="col-md-7 col-sm-12">
                                <img src="/img/labti.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-md-4 col-sm-12 mt-5">
                                <h2 class="display-3 fs-1">TENTANG SAYA</h2>
                                <p class="" style="color: #777;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores rerum repudiandae saepe iusto accusantium reprehenderit accusamus consequatur, maiores impedit officia?</p>
                                <a href="/about" type="button" class="btn btn-dark btn-lg rounded-pill m-md-4 p-md-3 panah">About
                                    Me <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around text-end">
                            <div class="col-md-7 col-sm-12">
                                <img src="/img/kompres.png" class="d-block " width="550" alt="...">
                            </div>
                            <div class="col-md-4 col-sm-12 mt-5">
                                <h4 class="display-6 fs-1">MORE INFO?</h4>
                                <p class="" style="color: #777;">Mohon maaf jika kami belum maksimal dalam menjalankan web ini. Jika ada yang ingin ditanyakan silahkan hubungi kami.</p>
                                <a href="#kontak" type="button" class="btn btn-dark btn-lg rounded-pill m-md-4 p-md-3 panah">Contact Me <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1" d="M0,32L34.3,74.7C68.6,117,137,203,206,202.7C274.3,203,343,117,411,112C480,107,549,181,617,197.3C685.7,213,754,171,823,170.7C891.4,171,960,213,1029,245.3C1097.1,277,1166,299,1234,304C1302.9,309,1371,299,1406,293.3L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Carousel -->
    <!-- AWAL COURSES -->
    <section class="bg-primary">
        <div class="container-md">
            <div class="row pt-5">
                <div class="col-md">
                    <h3 class=" display-5 p-md-2"><b>Member Ditax Programming</b></h5>
                        <h3 class=" display-6 p-md-2">Learn Your Skill From Online</h5>
                            <a href="/tambah" type="button" class="btn btn-dark btn-lg rounded-pill m-md-4 p-md-4 panah">Join
                                Member Baru <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-md">
                    <img src="https://image.freepik.com/free-vector/flat-design-online-courses-illustration_23-2148528493.jpg" width="500" alt="">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L24,176C48,192,96,224,144,234.7C192,245,240,235,288,234.7C336,235,384,245,432,213.3C480,181,528,107,576,101.3C624,96,672,160,720,176C768,192,816,160,864,154.7C912,149,960,171,1008,165.3C1056,160,1104,128,1152,122.7C1200,117,1248,139,1296,160C1344,181,1392,203,1416,213.3L1440,224L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- AKHIR COURSES -->
    <!-- KONTAK KAMI -->
    <section id="=kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
            <p class="text-center pb-md-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, inventore.
            </p>
            <div class="row d-flex justify-content-between">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control form-control-lg mb-3" id="exampleFormControlInput1" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control form-control-lg mb-3" id="exampleFormControlInput1" placeholder="Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="number" class="form-control form-control-lg mb-3" id="exampleFormControlInput1" placeholder="Nomor Telepon Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control form-control-lg mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Pesan Anda"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary btn-lg">Kirim</button>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-white bg-dark mb-3 border-primary border-2" style="max-width: 100rem;">
                        <div class="card-header img">
                            <h5>Kontak Kami</h5>
                            <p>Click Button Below </p>
                            <a href="https://www.instagram.com/aditiaph/" class="social text-md-center"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.facebook.com/pramuditax/" class="social text-md-center"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/aditya44852815" class="social text-md-center"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCYzGb3NoU8aTLWGAaijQtAw" class="social text-md-center"><i class="bi bi-youtube"></i></a>
                        </div>
                        <div class="card-body">
                            <img src="./img/ditaxweb.png" alt="" class="img-fluid">
                            <p class="card-text">
                            <figure class="text-end">
                                <blockquote class="blockquote">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    CEO Ditax Web Programming <cite title="Source Title">Aditya Pramudita</cite>
                                </figcaption>
                            </figure>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1" d="M0,64L24,85.3C48,107,96,149,144,181.3C192,213,240,235,288,218.7C336,203,384,149,432,154.7C480,160,528,224,576,234.7C624,245,672,203,720,186.7C768,171,816,181,864,186.7C912,192,960,192,1008,176C1056,160,1104,128,1152,138.7C1200,149,1248,203,1296,208C1344,213,1392,171,1416,149.3L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- AKHIR KONTAK KAMI -->
    <!-- AWAL TEAM -->
    <div class="container-md-fluid pt-5 bg-primary" id="teamkami">
        <div class="container text-center">
            <h2 class="display-4" id="staff"><b>Team Kami</b></h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
                quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
                quod.
            </p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <img src="./img/resize.jpg" class="rounded-circle mb-3" />
                    <h4>Aditya Pramudita</h4>
                    <p>Web Designer</p>
                    <p class="img">
                        <a href="https://www.instagram.com/aditiaph/" class="social text-md-center"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/pramuditax/" class="social text-md-center"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/aditya44852815" class="social text-md-center"><i class="bi bi-twitter"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.5_qPFqfCqjx07kHv323WDQHaHa%26pid%3DApi&f=1" class="rounded-circle mb-3" />
                    <h4>Tukang Rujak</h4>
                    <p>Fruit Master</p>
                    <p class="img">
                        <a href="" class="social"><i class="bi bi-instagram"></i></a>
                        <a href="" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="" class="social"><i class="bi bi-twitter"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffsa.zobj.net%2Fcrop.php%3Fr%3Dz0hgVjEHQ00w7VvoUL_roDCpY0CcdLh8nXx-kE_i01L3dxeZ77OZR8qYGIAEQKYrr7a9Zbbe-q9hpkR9v0y1uEKrOgtkbT_YF1sJ57dcnP3Iag23XcVgKr7be4tmycLkokqTRXcKJdf6EBmv&f=1&nofb=1" class="rounded-circle mb-3">
                    <h4>Draken</h4>
                    <p>Tavvoran bozz</p>
                    <p class="img">
                        <a href="" class="social"><i class="bi bi-instagram"></i></a>
                        <a href="" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="" class="social"><i class="bi bi-twitter"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,256L26.7,229.3C53.3,203,107,149,160,144C213.3,139,267,181,320,165.3C373.3,149,427,75,480,85.3C533.3,96,587,192,640,208C693.3,224,747,160,800,144C853.3,128,907,160,960,165.3C1013.3,171,1067,149,1120,154.7C1173.3,160,1227,192,1280,202.7C1333.3,213,1387,203,1413,197.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- AKHIR TEAM -->
    <!-- AWAL SUPPORT -->
    <section>
        <div class="container-md-fluid">
            <div class="container p-md-5">
                <div class="row text-center">
                    <h2 class="display-4"><b>Support By</b></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam ipsam at sapiente reiciendis
                        quos
                        aperiam quisquam ut autem aut!</p>
                </div>
                <div class="row pt-4 client">
                    <div class="col">
                        <a href="http://ti.lab.gunadarma.ac.id/"><img src="http://ti.lab.gunadarma.ac.id/asset/images/logo-labti.png" alt=""></a>
                    </div>
                    <div class="col">
                        <a href="https://codeigniter.com/"><img src="https://cdn.pngsumo.com/codeigniter-png-5-png-image-codeigniter-png-610_500.png" alt=""></a>
                    </div>
                    <div class="col">
                        <a href="https://www.google.com/"> <img src="https://www.i-repair4u.nl/wp-content/uploads/google-logo-black-transparent.png" alt=""></a>
                    </div>
                    <div class="col">
                        <a href="https://github.com/"> <img src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Symbol.png" alt=""></a>
                    </div>
                    <div class="col">
                        <a href="https://getbootstrap.com/"> <img src="https://seeklogo.com/images/B/bootstrap-5-logo-85A1F11F4F-seeklogo.com.png" alt=""></a>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0d6efd" fill-opacity="1" d="M0,32L26.7,64C53.3,96,107,160,160,186.7C213.3,213,267,203,320,176C373.3,149,427,107,480,106.7C533.3,107,587,149,640,165.3C693.3,181,747,171,800,149.3C853.3,128,907,96,960,122.7C1013.3,149,1067,235,1120,250.7C1173.3,267,1227,213,1280,192C1333.3,171,1387,181,1413,186.7L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                </path>
            </svg>
    </section>
    <!-- AKHIR SUPPORT -->
    <!-- CONTACT -->
    <section id="contact" class="bg-primary">
        <div class="container kontak">
            <div class="row justify-content-center">
                <div class="col-md-3 img">
                    <img src="./img/ditaxweb.png" alt="" class="img-fluid">
                    <h2 class=" pb-md-3 pt-md-3"><b>Pramuditax.</b></h2>
                    <p class="pb-md-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quas culpa,
                        necessitatibus
                        blanditiis harum officia praesentium quasi sint. Dignissimos, sequi!</p>
                    <a href="https://www.instagram.com/aditiaph/" class="social text-md-center"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/pramuditax/" class="social text-md-center"><i class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com/aditya44852815" class="social text-md-center"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCYzGb3NoU8aTLWGAaijQtAw" class="social text-md-center"><i class="bi bi-youtube"></i></a>

                </div>
                <div class="col-md-3">
                    <h3 class=" display-6 pb-md-5"><b>Courses</b></h3>
                    <p><a href="" class=" text-dark text-decoration-none">Workshop</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Editor</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">BAAK</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">UI/UX</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Gunadarma</a></p>
                </div>
                <div class="col-md-3">
                    <h3 class=" display-6 pb-md-5"><b>Rechouses</b></h3>
                    <p><a href="" class=" text-dark text-decoration-none">About</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Contact</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Biographic</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Register</a></p>
                    <p><a href="" class=" text-dark text-decoration-none">Layanan</a></p>
                </div>
                <div class="col-md-3">
                    <h3 class=" display-6 pb-md-5"><b>Address</b></h3>
                    <p>Jl. Murai 7 Perum BTR, Cimmuning, MustikaJaya, Kota Bekasi</p>
                    <p>+6281315240099</p>
                    <p>shootadit46@gmail.com</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#212529" fill-opacity="1" d="M0,256L34.3,245.3C68.6,235,137,213,206,213.3C274.3,213,343,235,411,218.7C480,203,549,149,617,154.7C685.7,160,754,224,823,213.3C891.4,203,960,117,1029,101.3C1097.1,85,1166,139,1234,138.7C1302.9,139,1371,85,1406,58.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- AKHIR CONTACT -->
    <!-- COPYRIGHT -->
    <div class="container-fluid text-center p-5 bg-dark text-light">
        &copy; 2021 All Rights Reserved. Made with <i class="bi bi-heart-fill text-danger"></i> by <b>Pramuditax.</b>
    </div>
    <!-- AKHIR COPYRIGHT -->

</body>

<!-- LINK JAVASCRIPT BOOTSTRAP 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>