
<x-head></x-head>
<body>

  <!-- ======================== NAVBAR ======================== -->
  <x-navbar></x-navbar>

  <!-- ======================== CONTENT ======================== -->
  <div style="margin-top: 68px">
  <div class="kaos-layout">
  <div class="hero">
    <!-- <img src="img/kaos.png" alt="" srcset="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:contain;"> -->
  
    <div class="hero-text">
      <h1>Preview <span>Kaos</span></h1>
      <p>Atur warna & desain baju kamu</p>
    </div>
    <div class="hero-badge">CUSTOM<br>KAOS<br>STUDIO</div>
  </div>
  <div class="cards-section">

    <div class="cards-header">
      <h2>Pengaturan Warna</h2>
      <span>Pilih warna kaos kamu</span>
    </div>

    <!-- Canvas preview + controls dalam grid -->
    <div class="cards-grid">

      <!-- Card: Canvas Preview -->
      

      <!-- Card: Controls -->
      <div class="promo-card">
        <div class="card-body">

          <p class="card-title">Pilih Warna</p>

          <p class="card-sub" style="margin-top: 12px;">Warna bebas:</p>
          <input type="color" id="colorPicker" value="#ffffff"
            style="width:100%; height:44px; border:none; border-radius:var(--radius-sm); cursor:pointer; margin-top:8px;">

          <p class="card-sub" style="margin-top: 16px;">Warna cepat:</p>
          <div id="colorContainer" class="color-container" style="margin-top:8px;"></div>

          <input type="text" id="colorNameInput" placeholder="Nama warna"
            style="display:none;">

        </div>
      </div>

    </div>
  </div>
</div>
</div>

  <script src="{{ asset('js/script.js') }}">
    
  </script>
</body>
</html>