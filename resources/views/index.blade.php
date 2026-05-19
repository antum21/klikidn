
<x-head></x-head>
<body>

  <!-- ======================== NAVBAR ======================== -->
  <x-navbar></x-navbar>
  <!-- ======================== HERO ======================== -->
  <section class="hero" id="hero">
    <!-- Banner image (diganti saat card diklik) -->
  <img class="slide-img active" src="{{ asset('img/banner.png') }}" alt="Slide 1" />
<img class="slide-img" src="{{ asset('img/banner2.jpg') }}" alt="Slide 2" />
<img class="slide-img" src="{{ asset('img/banner3.jpg') }}" alt="Slide 3" />

<!-- Gradient bawah ke atas -->
<div class="hero-gradient"></div>

<!-- Tombol panah -->
<button class="slide-btn prev" onclick="prevSlide()">‹</button>
<button class="slide-btn next" onclick="nextSlide()">›</button>

  <div class="slide-dots" id="slideDots"></div>

    <div class="hero-text">
      <h1>KLIK<br/><span>INDONESIA</span><br/>WUJUDKAN<br/>EKSPEKTASIMU!</h1>
      <p>Custom Kaos, Rompi, PDH &amp; DLL</p>
    </div>

    <div class="hero-badge">GET<br/>STARTED<br/>FREE</div>

    <div class="hero-arrow">↗</div>
  </section>

  <!-- ======================== CARDS ======================== -->
  <section class="cards-section">
    <div class="cards-header">
      <h2>Promo &amp; Event</h2>
      <span>— Klik untuk lihat detail</span>
    </div>

    <div class="cards-grid" id="cardsGrid">

      <!-- Card 1 -->
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="img/banner.png" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
        <div class="card-body">
          <div class="card-title">Kaos Custom Murah</div>
          <div class="card-sub">Cetak kaos dengan desain sendiri, harga terjangkau mulai dari Rp 45.000/pcs. Minimum order 12 pcs.</div>
          <button class="card-cta">Lihat Detail →</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="promo-card"
           data-color="#CC2200"
           data-img="{{ asset('img/banner2.jpg') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap" style="background: linear-gradient(135deg, #CC2200, #991100);">
          <img src="{{ asset('img/banner2.jpg') }}" alt="" srcset="">
          <span class="card-tag">Event</span>
        </div>
        <div class="card-body">
          <div class="card-title">Pameran UMKM Sulsel 2026</div>
          <div class="card-sub">Klik Indonesia hadir di Pameran UMKM Sulawesi Selatan. Kunjungi booth kami dan dapatkan diskon eksklusif!</div>
          <button class="card-cta">Lihat Detail →</button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="promo-card"
            data-img="{{ asset('img/banner3.jpg') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap" style="background: linear-gradient(135deg, #006622, #004411);">
          <<img src="{{ asset('img/banner3.jpg') }}" alt="" srcset="">
          <span class="card-tag">New</span>
        </div>
        <div class="card-body">
          <div class="card-title">PDH &amp; Rompi Organisasi</div>
          <div class="card-sub">Custom PDH, rompi, dan seragam organisasi sekolah maupun kampus. Bordir &amp; sablon berkualitas tinggi.</div>
          <button class="card-cta">Lihat Detail →</button>
        </div>
      </div>

    </div>
  </section>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>