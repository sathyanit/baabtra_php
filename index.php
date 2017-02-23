<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/css/bootstrap.min.css">
<style>
.msg
{
	color:#ff0000;
}
</style>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="js/js/bootstrap.min.js"></script>


<style>
input[type=text],input[type=password],select
{
	border-radius:4px;
	
}

</style>
</head>

<body>

<div class="container-fluid">


	<div class="row hidden-xs hidden-sm" style="background-color:#3b5998;height=600px;">
	<div class="col-offset-0 col-md-7 col-sm-7" style="background-color:#3b5998;height=600px;">
        	<br>
			<img src="fb_logo.png" height="35" width="200"/>
            
         </div>
         <div class="col-md-offset-0 col-md-2 col-sm-2" style="background-color:#3b5998">
         	<label style="color:#ffffff" >Email or Phone</label><br />
				<input name="email" type="text"/>
				
			
         </div>
         <div class="col-md-offset-0 col-md-2 col-sm-2" style="background-color:#3b5998">
         	<label style="color:#ffffff"  >Password</label><br />
			<input name="password"  type="password" />
         </div>
		 <div class="col-md-offset-0 col-md-1 col-sm-1" style="background-color:#3b5998">
		 <br>
         	<input name="logincmd" class="btn btn-primary btn-xs" type="submit" value="LOGIN" id="loginbtn"/>
         </div>
     </div>
	 <div class="row hidden-xs hidden-sm" align="center">
    	<div class="col-offset-0 col-md-5 col-sm-5">
        	<h3>Connect with friends and the world around you on <br />Facebook.</h3><img src="fbgrp.png" />
         </div>
		 <div class="col-offset-0 col-md-7 col-sm-7">
        	<form action="validcheck.php" method="post" name="registrform" >
			
				<table align="center">
					<tr>
					<td>
					<h2>Create an account</h2>
					<h3>It's free and always will be</h3>
					</td>
					<tr>
					<div class="form-group">
					<td>
					<input type="text" name="fname"  placeholder="First Name"  class="form-control" id="pp"/>
					</td>
					<td>
						<label id="label1" class="msg">
						<?php
								if(isset($_GET['namemsg']))
								{
									echo $_GET['namemsg'];
								}
						?>
						</label>
					</td>
					</tr>
					<tr>
					<td>
					<input type="text" name="lname"  placeholder="Last Name" class="form-control"/>
					</td>
					<td>
						<label id="label2" class="msg">
						<?php
								if(isset($_GET['lnamemsg']))
								{
									echo $_GET['lnamemsg'];
								}
						?>
						</label>
					</td>
					</tr>
					<tr>
					<td>
                    <input type="text" name="mobile"  class="form-control" placeholder="Mobile number" size="45"/>
                    </td>
					<td>
						<label id="label3" class="msg">
						<?php
								if(isset($_GET['phonemsg']))
								{
									echo $_GET['phonemsg'];
								}
						?>
						</label>
					</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="emailid"  class="form-control" placeholder="Email" size="45" />
						</td>
						<td>
							<label id="label4" class="msg">
								<?php
								if(isset($_GET['emailmsg']))
								{
									echo $_GET['emailmsg'];
								}
								?>
							</label>
						</td>
					</tr>
					<tr>
					<td>
						<input type="password" name="passwrd"  class="form-control" placeholder="Password" size="45"/>
					</td>
					<td>
						<label id="label5" class="msg">
						<?php
								if(isset($_GET['passwrdmsg']))
								{
									echo $_GET['passwrdmsg'];
								}
								?>
						</label>
					</td>
					</tr>
					<tr>
					
					<td><label><b>Birthday</b></label></td>
					</tr>
					<tr>
					<td>
						<select name="day" >
							<option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
						<select name="month" >
							<option>Jan</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            <option>Apr</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>Jul</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
						 </select>
						<select name="year">
							<option>2000</option>
                            <option>2001</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
						 </select>
					<a href="">Why do I need to provide my <br /> date of birth?</a><br /></td>
					<td>
					<label id="label6" class="msg"></label>
					</td>
					</tr>
					<tr>
					<td>
					<input type="radio" name="gender" value="female" id="gender1" checked="checked" />Female
					<input type="radio" name="gender" value="male" id="gender2"/>Male
					</td>
					<td>
					<label id="label7"></label>
					</td>
					</tr>
					<tr>
					<td>By clicking Create an account,you agree to our<a href="">Terms</a>and that<br /> you have read our<a href="">Data Policy,</a>including our Cookie Use.</td>
					</tr> 
					<tr>
					<td><input type="submit" name="createbtn" value="Create an account" id="registerbtn" class="btn btn-success"/></td>
					</tr>
				</table>
				</form>
				</div>
         </div>
		 <div class="row hidden-md hidden-lg" align="center" style="background-color:#3b5998; height:600px;">
			<div class="col-sm-offset-0 col-xs-offset-0 col-sm-12 col-xs-12">
        	<form action="" method="post" name="registrform">
				<table align="center">
					<tr>
					<td>
					<img src="fb_logo.png" height="35" width="400"/>
					</td>
					</tr>
					<tr>
					<tr>
					<div class="form-group">
					<td>
					<input type="text" name="user"  placeholder="Email" size="20px" class="form-control"/>
					</td>
					</tr>
					<tr>
					<td>
					<input type="text" name="pswd"  placeholder="Password"size="20px" class="form-control"/>
					
					</td>
					</tr>
					<tr>
					</tr>
					<tr>
					<td><input type="submit" value="Login" align="center" id="loginbtn" class="btn btn-primary"/></td>
					</tr>
					<tr>
					<td>
					<font style="color:#ffffff">New to Facebook?</font>
					<input type="submit" value="Create an account" id="registerbtn" class="btn btn-success" name="loginbtn"/></td>
					</tr>
					</table>
				</div>
			</div>
	</div>
      
         
</div>
</body>
</html>