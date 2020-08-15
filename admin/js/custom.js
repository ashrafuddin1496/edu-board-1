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
  });
})(jQuery)