 function validation()
                            {
                              if($('#first_name').val()=='' || $('#last_name').val()==' ' || $('#user_name').val()==' ' || $('#email').val()==' ' || $('#phoneno').val()==' ' || $('#password1').val()==' ' || $('#password2').val()==' ' )
                                { 
                                   window.alert('complete all mendatory columns');
                                   return false;
                                }
                              else
                                {
                                  if(($('#email').val()).includes('@')==false || ($('#email').val()).includes('.com')==false)
                                       {
                                         window.alert('e-mail is invalid');
                                         return false;
                                       }
                                  else 
                                       {
                                         if(($('#phoneno').val()).length!=10)
                                            {
                                              window.alert('phone no. is invalid');
                                              return false;
                                            }
                                         else
                                            {
                                               if(($('#password1').val()).length<8)
                                                 {
                                                  window.alert('password length less than 8');
                                                  return false;
                                                 }
                                               else
                                                 {
                                                   if($("#password1").val()!=$("#password2").val())
                                                     {
                                                        window.alert('enter password again');
                                                     } 
                                                   else
                                                     {
                                                       return true;
                                                     }
                                                 }
                                            }
                                       }
                                }

                            }
                   $(document).ready(function()
                                              { 
                              $('#myform input[type="text"],input[type="radio"],input[type="password"],input[type="e-mail"],input[type="date"],textarea').val('');
                                            
                                                 $('#insert').click(function(event)
                                                                   {
                                                                     if(validation()==true)
                                                                          {$('#submit').click();}
                                                                   })
                                                 
                                                 $('#reset').click(function(event)
                                                                   {
                                     $('#myform input[type="text"],input[type="radio"],input[type="password"],input[type="e-mail"],input[type="date"],textarea').val('');
                                                                    })
                                                                 
                                                                   
                                              })
