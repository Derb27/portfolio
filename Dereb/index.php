<?php 
$User = "Derb";
$age = 21;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php $User ?> Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
<?php 
require_once('header.php');
// require_once("side.php");
?>
  <main style="margin: 100px; padding: 100px; margin-top: 0;">

    <div class="pagetitle">
      <h1>Derb Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Derb</a></li>
          <!-- <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-lg" style="height: 150px;">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Welcome to Derb Page</h5>
              <p>Welcome to my page, where the Wi-Fi is strong, the coffee is stronger, and the sense of humor is questionable—just like my life choices!.</p>
            </div>
          </div>
        </div>
      </div>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/derb.jpg" alt="Profile" class="rounded-circle">
              <h2><?= $User ?></h2>
              <h3>Palamunin</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Academic & Background</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Programming Skills</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Fun Facts</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#blog">Blog</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">
                    Hello! I’m <?= $User ?>, I’m a student based in Caloocan City with a budding interest in programming. With <?= $age ?> years of experience, I’ve worked on various web-based projects that helped me refine my skills. I believe in continuous learning and staying ahead of industry trends. I’m eager to connect and collaborate—feel free to check out my portfolio to see my recent work!</p>

                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-2 label">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= $User ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 label">Address</div>
                    <div class="col-lg-9 col-md-8">??</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 label">Phone</div>
                    <div class="col-lg-9 col-md-8">??</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 label">Email</div>
                    <div class="col-lg-9 col-md-8">??</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
               I have a solid foundation in programming, with a particular focus on PHP, jQuery, and HTML. I hold a Bachelor of Science in Information Technology from Collegio De Sta Theresa De Avila, where I developed a strong understanding of web development principles.
Throughout my studies, I immersed myself in various projects that allowed me to apply my knowledge practically. I became proficient in PHP for server-side scripting, enabling me to create dynamic and interactive web applications. My experience with jQuery enhanced my ability to streamline client-side scripting, making web pages more responsive and engaging.
I’m passionate about crafting user-friendly interfaces with HTML, ensuring a seamless experience for users. I continually seek opportunities to expand my skills and keep up with the latest industry trends.
I look forward to leveraging my programming skills in future projects and collaborations!
                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                <div class="col-lg">
              <h5 class="card-title">Derb's Skills</h5>

              <!-- Bar Chart -->
              <canvas id="barChart"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['PHP', 'HTML' , 'CSS','MYSQL', 'JAVA', 'JAVASCRIPT', 'SHELL', 'VISUAL BASIC', 'C#','C++', 'PYTHON'],
                      datasets: [{
                        label: 'Skill Chart',
                        data: [80, 20, 50, 1, 20, 25, 30, 20, 20,43],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
  

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                When I’m not immersed in coding, you’ll often find me deep in the world of gacha games, where every pull feels like a mini-adventure. I balance my passion for gaming with regular visits to the gym, proving that I can level up both in-game and in real life. My collection of virtual characters rivals my gym gear, as I’m always ready to tackle a new challenge, whether it’s scoring a rare item or hitting a new personal record. I truly believe in the power of endorphins, whether they come from a successful game pull or a great workout session, showcasing my knack for multitasking between my two favorite pastimes!
              </div>
              <div class="tab-pane fade" id="blog">
            Wala pa kong gawa :(  
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
     
<div class="row d-flex justify-content-center">
<div class="col-8 text-center">
              <h5 class="card-title">Derb's Photo</h5>
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/cbum1.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Derb 12 years old</h5>
                      <p>When Derb was a Pre-school student</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/cbum2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Derb 18 years old</h5>
                      <p>When Derb Graduated from High school with the highest honor and grade possible</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/cbum.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Derb 21 years old the current era</h5>
                      <p>Currently studying at CSTA.</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
</div> 
    </section>
  </main><!-- End #main -->
<?php 
require_once("foot.php");
?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>