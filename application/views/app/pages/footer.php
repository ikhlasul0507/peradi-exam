<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Apps Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" id="nav-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" id="nav-dark" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
   
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>assets/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>assets/assets/js/plugins/smooth-scrollbar.min.js"></script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }


    var valueNavbar = localStorage.getItem("nav-color");
    if (valueNavbar == null) {
        sidebarType(document.getElementById("nav-white"));
    } else if (valueNavbar ==  'bg-white'){
        sidebarType(document.getElementById("nav-white"));
    } else if (valueNavbar ==  'bg-default'){
        sidebarType(document.getElementById("nav-dark"));
    }
    
    document.getElementById("nav-white").addEventListener("click", function() {
        localStorage.setItem('nav-color', document.getElementById("nav-white").getAttribute("data-class"));
    });
    document.getElementById("nav-dark").addEventListener("click", function() {
        localStorage.setItem('nav-color', document.getElementById("nav-dark").getAttribute("data-class"));
    });

    function sidebarType(a) {
    var parent = a.parentElement.children;
    var color = a.getAttribute("data-class");
    var body = document.querySelector("body");
    var bodyWhite = document.querySelector("body:not(.dark-version)");
    var bodyDark = body.classList.contains('dark-version');

    var colors = [];

    for (var i = 0; i < parent.length; i++) {
      parent[i].classList.remove('active');
      colors.push(parent[i].getAttribute('data-class'));
    }

    if (!a.classList.contains('active')) {
      a.classList.add('active');
    } else {
      a.classList.remove('active');
    }

    var sidebar = document.querySelector('.sidenav');

    for (var i = 0; i < colors.length; i++) {
      sidebar.classList.remove(colors[i]);
    }

    sidebar.classList.add(color);


    // Remove text-white/text-dark classes
    if (color == 'bg-white') {
      var textWhites = document.querySelectorAll('.sidenav .text-white');
      for (let i = 0; i < textWhites.length; i++) {
        textWhites[i].classList.remove('text-white');
        textWhites[i].classList.add('text-dark');
      }
    } else {
      var textDarks = document.querySelectorAll('.sidenav .text-dark');
      for (let i = 0; i < textDarks.length; i++) {
        textDarks[i].classList.add('text-white');
        textDarks[i].classList.remove('text-dark');
      }
    }

    if (color == 'bg-default' && bodyDark) {
      var textDarks = document.querySelectorAll('.navbar-brand .text-dark');
      for (let i = 0; i < textDarks.length; i++) {
        textDarks[i].classList.add('text-white');
        textDarks[i].classList.remove('text-dark');
      }
    }

    // Remove logo-white/logo-dark

    if ((color == 'bg-white') && bodyWhite) {
      var navbarBrand = document.querySelector('.navbar-brand-img');
      var navbarBrandImg = navbarBrand.src;

      if (navbarBrandImg.includes('logo-ct.png')) {
        var navbarBrandImgNew = navbarBrandImg.replace("logo-ct", "logo-ct-dark");
        navbarBrand.src = navbarBrandImgNew;
      }
    } else {
      var navbarBrand = document.querySelector('.navbar-brand-img');
      var navbarBrandImg = navbarBrand.src;
      if (navbarBrandImg.includes('logo-ct-dark.png')) {
        var navbarBrandImgNew = navbarBrandImg.replace("logo-ct-dark", "logo-ct");
        navbarBrand.src = navbarBrandImgNew;
      }
    }

    if (color == 'bg-white' && bodyDark) {
      var navbarBrand = document.querySelector('.navbar-brand-img');
      var navbarBrandImg = navbarBrand.src;

      if (navbarBrandImg.includes('logo-ct.png')) {
        var navbarBrandImgNew = navbarBrandImg.replace("logo-ct", "logo-ct-dark");
        navbarBrand.src = navbarBrandImgNew;
      }
    }
  }

  var txt="Anda Sedang Login !!! ";
  var speed=300;
  var refresh=null;
  function action() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  refresh=setTimeout("action()",speed);}action();

  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>assets/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
 
</body>

</html>