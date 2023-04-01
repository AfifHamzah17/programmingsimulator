<!-- Header -->
<?php include '../includes/header.php'; ?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <!-- <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Agency Status:</h6>
                      <h4>Ready Work</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Price:</h6>
                      <h4>$720/Month</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Schedules</h6>
                      <h4>$450/Meeting</h4>
                    </div>
                  </div> -->
                <div class="col-lg-12">
                  <h2>Programming Simulator</h2>
                </div>
                <div class="col-lg-12">
                  <div class="main-green-button scroll-to-section">
                    <a href="#about">Learn now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="assets/images/banner-right-image.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="features" class="features section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="features-content">
          <div class="row">
            <div class="col-lg-3">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="first-number number">
                  <h6>01</h6>
                </div>
                <div class="icon"></div>
                <h4>while</h4>
                <div class="line-dec"></div>
                <p>melakukan perulangan melalui blok kode selama kondisi yang ditentukan benar</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="second-number number">
                  <h6>02</h6>
                </div>
                <div class="icon"></div>
                <h4>do .. while</h4>
                <div class="line-dec"></div>
                <p>melakukan perulangan melalui blok kode sekali, dan kemudian mengulangi loop selama kondisi yang ditentukan benar</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="third-number number">
                  <h6>03</h6>
                </div>
                <div class="icon"></div>
                <h4>for</h4>
                <div class="line-dec"></div>
                <p>melakukan perulangan melalui blok kode dalam jumlah waktu tertentu</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="fourth-number number">
                  <h6>04</h6>
                </div>
                <div class="icon"></div>
                <h4>foreach</h4>
                <div class="line-dec"></div>
                <p>melakukan perulangan melalui blok kode untuk setiap elemen dalam array</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="skills-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h2 align="left">1. While</h2>
                <p align="left"><b>While</b> loop digunakan ketika Anda ingin mengeksekusi sepotong kode berulang kali sampai kondisi while bernilai false.<br>Anda dapat mendefinisikannya seperti yang ditunjukkan pada pseudocode berikut.</p>
                <img src="assets/images/while1.png" width="10" height="200">
                <p align="left">Mari kita lihat contoh kasus untuk memahami bagaimana <b>while</b> loop bekerja di PHP.</p>
                <img src="assets/images/while2.png">
                <p align="left">Jika Anda terbiasa dengan seri Fibonacci, Anda mungkin mengenali apa yang dilakukan oleh program di atas — ia mengeluarkan seri Fibonacci untuk sepuluh angka pertama. While loop umumnya digunakan ketika Anda tidak tahu jumlah iterasi yang akan terjadi dalam satu loop.</p><br><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h2 align="left">2. Do ... While</h2>
                <p align="left"><b>Do .. While</b> loop sangat mirip dengan while loop, dengan satu-satunya perbedaan adalah bahwa kondisi while diperiksa pada akhir iterasi pertama. Dengan demikian, kita dapat menjamin bahwa kode loop dijalankan setidaknya satu kali, terlepas dari hasil ekspresi while.<br>Mari kita lihat sintaks dari do-while loop.</p>
                <img src="assets/images/dowhile1.png" width="10" height="200">
                <p align="left">Mari kita lalui ke contoh kasus untuk memahami kemungkinan penggunaan kasus di mana Anda dapat menggunakan <b>do-while</b> loop.</p>
                <img src="assets/images/dowhile2.png">
                <p align="left">Pada contoh di atas, kita mencoba membaca file baris demi baris. Pertama, kita telah membuka file untuk dibaca. Dalam kasus kita, kita tidak yakin apakah file tersebut mengandung konten. Jadi, kita perlu menjalankan fungsi fgets setidaknya sekali untuk memeriksa apakah suatu file tersebut berisi konten. Jadi kita bisa menggunakan do-while loop disini. do-while mengevaluasi kondisi setelah iterasi pertama loop.</p><br><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h2 align="left">3. For</h2>
                <p align="left">Secara umum <b>For</b> loop digunakan untuk mengeksekusi sepotong kode untuk jumlah waktu tertentu. Dengan kata lain, jika Anda sudah tahu berapa kali Anda ingin mengeksekusi blok kode, itu adalah forloop yang merupakan pilihan terbaik.<br>Mari kita lihat sintaks dari <b>for</b> loop.</p>
                <img src="assets/images/for1.png" width="10" height="200">
                <p align="left">Ekspresi expr1 digunakan untuk menginisialisasi variabel, dan itu selalu dijalankan. Ekspresi expr2 juga dieksekusi di awal loop, dan jika bernilai true, kode loop dieksekusi. Setelah eksekusi kode loop expr3 dieksekusi. Secara umum, expr3 digunakan untuk mengubah nilai suatu variabel yang digunakan di ekspresi expr2.</p>
                <img src="assets/images/for2.png">
                <p align="left">Program di atas menampilkan kuadrat dari sepuluh angka pertama. Ini menginisialisasi $i ke 1, berulang selama $i kurang dari atau sama dengan 10, dan menambahkan 1 ke $i pada setiap iterasi.</p><br><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h2 align="left">4. Foreach</h2>
                <p align="left"><b>Foreach</b> loop digunakan untuk mengalihkan variabel array. Jika Anda memiliki variabel array, dan Anda ingin melewati setiap elemen array itu, foreach loop adalah pilihan terbaik.<br>Mari kita lihat beberapa contoh.</p>
                <img src="assets/images/foreach1.png" width="10" height="400">
                <p align="left">Jika Anda ingin mengakses nilai array, Anda bisa menggunakan versi pertama foreach loop seperti yang ditunjukkan pada contoh di atas. Di sisi lain, jika Anda ingin mengakses kunci dan nilai, Anda dapat melakukannya seperti yang ditunjukkan pada contoh $employee di atas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>Video Tutorial</h2>
          <!-- <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/gn5Rmn2gLJo"></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/ARxBUyzzz0w"></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/SG728V5lD0g"></iframe>
      </div>
      <!-- <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Optimizing Keywords</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Page Optimizations</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Deep URL Analysis</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div> 
        </div>-->
    </div>
  </div>
</div>

<!-- <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h2>Discover Our Recent <em>Projects</em> And <span>Showcases</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 101</h4></a>
                      <span>Marketing</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 102</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-02.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 103</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-05.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 104</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-03.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 105</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-06.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 106</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 107</h4></a>
                      <span>Creative</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 108</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                <!-- <h6>Online Editor</h6> -->
                <h2>Online Editor</h2>
              </div>
            </div>
            <div tabindex="0" onclick="this.focus();" class="col-lg-12">
              <div tabindex="0" onclick="this.focus();" class="row">
                <div tabindex="0" onclick="this.focus();" class="code" id="code_1" data-ace-editor-id="1" data-ace-editor-allow-execution="true" data-ace-editor-hide-vars="false" data-ace-editor-script-name="page.php" data-ace-editor-default-get="" data-ace-editor-default-post="" align="left">
                  <pre onclick="this.focus();" class="editor" id="code_editor_1">&lt;?php 

echo "Hi and welcome for our Online PHP Editor."

?&gt;</pre>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">info@company.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">+001-002-0034</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">26th Street, Digital Villa</a>
                    </li>
                  </ul>
                </div>
              </div> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include '../includes/footer.php'; ?>