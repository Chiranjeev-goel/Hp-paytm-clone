
<!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>  </title>  
    <style>   
         
    body{margin-top:200px;}
 .form-control:not(textarea) {
	 height: 6px;
 }
 button {   
        background-color: blue;   
        width: 100%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
            }   
    form {   
            border: 1px solid #f1f1f1;   
        }   
    input[type=text], input[type=password] {   
            width: 30%; 
            margin: 8px 10;  
            padding: 10px 10px;   
            display: inline-block;   
            border: 2px solid blue;   
            box-sizing: border-box;
	}
 .form-control {
	 padding: 18px 3px;
	 border: 10px solid #dbe2e8;
	 border-radius: 22px;
	 background-color: #fff;
	 color: blue;
	 font-family: "Maven Pro",Helvetica,Arial,sans-serif;
	 font-size: 14px;
	 /* -webkit-appearance: none;
	 -moz-appearance: none;
	 appearance: none; */
 }
 .form-group label {
	 margin-bottom: 118px;
	 padding-left: 118px;
	 font-size: 25px;
	 font-weight: 500;
	 cursor: pointer;
 }
 
 
 .form-text {
	 padding-left: 2px;
 }
 .text-muted {
	 color: red !important;
 }

    </style>   

 
 
 <div class="container padding-bottom-3x mb-2">
	 <div class="row justify-content-center">
		 <div class="col-lg-8 col-md-10">
			 <h2>Forgot your password?</h2>
			 <p>Change your password in three easy steps. This helps to keep your new password secure.</p>
			 <ol class="list-unstyled">
				 <li><span class="text-primary text-medium">1. </span>Fill in your email address below.</li>
				 <li><span class="text-primary text-medium">2. </span>We'll email you a temporary code.</li>
				 <li><span class="text-primary text-medium">3. </span>Use the code to change your password on our secure website.</li>
			 </ol>
			 <form class="card mt-4">
				 <div class="card-body">
					 <div class="form-group">
						 <label for="email-for-pass">Enter your email address</label>
						 <input class="form-control" type="text" id="email-for-pass" required=""><small class="form-text text-muted">Type in the email address you used when you registered. Then we'll email a code to this address.</small>
					 </div>
				 </div>
				 <div class="card-footer">
					 <button class="btn btn-primary" type="submit">Get New Password</button>
				 </div>
			 </form>
		 </div>
	 </div>
 </div>
 
 
 