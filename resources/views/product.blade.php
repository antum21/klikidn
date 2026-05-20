
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

      <!-- Card 1 -->
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">Cotton Combed 24s</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">Cotton Combed 24s</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>
      <div class="promo-card"
           data-img="{{ asset('img/banner.png') }}"
           onclick="activateCard(this)">
        <div class="card-img-wrap">
          <div class="card-img-placeholder">
            <img src="" alt="" srcset="">
          </div>
          <span class="card-tag">Promo</span>
        </div>
            <div class="card-body">
                <div class="card-title">Cotton Combed 24s</div>
                <div class="card-sub">Mulai Dari Rp 60.000.</div>
            <button class="card-cta">Lihat Detail →</button>
            </div>
      </div>
    </div>
    </div>
     
  </section>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>