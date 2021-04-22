<?php

//these are the employee personal details
$employee_number="";
$lastname="";
$firstname="";
$middlename="";
$civilstatus="";
$designation="";
$number_of_respondent="";
$department="";
$employee_status="";
$paydate="";

//these are employee baisc pay informationj
$rate_hour="";
$no_of_hour="";
$income_per_cut_off="";

//these are employee honorarium pat
$honor_rate_hour="";
$honor_no_of_hour="";
$honorarium_pay="";

//these are employee other way of income
$other_rate_hour="";
$other_no_of_hour="";
$total_other_income="";

//these are employee contribution 
$pagibig_contribution="";
$sss_contribution="";
$philhealth_contribution="";
$total1="";
$total_deduction="";
$income_tax="";

//these are employee other deduction LOAN
$sss_loan="";
$pagibig_loan="";
$faculty_deposit_loan="";
$faculty_savings_loan="";
$other_loan="";
$salary_loan="";

//these is employee TOTAL DEDUCTION
$final_total_deduction="";

//these is employee total NET INCOME
$net_income="";

//these is employee total GROSS INCOME
$gross_income="";


if($_SERVER['REQUEST_METHOD']=='POST'){
//the request moethod is for collecting the data after submitting the html 
//return the request method used to access the page
		
		//this method is for getting the inputted data of the user
		// employee perosnal information in getting of information
		$employee_number=$_POST['employee_number'];
		$lastname=$_POST['lastname'];
		$firstname=$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$civilstatus=$_POST['civilstatus'];
		$designation=$_POST['designation'];
		$number_of_respondent=$_POST['number_of_respondent'];
		$department=$_POST['department'];
		$employee_status=$_POST['employee_status'];
		$paydate=$_POST['paydate'];


		// employee basic pay getting of information
		$rate_hour=$_POST['rate_hour'];
		$no_of_hour=$_POST['no_of_hour'];
		
		// employee honorarium pay getting of information
		$honor_rate_hour=$_POST['honor_rate_hour'];
		$honor_no_of_hour=$_POST['honor_no_of_hour'];
		
		// employee other income getting of information
		$other_rate_hour=$_POST['other_rate_hour'];
		$other_no_of_hour=$_POST['other_no_of_hour'];
		
		// employee other deduction getting of information
		$sss_loan=$_POST['sss_loan'];
		$pagibig_loan=$_POST['pagibig_loan'];
		$faculty_deposit_loan=$_POST['faculty_deposit_loan'];
		$faculty_savings_loan=$_POST['faculty_savings_loan'];
		$other_loan=$_POST['other_loan'];
		$salary_loan=$_POST['salary_loan'];
		
		//all the computation for the total
		$income_per_cut_off= $rate_hour * $no_of_hour; //for basic pay
		$honorarium_pay= $honor_rate_hour * $honor_no_of_hour; // for honorarium pay
		$total_other_income=$other_rate_hour * $other_no_of_hour; //for other way of income
		$gross_income= $income_per_cut_off + $honorarium_pay + $total_other_income; //gross income total


		//the default deduction of pag ibig contribution
		$pagibig_contribution=100;

		

		///sss contribution table range based on source
		if ($gross_income>= 3250 && $gross_income<=4749){

			$sss_contribution=157.50;
		}
		elseif ($gross_income>= 3750 && $gross_income<=4249){
			$sss_contribution=180;
		}
		elseif ($gross_income>= 4250 && $gross_income<=4749){
			$sss_contribution=202.50;
		}
		elseif ($gross_income>= 4750 && $gross_income<=5249){
			$sss_contribution=225;
		}
		elseif ($gross_income>= 5250 && $gross_income<=5749){
			$sss_contribution=247.50;
		}
		elseif ($gross_income>= 5750 && $gross_income<=6249){
			$sss_contribution=270;
		}
		elseif ($gross_income>= 6250 && $gross_income<=6749){
			$sss_contribution=292.50;
		}
		elseif ($gross_income>= 6750 && $gross_income<=7249){
			$sss_contribution=315;
		}
		
		elseif ($gross_income>= 7250 && $gross_income<=7749){
			$sss_contribution=337.50;
		}

		elseif ($gross_income>= 7750 && $gross_income<=8249){
			$sss_contribution=360;
		}

		elseif ($gross_income>= 8250 && $gross_income<=8749){
			$sss_contribution=382.50;
		}

		elseif ($gross_income>= 8705 && $gross_income<=9249){
			$sss_contribution=405;
		}
		elseif ($gross_income>= 9250 && $gross_income<=9749){
			$sss_contribution=427.50;
		}

		elseif ($gross_income>= 9750 && $gross_income<=10249){
			$sss_contribution=450;
		}

		elseif ($gross_income>=10250 && $gross_income<=10749){
			$sss_contribution=472.50;
		}
		elseif ($gross_income>= 5750 && $gross_income<=6249){
			$sss_contribution=495;
		}

		elseif ($gross_income>= 10750 && $gross_income<=11249){
			$sss_contribution=720;
		}

		elseif ($gross_income>= 11250 && $gross_income<=11749){
			$sss_contribution=517.50;
		}

		elseif ($gross_income>= 11750 && $gross_income<=12249){
			$sss_contribution=540;
		}
		elseif ($gross_income>= 6250 && $gross_income<=6749){
			$sss_contribution=562.50;
		}

		elseif ($gross_income>= 12250 && $gross_income<=12749){
			$sss_contribution=720;
		}

		elseif ($gross_income>= 12750 && $gross_income<=13249){
			$sss_contribution=585;
		}
		
		elseif ($gross_income>= 13250 && $gross_income<=13749){
			$sss_contribution=607.50;
		}
		elseif ($gross_income>= 13750 && $gross_income<=14249){
			$sss_contribution=720;
		}
		elseif ($gross_income>= 14250 && $gross_income<=14749){
			$sss_contribution=652.50;
		}
		elseif ($gross_income>= 14750 && $gross_income<=15249){
			$sss_contribution=675;
		}
		elseif ($gross_income>= 15250 && $gross_income<=15749){
			$sss_contribution=697.50;
		}

		elseif ($gross_income>= 15750 && $gross_income<=16249){
			$sss_contribution=720;
		}
		else if ($gross_income>= 16250 && $gross_income<=16749){
			$sss_contribution=742.50;
		}
		else if ($gross_income>= 16750 && $gross_income<=17249){
			$sss_contribution=765;
		}
		else if ($gross_income>= 17250 && $gross_income<=17749){
			$sss_contribution=787.50;
		}
		else if ($gross_income>= 17750 && $gross_income<=18249){
			$sss_contribution=810;
		}
		else if ($gross_income>= 18250 && $gross_income<=18749){
			$sss_contribution=832.50;
		}
		else if ($gross_income>= 18750 && $gross_income<=19249){
			$sss_contribution=855;
		}
		else if ($gross_income>= 19250 && $gross_income<=19749){
			$sss_contribution=877.50;
		}
		else if ($gross_income>= 19750){
			$sss_contribution=900;
			
		}else{
			$sss_contribution=135;
		}




		//philhealth contribution table range based on source
		if ($gross_income>=0 && $gross_income<=10000){
			$philhealth_contribution=275.00;
		}
		elseif ($gross_income>=10001 && $gross_income<=39999) {
			$percentage=0.0275;
			$philhealth_contribution=$gross_income*$percentage;
		}
		else{
			
			$philhealth_contribution=1100;
		}


	//income tax	 

				
				//add all the contribution and loan
				$plus=$sss_contribution+$philhealth_contribution+$pagibig_contribution+$sss_loan+$faculty_savings_loan+$faculty_deposit_loan
				+$faculty_savings_loan+$other_loan+$salary_loan;

				//so after that wee need to get the difference of it to get the gross income based on income tax
				$gross_income_based_on_income_tax=($gross_income-$plus);
				
				//since the table from source is based on yearly contribution on tax we need to times 12 the gorss income based on tax
				$total1=$gross_income_based_on_income_tax*12;
			


			if ($total1<=250000) {

				$income_tax=(($total1)*0)/12;
			
			} 
			elseif ($total1>=250000 && $total1<400000){
			
				$income_tax=(($total1-250000)*0.20)/12;
			}
			elseif ($total1>=400000 && $total1<800000){
				
				$income_tax=(($total1-400000)*0.25)/12;
			}
			elseif ($total1>=800000&& $total1<2000000000){
				$income_tax=(($total1-800000)*0.30)/12;
			}
			elseif ($total1>=2000000000 && $total1<8000000000){
				$income_tax=(($total1-2000000)*0.32)/12;
			}else{
				$income_tax=(($total1-8000000)*0.35)/12;

			}

			if (isset($_POST['calculate_net'])){
				
				$total_deduction=$income_tax+$sss_contribution+$philhealth_contribution+$pagibig_contribution+$sss_loan+$pagibig_loan
				+$faculty_savings_loan+$faculty_deposit_loan+$salary_loan+$other_loan;
				$net_income=$gross_income-$total_deduction;
			}
			if (isset($_POST['new'])){
				$rate_hour='';
				$no_of_hour='';
				$income_per_cut_off='';
				$honor_rate_hour='';
				$honor_no_of_hour='';
				$honorarium_pay='';
				$other_rate_hour='';
				$other_no_of_hour='';
				$total_other_income='';
				$gross_income='';
				$net_income='';
				$pagibig_contribution='';
				$sss_contribution='';
				$philhealth_contribution='';
				$total1='';
				$total_deduction='';
				$income_tax='';
				$final_total_deduction='';
				$net_income='';
				$sss_loan='';
				$pagibig_loan='';
				$faculty_deposit_loan='';
				$faculty_savings_loan='';
				$other_loan='';
				$salary_loan='';
				$employee_number="";
				$lastname="";
				$firstname="";
				$middlename="";
				$civilstatus="";
				$designation="";
				$number_of_respondent="";
				$department="";
				$employee_status="";
				$paydate="";

	}

}


?>


