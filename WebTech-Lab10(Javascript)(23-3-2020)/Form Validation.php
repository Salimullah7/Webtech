<html lang="en-US">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=0.1,shrink-to-fit=no">
	 <link type="text/css" href="/css" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <title>Javascript Form Validation</title>
	    <style>
		 </style>
		  </head>
		   <body>
		    <div class="container">
			 <div class="row justify-content-center">
			  <div class="col-sm-6 col-md-6 col-lg-6">
			   <div class="card">
			    <div class="card-body">
				 <form method="post" name="myForm" onsubmit="return validateForm();" >
                  <div class="form-group">
                   <label for="exampleInputName1">Full name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                     </div> 
				      <div class="form-group">
                       <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                              </div>
	                                       <button type="submit" name="login" class="btn btn-primary">Submit</button>

											</form>
											<script>
											
											function validateForm()
											{
												let validation = 
												{
													 name:document.myForm.name.value,
													 email:document.myForm.email.value,
													 password:document.myForm.password.value
												}
												let msg = new Array("Name required","Email required","Password required","Password too short")
												if(validation.name == null || validation.name == "")
												{
													alert(msg[0]);
													return false;
												}
												else if(validation.email == null || validation.email == "")
												{
													alert(msg[1]);
													return false;
												}
												else if(validation.password == null || validation.password == "")
												{
													alert(msg[2]);
													return false;
												}
												else if(validation.password.length <= 4 )
												{
													alert(msg[3]);
													return false;
												}
											}
												
											</script>
											</body>
											</html>
  </body>
 </html>