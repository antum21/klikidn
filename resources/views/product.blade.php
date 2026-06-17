
<x-head></x-head>
<body>

  <!-- ======================== NAVBAR ======================== -->
  <x-navbar></x-navbar>
  <!-- ======================== HERO ======================== -->

  <h1>Our Products</h1>
  <!-- ======================== CARDS ======================== -->
  <section class="cards-section">
    <div class="cards-header">

    </div>

    <div class="cards-grid" id="cardsGrid">
<a href="/kaos">
      <!-- Card 1 -->
      <div class="promo-card"
           data-img=""
           onclick="/kaos">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="img/kaos.png" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">Cotton Combed 24s</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>

</a>
<a href="/pdh">
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="img/pdh.png" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">PDH</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>
    </a>
    <a href="/rompi">
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="img/rompi.png" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">Rompi</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>
</a>
    </div>
    </div>
     
  </section>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>