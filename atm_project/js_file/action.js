$(document).ready(function(){

//request to summit
  $('#atm_tranfer').on('submit', function(event){
            event.preventDefault();
            var atm_input = $('#atm_input').val();
            $.ajax({
                url:"code/process.php",
                method:"POST",
                data:{atm_input:atm_input},
                success:function(data) {
                    if (data != '') {
                        $('#atm_tranfer')[0].reset();
                        $('#display_callback_msg').html(data);
                        
                    }
                }

            })
        })
});