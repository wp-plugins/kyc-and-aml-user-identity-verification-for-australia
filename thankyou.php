<?php
/**
* Template Name:Thank You Page
* Description:This will page return the result
*/
global $wpdb;


$response=$identity_response;
//echo "<pre>";print_r($response);exit;
$table_name = $wpdb->prefix . "identity_verification_auth";
?>

	<div class="content-element-1">
		<div id="content">
			<?php
			if($response->status=='Invalid'){
			?>
				<div style="padding:10px;marign-bottom:5px;">
					<h3><?php echo $response->message?></h3>
				</div>
			<?php
			}if($response->status=='valid' && $response->is_identity_verified!=''){
			?>
			<table class="response-tbl">
					<!-- <tr>
						<th> Parameter</th>
						<th> Value</th>
						<th> Status</th>
					</tr> -->
					<tr>
						<td colspan="3" style="text-align:center"><b><?php echo $response->message?></b></td>
					</tr>
					<tr>

						<td>Identity Type</td>
						<td><?php echo ucwords(str_replace("_"," ",$response->identity_type))?></td>
						<td><?php echo ($response->is_identity_verified==1?'<img src="'.plugins_url('images/icons/tick_105.png' , __FILE__).'">':'Not Verified')?></td>
					</tr>
					<tr>
						<td>Country</td>
						<td><?php echo ucfirst($response->country)?></td>
						<td><?php echo ($response->is_country_verified==1?'<img src="'.plugins_url('images/icons/tick_105.png' , __FILE__).'">':'Not Verified')?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $response->first_name?></td>
						<td><?php echo ($response->is_first_name_verified==1?'<img src="'.plugins_url('images/icons/tick_105.png' , __FILE__).'">':'Not Verified')?></td>
					</tr>
					<tr>
						<td>Family Name</td>
						<td><?php echo $response->last_name?></td>
						<td><?php echo ($response->is_last_name_verified==1?'<img src="'.plugins_url('images/icons/tick_105.png' , __FILE__).'">':'Not Verified')?></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><?php echo $response->date_of_birth?></td>
						<td><?php echo ($response->is_date_of_birth_verified==1?'<img src="'.plugins_url('images/icons/tick_105.png' , __FILE__).'">':'Not Verified')?></td>
					</tr>
					<!-- <tr>
						<td>Verification Status</td>
						<td><?php echo $response->status?></td>
						<td><?php echo $response->message?></td>
					</tr> -->
				</table>
				<div>
					<form action="<?php echo ($response->is_identity_verified=='1'?$redirect_url:$error_url)?>" method="post"  style ="text-align:center">
						<input type="hidden" value='<?php echo json_encode($response)?>' name="response">
						<input type="submit" value="Continue" style="text-align:center;background:rgb(78,159,216) !important;color:#fff !important;">
						<br>
						<br>
					</form>
				</div>			
			<?php
			}else{
			?>
				<table class="response-tbl">
					<!-- <tr>
						<th> Parameter</th>
						<th> Value</th>
						<th> Status</th>
					</tr> -->
					<tr>
						<td colspan="3" style="text-align:center"><b><?php echo $response->message?></b></td>
					</tr>
				</table>
			<?php
			}
			?>
		</div>
	</div>


