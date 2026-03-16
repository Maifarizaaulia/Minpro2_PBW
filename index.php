<?php
include "koneksi.php";

$queryAbout = mysqli_query($conn,"SELECT * FROM about");
$about = mysqli_fetch_assoc($queryAbout);

$queryCert = mysqli_query($conn,"SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - MAIFARIZA AULIA DYAS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand fw-bold text-danger" href="#">MaiPortfolio</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold nav-pill" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold nav-pill" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold nav-pill" href="#certificates">Certificates</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="mb-3 text-muted">Halo Semuanya!</h4>

                        <h1 class="hero-name">Maifariza Aulia Dyas</h1>
                        <h2 class="hero-role">Web Developer</h2>

                        <p class="mt-3 hero-desc">
                            Mahasiswa Sistem Informasi yang tertarik pada Web Development
                            dan terus belajar menciptakan website yang modern, responsif,
                            dan menarik secara visual.
                        </p>

                        <div class="mt-4">
                            <a href="#about" class="btn btn-danger me-3 px-4">About Me</a>
                            <a href="#certificates" class="btn btn-outline-danger px-4">Certificates</a>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center position-relative mt-5 mt-lg-0">
                        <div class="circle-bg"></div>
                        <img src="assets/PDH.png" class="hero-img">
                    </div>

                </div>
            </div>
        </section>

        <section id="about" class="py-5">
            <div class="container">

                <h2 class="text-center text-danger fw-bold mb-3">About Me</h2>
                <p class="text-center text-muted mb-5">
                    Tertarik pada pengembangan website dan terus belajar menciptakan tampilan yang responsif dan menarik.
                </p>

                <div class="row">

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Deskripsi Diri</h5>
                                <p class="card-text">
                                <?php echo $about['deskripsi']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Skills</h5>
                                <div v-for="skill in skills" :key="skill.name">
                                    <p>{{ skill.name }}</p>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger"
                                            :style="{ width: skill.level + '%' }">
                                            {{ skill.level }}%
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pengalaman</h5>
                                <ul>
                                    <li>Panitia kegiatan kampus – Divisi Dokumentasi & Konsumsi.</li>
                                    <li>Mengembangkan mini project website berbasis HTML, CSS, dan Bootstrap.</li>
                                    <li>Mengikuti workshop dan seminar di bidang IT.</li>
                                    <li>Berkolaborasi dalam tugas kelompok berbasis sistem informasi.</li>
                                    <li>Aktif mempelajari teknologi front-end secara mandiri.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <hr class="my-5">

                <div class="mt-4">
                    <p class="text-center">
                        Perjalanan saya di dunia teknologi dimulai dari rasa ingin tahu terhadap cara kerja sebuah website. Hingga saat ini, saya terus mengembangkan kemampuan di bidang Web Development dan berkomitmen untuk menjadi developer yang adaptif, kreatif, dan selalu siap menghadapi tantangan baru di dunia teknologi yang terus berkembang.
                    </p>
                </div>

            </div>

            <div class="full-image">
                <img src="assets/tenggarong.jpeg" alt="Tenggarong">
            </div>
        </section>

        <section id="certificates" class="py-5" style="background-color:#fff5f8;">
        <div class="container">

        <h2 class="text-center text-danger fw-bold mb-4">Certificates</h2>
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($queryCert)) { ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="assets/<?php echo $row['gambar']; ?>" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="fw-bold"><?php echo $row['judul']; ?></h6>
                    <p class="small text-muted"><?php echo $row['tahun']; ?></p>
                    <a href="assets/<?php echo $row['gambar']; ?>" target="_blank" class="btn btn-outline-danger btn-sm">
                        Lihat
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>

        </div>

        </div>
        </section>

        <footer class="text-center py-3 bg-light">
            <p class="mb-0">© 2026 - Maifariza Aulia Dyas | Sistem Informasi</p>
        </footer>

    </div> 

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <script>
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    skills: [
                        { name: 'Python', level: 88 },
                        { name: 'UI/UX', level: 60 },
                        { name: 'JavaScript', level: 75 },
                        { name: 'HTML', level: 80 },
                        { name: 'CSS', level: 75 },
                        { name: 'Bootstrap 5', level: 70 },
                        { name: 'Vue JS', level: 60 }
                    ]
                }
            }
        }).mount('#app')
    </script>

</body>
</html>