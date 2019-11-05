<?php session_start ?>

<?php
        echo"<script>$('#insert').click(function(event)
                                                                       { console.log('ll');
                                                                         event.preventDefault();
                                                                         var data=$('#myform :input').serializeARRAY();
                                                                         $.post($('#myform').attr('action'),data,function(data){window.alert(data);})
                                                                           $('#myform')[0].reset();
                                                                       });
                                                   $('#myform').submit(function(){return false;})</script>";

               echo "   >";
 

?>
