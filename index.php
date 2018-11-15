<?php
include('koneksi.php');
$halaman = "index";
if(isset($_SESSION['login_user'])){
}
?>

<?php include 'header.php';?>
  
    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img src="images/banner.jpg" style="width: 100%;">
          <div class="subheading mb-5"><h3>name@email.com</h3></a>
          </div>
          <p class="lead mb-5">Kepribadian sangatlah penting untuk diketahui oleh setiap orang agar setiap individu mampu  mengembangkan  kelebihan  yang  dimilikinya.  Seseorang  yang  kesulitan  dalam mengembangkan dirinya kemungkinan karena tidak mengetahui sama sekali kelemahan dan kekurangan  yang  dimilikinya. Sistem  Pakar  merupakan  suatu  sistem  yang  dibangun  untuk memindahkan kemampuan dari seorang atau beberapa orang pakar ke dalam komputer yang digunakan untuk  memecahkan masalah yang dihadapi oleh pengguna dalam bidang tertentu.</p> 
          <p>Peneliti membangun sebuah aplikasi sistem pakar menentukan kepribadian seseorang berdasarkan tes personalitas Florence  Littauer  berbasis  web  yang  mampu  membantu  pengenalan  seseorang  terhadap kepribadiannya.  Proses  pembuatan  aplikasi  tersebut  menggunakan metode Certainty Factor (CF).  Pada  tahap  implementasi penulis  menggunakan perangkat  pemrograman berbasis  web. Aplikasi  ini  dapat  membantu  pengguna  untuk  mengetahui  kepribadiannya,  sehingga  dapat membantu untuk mengembangkan dirinya.</p>
        </div>
      </section>

    </div>

<?php include 'footer.php';?>