
<x-head></x-head>
<body>

  <!-- ======================== NAVBAR ======================== -->
  <x-navbar></x-navbar>

  <!-- ======================== CONTENT ======================== -->
  <div style="margin-top: 68px">
  <div class="kaos-layout">
  <div class="hero">
    <div class="mockup">
     <img
     class="kaos"
    id="shirtImage"
    src="{{ asset($colors[0]['image']) }}"
    alt="">
  <!-- <canvas id="myCanvas" width="500" height="300"></canvas> -->
   </div>
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
<div class="color-buttons">

    @foreach($colors as $index => $color)

        <div
            class="color-btn {{ $index == 0 ? 'active' : '' }}"

            style="background: {{ $color['hex'] }};"

            data-image="{{ asset($color['image']) }}"

            title="{{ $color['name'] }}">
        </div>

    @endforeach

</div>
   
  </div>
</div>
</div>

  <script src="{{ asset('js/script.js') }}">
    
  </script>
  <script>
 const shirtImage = document.getElementById("shirtImage");

const buttons = document.querySelectorAll(".color-btn");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        document.querySelector(".color-btn.active")
            ?.classList.remove("active");

        button.classList.add("active");

        shirtImage.src = button.dataset.image;

    });

});

  </script>
</body>
</html>