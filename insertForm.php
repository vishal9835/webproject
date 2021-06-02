<!DOCTYPE html>
<html>
<head>

	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<br>

		<h1 class="text-white bg-dark text-center">
			Register Form For Events
			
		</h1>
		<div class="col-lg-8 m-auto d-block">

		<form action="upload.php" method="post" enctype="multipart/form-data">


			<div class="form-group">
				<td><b>REGISTRAION NO:</b></td>
                 <td><input type="tel" name="registration"  class="form-control" required /></td>
		</div>


			<div class="form-group">
				<td><b>Student Name:</b></td>
                 <td><input type="text" name="username"  class="form-control" required /></td>
		</div>
             
             <div class="form-group">
             	<td><b>Father's Name:</b></td>
                 <td><input type="text" name="father"  class="form-control" required /></td>
             </div>

              <div class="form-group">
              <td><b>Mother's Name:</b></td>
              <td><input type="text" name="mother"  class="form-control" required /></td>
            </div>

		
			<div class="form-group">
			<td><b>Profile Pic:</b></td>	
			<input type="file" name="file" id="file" class="form-control" >
		</div>

<div class="form-group">
<td><b>D.O.B:</b></td>
<td>
<select name="day" required />
<option>Day</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
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
</select>
<select name="month" required />
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>Sept</option>
<option>Oct</option>
<option>Nov</option>
<option>Dce</option>
</select>
<select name="year" required />
<option>Year</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</td>
</div>
<div class="form-group">
<td><b>SELECT COURSE:</b></td>
<td>
<select name="abc" required />
<option></option>
<option>DCA</option>
<option>ADCA</option>
<option>TALLY</option>
<option>NETWORKING</option>
<option>WEB DEVELOPMENT</option>
</select>
</td>
</div>
<div class="form-group">
<td><b>GENDER:</b></td>
<td>
<select name="gender" required />
<option></option>
<option>male</option>
<option>female</option>
</select>
</td>
</div>
<div class="form-group">
	<td><b>CATEGORY:</b></td>
<td>
<select name="category" required/>
<option></option>
<option>GENERAL</option>
<option>BC1</option>
<option>BC2</option>
<option>ST/SC</option>
</select>
</td>
</div>
<div class="form-group">
<td><b>AADHAAR NUMBER:</b></td>
<td><input type="number" name="aadhar" class="form-control" required /></td>
</div>
<div class="form-group">
<td><b>Mobile number:</b></td>
<td><input type="tel" name="mobile"  value="" class="form-control" required /></td>
</div>
<div class="form-group">
<td><b>Email id:</b></td>
<td><input type="t" name="email" class="form-control"></td>
</div>
<div class="form-group">
<td><b>ADDRESS:</b></td>
<td>
<input type="t" name="address" class="form-control" required />
</td>
</div>
<div class="form-group">
<td><b>LOCALITY:</b></td>
<td>
<input type="t" name="locality" class="form-control" required/>
</td>
</div>
<div class="form-group">
<td><b>CITY:</b></td>
<td>
<input type="t" name="city" class="form-control" required />
</td>
</div>
<div class="form-group">
<td><b>STATE:</b></td>
<td>
<input type="t"name="state" class="form-control" required />
</td>
</div>
<div class="form-group">
<td><b>PINCODE:</b></td>
<td>
	<input type="t"name="pincode" class="form-control" required />
</td>
</div>


	



		
 <button onclick="popup()" type="submit" name="submit" value="submit" class="btn btn-success">SUBMIT</button>
<script>
	function popup(){
		alert("Are you sure ? you want to submit the form");
	}
</script>

		<td col="8"><input type="submit" name="submit" value="print" onclick="print()" class="btn btn-success">
			
	</td>
</tr>
		</form>
	</div>

</body>
</html>