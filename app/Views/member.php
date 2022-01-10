<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pramuditax | Member</title>

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
            <a class="navbar-brand" href="/" style="font-family:cursive;">Data Member</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/tambah">Join Member</a></li>
                            <li><a class="dropdown-item active" href="#">Data Member</a></li>
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
    <!-- AWAL TABLE -->
    <div class="container-md-fluid bg-light pt-5">
        <div class="container bg-light pt-5">
            <h1 class="display-5 text-center text-dark p-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif;"><b>DAFTAR MEMBER DITAX PROGRAMMING</b></h1>
            <?php if (session()->getFlashData('success')) : ?>
                <div class="alert alert-success pt-3" role="alert">
                    <?= session()->getFlashData('success'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashData('primary')) : ?>
                <div class="alert alert-primary pt-3" role="alert">
                    <?= session()->getFlashData('primary'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashData('danger')) : ?>
                <div class="alert alert-danger pt-3" role="alert">
                    <?= session()->getFlashData('danger'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-dark table-striped table-bordered border-primary text-center">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($member as $m) : ?>
                            <th scope="row"><?= $m['id']; ?></th>
                            <td><img src="/<?= $m['foto']; ?>" class="img-thumbnail    " alt="..." width="100"></td>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['email']; ?></td>
                            <td><?= $m['telepon']; ?></td>
                            <td><?= $m['gender']; ?></td>
                            <td><?= $m['pekerjaan']; ?></td>
                            <td><?= $m['alamat']; ?></td>
                            <td class="">
                                <a href="/update/<?= $m['id']; ?>" class="btn btn-primary d-block mb-2">Update</a>
                                <a href="/delete/<?= $m['id']; ?>" class="btn btn-danger d-block">Delete</a>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,165.3C672,181,768,235,864,224C960,213,1056,139,1152,96C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <!-- AKHIR TABLE -->
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