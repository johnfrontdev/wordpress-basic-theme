<footer class="footer">
<nav class="navbar-footer d-flex justify-content-center">
  <ul class="navbar navbar-ft">
    <li class="nav-item">
      <a class="nav-link" href="#contact">contact us</a>
    </li>
    <li class="nav-item">
      <span class="separator"></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#faq">faq</a>
    </li>
    <li class="nav-item">
      <span class="separator"></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#sitemap">site map</a>
    </li>
    <li class="nav-item">
      <span class="separator"></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#privacy">privacy policy</a>
    </li>
    <li class="nav-item">
      <span class="separator"></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cookies">cookies policy</a>
    </li>
    <li class="nav-item">
      <span class="separator"></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#legalnotice">legal notice</a>
    </li>
  </ul>
</nav>
        <div class="footer-info">
          <div class="logo-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo-footer.png" alt="" class="imgfluid"></div>
          <div class="social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.png" alt="" class="img-fluid"></div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js
"></script>

<script>
      var splide = new Splide("#splide", {
        type: 'slide',
        perPage: 3,
        start: 0,
        gap: '2rem',
        breakpoints: {
      800: {
        perPage: 2,
        gap: '.7rem',
       
      },
      640: {
        perPage: 1,
        gap: '-4rem',
      },
    },
    });

 
    splide.mount();
    var splide2 = new Splide("#blog", {
        type: 'slide',
        perPage: 3,
        start: 0,
        gap: '2rem',
        breakpoints: {
      800: {
        perPage: 2,
        gap: '.7rem',
       
      },
      640: {
        perPage: 1,
        gap: '-4rem',
      },
    },
    });

 
    splide2.mount();


  
</script>
<?php wp_footer(); ?>
</body>
</html>