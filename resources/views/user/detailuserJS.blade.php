<script>
    $(document).ready(function() {
       $('.detailBtn').on('click', function() {
          const username = $(this).data('username');
          const password = $(this).data('password');
          const alamat = $(this).data('alamat');
          const golDarah = $(this).data('goldarah');
          const role = $(this).data('role');
          const imageUser = $(this).data('imageuser');
    
          $('#username').text(username);
          $('#role').text(role);
          $('#password').text(password);
          $('#alamat').text(alamat);
          $('#golDarah').text(golDarah);
    
          // Atur nilai preview image
          $('#previewImage').attr('src', 'img/' + username + '.png');
       });
    });
    </script>
    