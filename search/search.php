<?php session_start(); ?>

<html>
    <head>
            <title>search profile</title>
            
          <style>
               button{border-radius:25px;background-color:white;border:1px solid rgb(0,133,161);font:20px impact;color:rgb(0,133,161);width:100px}
               button:hover{background-color:rgb(0,133,161);color:white;}
          </style>

          <script src='../include/jquery/jquery.js'></script>
          <script>
              $(document).on('click','.user_info',function(){window.open('../portfolio/portfolio.php?profile_id='+$(this).attr('id'));});
   
              $(document).on('click','.form_submit',function(){
                                                                 var data=$('#myform :input').serializeArray();
                                                                 var action=$('#myform').attr('action'); console.log(action);
                                                                 $.post(action,data,function(info,status){alert('done');});

                                                                 var load_data=[{'name':'search_input','value':$('input').val()}];
                                                                 $('#result').load('search_result.php',load_data);
                                                               })
     
              $(document).ready(function(){
                                           $('input').change(function(){
                                                                            var data=[{'name':'search_input','value':$(this).val()}];
                                                                            //$.post('search_result.php',data,function(info){document.getElementById('result').innerHTML=info;})                        
                                                                            $('#result').load('search_result.php',data);
                                                                          })

                                         })

          </script> 

    </head>

    <body>

       <?php  include('header/header.php'); ?>

       <div align='center' style='margin-left:auto;margin-right:auto;margin-top:10px;margin-bottom:10px;background-color:rgb(0,133,161);width:70%;height:500px;border-radius:25px;overflow:scroll'>

            <h1 style='font:40px impact;color:white'>Search Profiles</h1><div>
            <input type='text' id='search' placeholder="search here" style='width:46%;border-radius:25px;height:40px;padding:10px;font:20px impact'></input>

            <div id='result' >

 
            </div>

        </div></div>


        <?php include('footer/footer.php'); ?> 

   </body>

</html>
