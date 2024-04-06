
  <!-- jQuery -->
  <script src="<?php echo ADMIN_URL ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo ADMIN_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="<?php echo ADMIN_URL ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo ADMIN_URL ?>dist/js/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="<?php echo ADMIN_URL ?>plugins/filterizr/jquery.filterizr.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({
        gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
    function showSuccessMessage() {
    var alertMessage = document.getElementById('alertMessage');
    alertMessage.style.display = 'block'; // Hiển thị thông báo

    setTimeout(function() {
      alertMessage.style.display = 'none'; // Ẩn thông báo sau 3 giây
    }, 2000); 
  }

  // Gọi hàm showSuccessMessage khi đăng nhập thành công
  showSuccessMessage();
 
  </script>

<script>
  // Lấy tất cả các phần tử có lớp "nav-link"
  var navLinks = document.querySelectorAll('.nav-link');

  // Lặp qua từng phần tử và thêm sự kiện mouseover
  navLinks.forEach(function(navLink) {
    navLink.addEventListener('mouseover', function(event) {
      // Loại bỏ lớp "active" khỏi tất cả các phần tử có lớp "nav-link"
      navLinks.forEach(function(link) {
        link.classList.remove('active');
      });

      // Thêm lớp "active" vào phần tử được di chuột qua
      this.classList.add('active');
    });
  });
</script>

