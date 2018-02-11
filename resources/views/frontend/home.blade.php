@extends('layouts.app')

@section('content')
<!--slider-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banner2.jpg" alt="...">
      <div class="carousel-caption">
       <h1>EZGOO Memberikan Kemudahan dalam memilih Tiket Perjalanan anda</h1>
      </div>
    </div>
    <div class="item">
      <img src="images/banner3.jpg" alt="...">
      <div class="carousel-caption">
       <h1>EZGOO Memberikan Harga yang relatif murah dan tersedia berbagai macam pilihan tiket</h1>
      </div>
    </div>

    <div class="item">
      <img src="images/pesawat.jpg" alt="...">
      <div class="carousel-caption">
        <h1>EZGOO Memberikan pilihan Maskapai dan Kereta Terbaik untuk Perjalanan Anda</h1>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- tab -->
<div class="container">
<div class="row">
<div class="col-lg-12 center">
<div role="tabpanel">
<!-- nav tabs-->
  <div class="panel panel-default">
      <div class="panel-body">
        <ul class="nav nav-tabs">
      <!-- Untuk Semua Tab..-->
            <li class="active"><a href="#pesawat" data-toggle="tab">Pesawat</a></li>
            <li><a href="#kereta" data-toggle="tab">Kereta</a></li>
        </ul>
  <!-- Tab panes, ini content dari tab di atas -->
  <div class="tab-content">
    <div class="tab-pane active" id="pesawat">
      <form>
        <div class="col-md-4">
          <label for="dari">Kota Asal</label>
            <select class='form-control select2' title="Kota Asal" id="departure" name="departure" required="">
                <option>Jakarta - CGK</option>
                <option>Jakarta - Halim</option>
                <option>Yogyakarta - Adi Sucipto</option>
                <option>Bali - Ngurah Rai</option>
                <option>Surabaya - Juanda</option>
            </select>
        </div>

        <div class="col-md-4">
          <label for="tujuan">Tujuan</label>
            <select class="form-control">
                <option>Jakarta - CGK</option>
                <option>Jakarta - Halim</option>
                <option>Yogyakarta - Adi Sucipto</option>
                <option>Bali - Ngurah Rai</option>
                <option>Surabaya - Juanda</option>
            </select>
        </div>

        <div class="col-md-4">
          <label for="kelas penerbangan">Kelas Penerbangan</label>
            <select class="form-control">
                <option>Ekonomi</option>
                <option>Bussines</option>
                <option>First Class</option>
            </select>
        </div>

        <div class="col-md-4">
          <label for="Perjalanan">Perjalanan</label>
            <select class='form-control select2' id="trip-type" name="trip_type" required="">
                <option>Sekali Jalan</option>
                <option>Pulang Pergi</option>
            </select>
        </div>

        <div class="col-md-2">
          <label for="dewasa">Dewasa</label>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>

        <div class="col-md-2">
          <label for="anak">Anak-Anak</label>
            <select class="form-control">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>

        <div class="col-md-2">
          <label for="bayi">Bayi</label>
            <select class="form-control">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>

        <div class="col-md-4">
          <label for="berangkat">Tanggal Berangkat</label>
          <input type="date" class="form-control" id="date-departing" name='start' value="30/01/2018" required="" type="text">
        </div>

        <div class="col-md-4">
          <label for="pulang">Tanggal Pulang</label>
          <input type="date" class="form-control" id="date-departing" name='start' value="30/01/2018" required="" type="text">
        </div>

        <div class="col-md-4"><br>
          <button class="btn btn-primary">Cari Tiket Pesawat</button>
        </div>

      </form>
    </div>

  <!-- Kereta-->
    <div class="tab-pane" id="kereta">
      <form>
        <div class="col-md-4">
          <label for="kotaasal">Kota Asal</label>
            <select class="form-control">
                <option>Jakarta - Gambir (GMR)</option>
                <option>Bandung - Bandng (BD)</option>
                <option>Jakarta Selatan - Manggarai</option>
                <option>Jakarta Timur - Jatinegara</option>
                <option>Jakarta Utara - Tanjung Priok</option>
              </select>
          </div>

    <div class="col-md-4">
      <label for="kotatujuan">Kota Tujuan</label>
          <select class="form-control">
              <option>Jakarta - Gambir (GMR)</option>
              <option>Bandung - Bandng (BD)</option>
              <option>Jakarta Selatan - Manggarai</option>
              <option>Jakarta Timur - Jatinegara</option>
              <option>Jakarta Utara - Tanjung Priok</option>
            </select>
      </div>

    <div class="col-md-4">
        <label for="kelas penerbangan">Kelas Kereta</label>
          <select class="form-control">
              <option>Ekonomi</option>
              <option>Bussines</option>
              <option>Eksekutif</option>
            </select>
      </div>

    <div class="col-md-4">
      <label for="Perjalanan">Perjalanan</label>
          <select class='form-control select2' id="trip-type" name="trip_type" required="">
              <option>Sekali Jalan</option>
              <option>Pulang Pergi</option>
            </select>
    </div>


    <div class="col-md-4">
        <label for="berangkat">Tanggal Berangkat</label>
        <input type="date" class="form-control" id="date-departing" name='start' value="30/01/2018" required="" type="text">
    </div>

    <div class="col-md-4">
        <label for="pulang">Tanggal Pulang</label>
        <input type="date" class="form-control" id="date-departing" name='start' value="30/01/2018" required="" type="text">
    </div>

    <div class="col-md-2">
        <label for="dewasa">Dewasa</label>
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
    </div>

    <div class="col-md-2">
        <label for="anak">Anak-Anak</label>
          <select class="form-control">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
    </div>

    <div class="col-md-4"><br>
        <button class="btn btn-primary">Cari Tiket Kereta</button>
    </div>

    </div>
    </form>

  </div>
  </div>
</div>

<hr class="half-rule">
 <!-- Services -->
 <section id="services">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Why Booking with EzGo?</h2>
              </div>
          </div>

        <div class="row text-center">
            <div class="col-md-4">
                <img src="images/bayar.png" alt="">
                <h4 class="service-heading">Berbagai Pilihan Pembayaran</h4>
                <p class="text-muted">Lebih fleksibel dengan berbagai metode pembayaran dari ATM Transfer, Credit Card, hingga Internet Banking.</p>
            </div>

          <div class="col-md-4">
              <img src="images/search.png" alt="">
              <h4 class="service-heading">Hasil Pencarian paling Ekstensif</h4>
              <p class="text-muted">Dengan pencarian satu klik, temukan tiket Pesawat dan Kereta ke 100.000 rute di seluruh Asia Pasifik dan Eropa untuk penerbangan.</p>
          </div>

          <div class="col-md-4">
              <img src="images/pay.png" alt="">
              <h4 class="service-heading">Transaksi Aman Dijamin</h4>
              <p class="text-muted">Keamanan dan privasi transaksi online Anda dilindungi, anda akan Menerima konfirmasi instan dan e-ticket langsung di email anda.</p>
          </div>

        </div>
      </div>
    </section>


    <hr class="half-rule">

     <!-- Partners -->
 <section id="partners">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Our Partners</h2>
              <img src="images/maskapai2.png" alt="">
            </div>
        </div>

        <hr class="half-rule">

 <!-- Contact -->
 <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Contact Us</h2>
              </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <hr class="half-rule">
@endsection
