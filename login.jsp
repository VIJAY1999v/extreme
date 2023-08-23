<script>
         function validateform1()
         {
                alert(hai);
         var username=document.myform.username.value;
         var password=document.myform.password.value;
         if(username==null||username==" ")
         { 
         alert("name should not be blank")
         return false;
         }
         else(password.length<6)
         {
         alert("password should be atleast 6 char long");
         return false;
         }
        }
 </script>