<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pramuditax | Update </title>

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
                        <a class="nav-link" aria-current="page" href="/">Home</a>
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
    <!-- tambah data -->
    <div class="container-md-fluid bg-light pt-5">
        <div class="container pt-4">
            <h1 class="display-5 text-center text-dark pt-5" style="font-family:Verdana, Geneva, Tahoma, sans-serif;"><b>UPDATE DATA MEMBER</b></h1>
            <form action="/member/updatedata/<?= $member['id']; ?>" method="POST" class="p-4" enctype="multipart/form-data">
                <table class="table table-light">
                    <tr>
                        <td>Nama</td>
                        <td></td>
                        <td><input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" value="<?= $member['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="120" height="30">Email</td>
                        <td></td>
                        <td> <input class="form-control" type="email" placeholder="contoh@gmail.com" name="email" value="<?= $member['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="120" height="30">Nomor Telepon</td>
                        <td></td>
                        <td> <input class="form-control" type="number" placeholder="08xxxxxxxxxx" name="telepon" value="<?= $member['telepon']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td height="30">Jenis Kelamin</td>
                        <td> </td>
                        <td class="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" <?php if ($member['gender'] == 'Laki-Laki') echo 'checked'; ?> value="Laki-Laki">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" <?php if ($member['gender'] == 'Perempuan') echo 'checked'; ?> value="Perempuan">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                    <td height="30">Tanggal Lahir</td>
                    <td></td>
                    <td><input class="form-control" type="date"></td>
                </tr> -->
                    <tr>
                        <td height="30">Pekerjaan</td>
                        <td></td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="pekerjaan">
                                <option <?php if ($member['pekerjaan'] == 'Pilih Pekerjaan') echo 'selected'; ?> selected>Pilih Pekerjaan</option>
                                <option <?php if ($member['pekerjaan'] == 'PNS/TNI/POLISI') echo 'selected'; ?> value="PNS/TNI/POLISI">PNS/TNI/POLISI</option>
                                <option <?php if ($member['pekerjaan'] == 'Pegawai Swasta') echo 'selected'; ?> value="Pegawai Swasta">Pegawai Swasta</option>
                                <option <?php if ($member['pekerjaan'] == 'Pelajar/Kuliah') echo 'selected'; ?> value="Pelajar/Kuliah">Pelajar/Kuliah</option>
                                <option <?php if ($member['pekerjaan'] == 'Tidak Bekerja') echo 'selected'; ?> value="Tidak Bekerja">Tidak Bekerja</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Alamat Lengkap</td>
                        <td></td>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea" name="alamat"><?= $member['alamat']; ?></textarea>
                                <label for="floatingTextarea">Alamat Anda</label>
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                    <td>Hobi</td>
                    <td></td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Futsal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Badminton</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Voli</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Gaming</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Ngoding</label>
                        </div>
                    </td>
                    </tr> -->
                    <tr>
                        <td>Foto Profil</td>
                        <td></td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile" name="foto">
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="mb-3 form-check text-dark">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Menyetujui Ketentuan yang berlaku</label>
                </div>
                <div class="submit">
                    <td><input class="btn btn-success" type="submit" value="Update"></td>
                    <a href="/member" class="btn btn-primary" type="submit">Batal</a>
                </div>
            </form>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,165.3C672,181,768,235,864,224C960,213,1056,139,1152,96C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <!-- akhir tambah -->
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