(function ($){
  $(document).ready(function () {

      //Dash menu active

      // $(document).on('click','ul#dashmenu li',function () {
      //    //alert();
      //     $('ul#dashmenu li').removeClass('active');
      //     $(this).addClass('active');
      // });


        // Add new user modal
      $(document).on('click','#add_user_btn',function() {

          //alert('test purpose');
          $('#add_user_modal').modal('show');

          return false;   // to remove # from the url

      });


      //All user data fetch
      function allUsers() {
          $.ajax({

              url : 'templates/ajax/user_all.php',
              success : function (data) {
                  //alert(data);
                  $('tbody#all_users_tbody').html(data);
              }
          });
      }

      allUsers();

      // Add user form submit
      $(document).on('submit','form#add_user_form',function(event) {
          event.preventDefault();
         // alert('Test');
          $.ajax({
              url : 'templates/ajax/user_add.php',
              method : "POST",
              data : new FormData(this),
              contentType : false,
              processData : false,
              success : function (data) {
                 // alert(data);

                  $('form#add_user_form')[0].reset();
                  $('#add_user_modal').modal('hide');
                  $('.mess').html(data);
                  allUsers();

              },

          });

      });






  });
})(jQuery)