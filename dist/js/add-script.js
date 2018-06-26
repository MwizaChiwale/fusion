    // -------   Mail Send ajax

     $(document).ready(function() {



        // form submit event
        $(document).on('submit','.form-signn', function(event) {

            event.preventDefault(); // prevent default form submit


                      var submit = 'add'; // submit button
                      var amount = $('#price').val(); // alert div for show alert message
                      var name = $('#name').val(); // alert div for show alert messagev
                      var poster = $('#poster').val(); // alert div for show alert messagev
            $.ajax({
                              url:"../../functions/add.php",
                              method:"POST",
                              data:{
                                  name:name,
                                  add:update,
                                  price:amount

                                  },
                              dataType:"html",
                              enctype:"multipart/form-data",
                              success:function(data){
                                 $('.msg').html(data);
                              }

                         });
        });
    });
