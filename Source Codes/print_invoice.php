
<?php 

if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
	require_once 'pdf.php';
	include("pdo_db_connection.php");
	
	$output = '';
	$sql = "SELECT * FROM customers WHERE customer_id = :customer_id LIMIT 1";
	$statement = $connect->prepare($sql);
	$statement->execute(
	  array(
	   ':customer_id'       =>  $_GET["id"]
	  )
	);
	$result = $statement->fetchAll();
	foreach($result as $row)
    {
		$output .= '
		
			<html>
			 <head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<style> 
				@font-face {
				font-family: "kalpurush";
				font-style: normal;
				font-weight: normal;
				src: url(kalpurush.ttf) format("truetype");
			    }
					* {
						// font-family: "kalpurush";
					}
					
				@page { margin: 100px 25px; }
				//header { position: fixed; top: -60px; left: 0px; right: 0px; background-color: lightblue; height: 50px; }
				footer { position: fixed; bottom: -60px; left: 0px; right: 0px; height: 50px; }
			    </style>
			  </head>			
			<body>
			<table>
			<tr>
			<div style="width:100%;text-align:center;">
				<section style="float:left;"><img src="logo.png" width="80px;"></section>
				<section style = "display: inline-block;margin:0 auto;width:600px;font-size:50px;color:#00004d;font-weight:bold;">KHAN RESTAURANT</section>
				<section style = "float:right;"><img src="logo.png" width="80px;"></section>
				<section style= "margin:0 auto; color:#00004d;">Belkuchi, Sirajgonj, Bangladesh</section>
				<br/>
				<section style= "margin:0 auto; color:#00004d; font-size:40px; font-weight:bold;">INVOICE</section>
			</div>
			</tr>
			</table>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<table>
				<tr>
					<div style="width:100%;">
							<div style="float:left;">
								 <div style="font-size:25px;color:#00004d;">Client Information</div>
								 <br/>
								 <p style="padding:0;margin:0;outline:0;"><span style="word-spacing:15px;">Name :</span> '.$row["customer_name"].'</p>
								 <p style="padding:0;margin:0;outline:0;"><span style="word-spacing:7px;">Mobile :</span> '.$row["mobile_number"].'</p>
								 <p style="padding:0;margin:0;outline:0;"><span style="word-spacing:2px;">Address :</span> '.$row["address"].'</p>
							</div>
						<div style="float:right;">
								<br/>
								<br/>
								 <p style="padding:0;margin-top:10px;outline:0;"><span style="word-spacing:42px;">Invoice :</span> '.$row["invoice_number"].'</p>
								 <p style="padding:0;margin:0;outline:0;"><span style="word-spacing:2px;">Date & Time :</span> '.$row["date_time"].'</p>
						</div>
					</div>
				</tr>
			</table>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>		
			<br/>		
			<br/>		
			<table width="100%">
				<tr style="background-color:#d5dae5;color:#00004d;">
					<th style="text-align:center;">SL No</th>
					<th>Food Item Name</th>
					<th style="text-align:center;">Unit Price</th>
					<th style="text-align:center;">Quantity</th>
					<th style="text-align:center;">Total</th>
				</tr>				
		'; 
	  $statement = $connect->prepare(
	   "SELECT * FROM food 
	   WHERE customer_id = :customer_id"
	  );
	  $statement->execute(
	   array(
		':customer_id' =>  $_GET["id"]
	   )
	  );
	  $item_result = $statement->fetchAll();
	  $count = 0;
	  foreach($item_result as $sub_row)
	  {
	   $count++;
	   $output .= '
	   <tr>
		<td style="text-align:center;">'.$count.'</td>
		<td>'.$sub_row["food_name"].'</td>
		<td style="text-align:center;">'.$sub_row["unit_price"].'</td>
		<td style="text-align:center;">'.$sub_row["quantity"].'</td>
		<td style="text-align:center;">'.$sub_row["total"].'</td>
	   </tr>
	   ';
	  }	  
		$output .='
			<table>
				<br/>
				<tr>
					<div style="width:100%;">
						<div style="float:left;"><span style="margin-left:200px; font-size:20px;">Sub Total:</span></div>
						<div style="float:right;"><span style="font-size:20px; color:#00004d; margin-left:-40px;">'.$row["grand_total"].'</span></div>
					</div>				
				</tr>
				<br/>
				<br/>
		';
		$output .='</table>
				   </table>
		';
		$output .='<table>
					<br/>
					<tr>
					<div style="width:100%;">
						<div style="float:left;"><span style="margin-left:122px; font-size:20px;">Discount:</span></div>
						<div style="float:right;"><span style="font-size:20px; color:#00004d; margin-left:0px;">'.$row["discount"]." %".'</span></div>
					</div>				
				</tr>
				</br>
				</table>';
		$output .='<table>
					<br/>
					<tr>
					<div style="width:100%;">
						<div style="float:left;"><span style="margin-left:104px; font-size:20px;">Grand Total:</span></div>
						<div style="float:right;"><span style="font-size:20px; color:#00004d; margin-left:0px;">'.$row["final_total"].'</span></div>
					</div>				
					</tr>
					</br>
				</table>';
				
		$output .='
					<br/>
					<br/>
					<table>
						<tr>
							<div><span style="font-weight:bold;">Sub Total :-</span><span style="white-space: pre;">'.$row["grand_total_word"].'</span></div>
						</tr>					
					</table>
					<div style="width:100%;">
						<footer style="float:left; color:blue">info@khanrestaurant.com</footer>
						<footer style="text-align:center;margin-right:150px;color:green;">+8801621000361</footer>
						<footer style="float:right;color: blue;">www.khanrestaurant.com</footer>
					</div>	
				</body>
		</html>
		';
	}
	 $pdf = new Pdf();
	 $pdf->setPaper('A4','Portrait');
	//$pdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
	 //$customPaper = array(0,0,595 ,842);
	 //$pdf->set_paper($customPaper);
	 $file_name = 'Invoice-'.$row["invoice_number"].'.pdf';
	 $pdf->loadHtml($output,'UTF-8');
	 $pdf->render();
	 $pdf->stream($file_name, array("Attachment" => true));	
}	

?>