$(document).ready(function(){
//mouseover to reflet the casr type
     $('#form_box').on('mouseover', function() {
              var atm_input = $('#atm_input').val();
              var pass = "card_type";
                $.ajax({
                    url:"code/atm_type.php",
                    method:"POST",
                    data:{atm_input:atm_input, pass:pass},
                    success:function(data) {
                        $('#display_atm_type').html(data);                         
                    }

                })
        });
//on key up to reflect the card type
      $("#atm_input").keyup(function(){
                var atm_input = $("#atm_input").val();
                var pass = "card_type";        
                $.ajax({
                    url:"code/atm_type.php",
                    method:"POST",
                    data:{atm_input:atm_input, pass:pass},
                    success:function(data) {
                        if (data != '') {
                            $('#display_atm_type').html(data);                         
                        }
                    }

                })
       });
      
//reflect card type
      $('#atm_input').on('paste', function() {
              var atm_input = $("#atm_input").val();
              var pass = "card_type";
                $.ajax({
                    url:"code/atm_type.php",
                    method:"POST",
                    data:{atm_input:atm_input, pass:pass},
                    success:function(data) {
                        $('#display_atm_type').html(data);                         
                    }

                })
        });
//reflect the number of input
 $("#atm_input").keyup(function(){
                var atm_input = $("#atm_input").val();
                var pass = "input_length";
                $.ajax({
                    url:"code/atm_type.php",
                    method:"POST",
                    data:{atm_input:atm_input, pass:pass},
                    success:function(data) {
                        if (data != '') {
                            $('#display_input_number').html(data);                         
                        }
                    }

                })
       });

      $('#atm_input').on('blur', function() {
            $('#display_atm_type').html("");   
            $('#display_input_number').html("");          
        });

});
//Disable the right click of the text input
document.getElementById('atm_input').addEventListener("contextmenu", function(e){
  e.preventDefault();
}, false);
