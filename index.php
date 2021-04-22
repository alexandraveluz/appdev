<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Biryani' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
</head>

<?php

include 'function.php'; 

?>

<form action="" method="POST" id="myForm">

<body class="outer">
	<div class="background2">
		<img class="logo" src="images/logo.png" width="30px">
		<h4 class="logo-title">Company Script</h4>
		
		<center>
			<h4 class="title1"><b>C O M P A N Y &nbsp;S C R I P T</b></h4>
			<h4 class="title2">123   Main Street, Anytown  Philippines </h4>
			<h4 class="title3">555 - 555 - 555  || johndoe@gmail.com</h4>
		</center>
		
	</div>
	<div class="background3">
		



					<!--EMPLOYEE PERSONAL DATA-->
		<div class="info1">
			<div class=sub-title1>
				<p>E M P L O Y E E &nbsp; P E R S O N A L &nbsp;D A T A</p>
				
			</div>


			<div class=div1>
				EMPLOYEE NUMBER<br>
					<input type="text" name="employee_number" class="input1" size="14" value="<?php echo $employee_number; ?>" id="employee_number">
				
			</div>

			<div class=div2>
				LASTNAME<br>
					<input type="text" name="lastname" class="input" size="16"  value="<?php echo $lastname; ?>" id="lastname">
				
			</div>

			<div class=div3>
				FIRSTNAME<br>
					<input type="text" name="firstname" class="input" size="17" value="<?php echo $firstname; ?>" id="firstname">
			</div>

			<div class=div4>
				MIDDLENAME<br>
					<input type="text" name="middlename" class="input" size="17"  value="<?php echo $middlename; ?>" id="middlename">
			</div>

			<div class=div5>
				<label class="civil">CIVIL STATUS<br></label>
					<input type="text" name="civilstatus" class="input" size="10"  value="<?php echo $civilstatus; ?>" id="civilstatus">
			</div>

			<div class=div6>
				<label class="civil">DESIGNATION<br>
					<input type="text" name="designation" class="input" size="17"  value="<?php echo $designation; ?>">
			</div>

			<div class=div7>
				<label class="civil">NUMBER OF RESPONDENT(s)<br>
					<input type="text" name="number_of_respondent" class="input" size="17"  value="<?php echo $number_of_respondent; ?>">
			</div>

			<div class=div8>
				<label class="civil">DEPARTMENT<br>
					<input type="text" name="department" class="input" size="17"  value="<?php echo $department; ?>">
			</div>

			<div class=div9>
				<label class="civil">EMPLOYEE STATUS<br>
					<input type="text" name="employee_status" class="input" size="17"  value="<?php echo $employee_status; ?>">
			</div>
			

			<div class="div10">
				PAYDATE<br>
					<input type="date" id="start" name="paydate"  min="2019-01-01" max="2022-12-31"  value="<?php echo $paydate; ?>">
	  	    </div>



		</div>

					<!--IMAGE INSERT-->
		<div class="sub-info2">
			<image src="images/icon.png" class="icon">
			<button type="submit" value="BROWSE" class="button-submit">B R O W S E</button>
		</div>


							   <!--BASIC PAY-->
		<div class="sub-info3">
			<div class=sub-title2>
				<p>B A S I C  &nbsp; P A Y</p>

					<div class="div11">
						RATE / HOUR<br>
							<input type="text" name="rate_hour" class="input" Size="17" value="<?php echo$rate_hour; ?>"/>
	  	  			</div>

	  	  			<div class="div12">
						NO. OF HOURS / CUT OFF<br>
							<input type="text" name="no_of_hour" class="input" size="17" value="<?php echo $no_of_hour ;?>">
	  	  			</div>


	  	  			<div class="div13">
						INCOME PER CUT OFF<br>
							<input type="text" name="income_per_cut_off" class="input-total" size="17" value=" <?php echo $income_per_cut_off.".00";?>"disabled>
	  	  			</div>
			</div>
		</div>
                    


		<div class="sub-info4">
			<div class=sub-title3>
				<p>R E G U L A R   &nbsp; D E D U C T I O N</p>
				
					<div class="div14">
						SSS CONTRIBUTION<br>
							<input type="text" placeholder="0.00" name="sss_contribution" class="input-num" size="17"value=" <?php echo $sss_contribution;?>"disabled>
	  	  			</div>


	  	  			<div class="div15">
						PhilHEALTH CONTRIBUTION<br>
							<input type="text" placeholder="0.00" name="philhealth_contribution" class="input-num" size="19" value="<?php echo $philhealth_contribution;?>"disabled>
	  	  			</div>

	  	  			<div class="div16">
						PAGIBIG CONTRIBUTION<br>
							<input type="text" placeholder="0.00" name="emp_num" class="input-num" size="19"  value="100">
	  	  			</div>

	  	  			<div class="div17">
						T A X<br>
							<input type="text" placeholder="0.00" name="emp_num" class="input-num" size="19"value="<?php echo $income_tax;?>">
	  	  			</div>
			</div>
		</div>
			

								<!--OTHER DEDUCTION-->
			<div class="sub-info5">
				<div class="sub-title4">
					<p>O T H E R   &nbsp; D E D U C T I O N</p>
						
						<div class="div18">
							SSS LOAN<br>
								<input type="text" placeholder="0.00" name="sss_loan" class="input-num" size="17" value="<?php echo $sss_loan;?>">

	  	  				</div>
	  	  				
	  	  				<div class="div19">
							PAGIBIG LOAN<br>
								<input type="text" placeholder="0.00" name="pagibig_loan" class="input-num" size="18" value="<?php echo $pagibig_loan;?>">

	  	  				</div>

	  	  				<div class="div20">
							FACULTY SAVINGS DEPOSIT<br>
								<input type="text" placeholder="0.00" name="faculty_deposit_loan" class="input-num" size="18" value="<?php echo $faculty_deposit_loan;?>">

	  	  				</div>

	  	  				<div class="div21">
							FACULTY SAVINGS LOAN<br>
								<input type="text" placeholder="0.00" name="faculty_savings_loan" class="input-num" size="18" value="<?php echo $faculty_savings_loan;?>">

	  	  				</div>
	  	  		
	  	  				<div class="div22">
							SALARY LOAN<br>
								<input type="text" placeholder="0.00" name="salary_loan" class="input-num" size="17" value="<?php echo $salary_loan;?>">

	  	  				</div>

	  	  				<div class="div23">
							OTHERS :
								<input type="text" placeholder="Select Other Deduction" list="option" class="input-option" size="20" >
									<datalist id="option">
									      <option value="DEDUCTION1">
									      <option value="DEDUCTION2">
							   		 </datalist> 	
							   		</option></option>
							   	&nbsp;&nbsp;


								<input type="text" name="other_loan" class="input" size="20" name="other6" value="<?php echo $other_loan;?>">
 
	  	  				</div>	  	  				
				</div>
			</div>
		
			<div class="sub-info6">
				<div class="sub-title5">
					<p>H O N O R A R I U M</p>
					
						<div class="div24">
							RATE / HOUR<br>
								<input type="text"  name="honor_rate_hour" class="input" size="17" value=" <?php echo $honor_rate_hour;?>">
	  	  				</div>

	  	  				<div class="div25">
							NO. OF HOURS / CUT OFF<br>
								<input type="text"  name="honor_no_of_hour" class="input" size="17" value=" <?php echo $honor_no_of_hour;?>">
	  	  				</div>

	  	  				<div class="div26">
							TOTAL HONORARIUM PAY <br>
								<input type="text"  name="honorarium_pay" class="input-total" size="17" value="<?php echo $honorarium_pay.".00";?>"disabled>
	  	  				</div>
						
				</div>
			</div>

			<div class="sub-info7">
				<div class="sub-title6">
					<p>O T H E R  &nbsp; I N C O M E</p>
					
						<div class="div24">
							RATE / HOUR<br>
								<input type="text"  name="other_rate_hour" class="input" size="17" value=" <?php echo $other_rate_hour;?>" >
	  	  				</div>

	  	  				<div class="div25">
							NO. OF HOURS / CUT OFF<br>
								<input type="text"  name="other_no_of_hour" class="input" size="17" value=" <?php echo $other_no_of_hour;?>">
	  	  				</div>

	  	  				<div class="div26">
							TOTAL OTHER INCOME PAY <br>
								<input type="text"  name="total_other_income" size="17" class="input-total" value="<?php echo $total_other_income.".00";?>"disabled>
	  	  				</div>
						
				</div>
			</div>

			<div class="sub-info8">
				<div class="sub-title7">
					<p>	I N C O M E &nbsp; S U M M A R Y </p></div>
					
						<div class="div28">
							<label class="input-title1">G R O S S <br> I N C O M E </label>&nbsp;
							<input type="text"  name="gross_income" class="input-box" size="17"value="<?php echo $gross_income.".00";?>"disabled>	
	  	  				</div>

	  	  			
	  	  				<div class="div29">
							<label class="input-title2">N E T <br>I N C O M E </label> &nbsp;
								<input type="text"  name="net_income" class="input-box" size="17" value="<?php echo $net_income;?>"disabled>
	  	  				</div>
	  	  				</div>
			</div>



			<div class="sub-info10">
				<div class="sub-title10">
					<p>D E D U C T I O N  &nbsp; S U M M A R Y</p>
					
						<div class="div30"><br>
							<label class="input-title3">T O T A L &nbsp; D E D U C T I O N </label>
								<input type="text"  name="total_deduction" class="input-box1" size="19" value="<?php echo $total_deduction;?>"disabled>
	  	  				</div>
				</div>
			</div>

					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


				<div class="sub-info11">
					<button type="submit" class="button1a" name="calculate_gross"><LABEL class="calculate">CALCULATE GROSS INCOME</LABEL></button>
					<button type="submit" class="button1g" name="calculate_net"><LABEL class="calculate">CALCULATE NET INCOME</LABEL></button>
					<button type="submit" class="button1b" name="new"><LABEL class="calculate">NEW</LABEL></button>
					<button type="submit" class="button1c"><LABEL class="calculate">EXIT</LABEL></button>
					<button type="submit" class="button1d"><LABEL class="calculate">PRINT </LABEL></button>
					<button type="submit"class="button1e"><LABEL class="calculate">PREVIEW <br>PAYSLIP &nbsp; DETAILS</LABEL></button>
					<button type="submit" class="button1f"><LABEL class="calculate">E X I T</LABEL></button>
				</div>
</div>
	</form>

</body>
</html>

