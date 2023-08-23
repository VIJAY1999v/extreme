<html>
    <head>
        <title>CABLE TV SYSTEM</title>
     
        </style>
        <link rel="stylesheet"
		href="style.css">
           </head>
        <body>
          <script>
            function valid()
            {  
            var username=document.myform.username.value;  
            var password=document.myform.password.value; 
            if (username==null || username==""||username.length<6)
            {  
              alert("Name can't be blank and length should be atleast 6 char");  
              return false;  
            }
            else if(password.length<6)
            {  
              alert("Password must be at least 6 characters long.");  
              return false;  
              } 
             }
              </script>    
        <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
          <div class="col-md-6 d-none d-md-block">
            <img src="sssss.png" class="img-fluid" style="min-height:100%;" />
          </div>
          <div class="col-md-6 bg-white p-5">
            <h4 class="pb-3">OPERATOR LOGIN </h4>
            <div class="form-style">
              <form name="myform" method="post" action="fanboy.html" onsubmit="return valid()">
                <div class="form-group pb-3">
                  <input type="text" name="username" placeholder="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group pb-3">
                  <input type="password"name="password" placeholder="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex align-items-center justify-content-between">
      												
            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
                  <div><a href="ice.html">Forget Password?</a></div>
                </div>
                <div class="pb-2">
                  <input type="submit" class="btn btn-dark w-100 font-weight-bold mt-2" font-size=25px >
                </div>
              </form>
        </body>
</html>

