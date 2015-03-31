<img src="<?php echo plugins_url('/images/loader.gif' , __FILE__)?>" style="display:none" class="loader_image">
<?php
if(count($table_fields)>0 && in_array  ('curl', get_loaded_extensions())){
?>
<form action="" method="post">
	<div class="ivs-form">
		
		<div class="ivs-field">
			<label for="first_name">First Name</label>
			
			<div class="ivs-input">
				<input name="first_name" placeholder="First Name" type="text"  id="first_name"> 
				<span class="err_fname err"></span>
			</div>

			<div class="clear"></div>
		</div>

		<div class="ivs-field">
			<label for="last_name">Family Name</label>
			<div class="ivs-input">
				<input name="last_name" placeholder="Family Name" type="text"  id="last_name"> 
				<span class="err_lname err"></span>
			</div>
			<div class="clear"></div>
		</div>

		<div class="ivs-field">
			<label for="date_of_birth">Date Of Birth</label>
			<div class="ivs-input">
				<select class="day " style="width: 32% !important;float:left">
				   <option value="">Day</option>
				   <option value="01">1</option>
				   <option value="02">2</option>
				   <option value="03">3</option>
				   <option value="04">4</option>
				   <option value="05">5</option>
				   <option value="06">6</option>
				   <option value="07">7</option>
				   <option value="08">8</option>
				   <option value="09">9</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
				   <option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
				   <option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="21">21</option>
				   <option value="22">22</option>
				   <option value="23">23</option>
				   <option value="24">24</option>
				   <option value="25">25</option>
				   <option value="26">26</option>
				   <option value="27">27</option>
				   <option value="28">28</option>
				   <option value="29">29</option>
				   <option value="30">30</option>
				   <option value="31">31</option>
				</select>
				<select class="month " style="width: 33% !important;float:left;margin-left:5px">
				   <option value="">Month</option>
				   <option value="01">Jan</option>
				   <option value="02">Feb</option>
				   <option value="03">Mar</option>
				   <option value="04">Apr</option>
				   <option value="05">May</option>
				   <option value="06">Jun</option>
				   <option value="07">Jul</option>
				   <option value="08">Aug</option>
				   <option value="09">Sep</option>
				   <option value="10">Oct</option>
				   <option value="11">Nov</option>
				   <option value="12">Dec</option>
				</select>
				<select class="year " style="width: 33% !important;float:left;margin-left:5px">
				   <option value="">Year</option>
				   <option value="2013">2013</option>
				   <option value="2012">2012</option>
				   <option value="2011">2011</option>
				   <option value="2010">2010</option>
				   <option value="2009">2009</option>
				   <option value="2008">2008</option>
				   <option value="2007">2007</option>
				   <option value="2006">2006</option>
				   <option value="2005">2005</option>
				   <option value="2004">2004</option>
				   <option value="2003">2003</option>
				   <option value="2002">2002</option>
				   <option value="2001">2001</option>
				   <option value="2000">2000</option>
				   <option value="1999">1999</option>
				   <option value="1998">1998</option>
				   <option value="1997">1997</option>
				   <option value="1996">1996</option>
				   <option value="1995">1995</option>
				   <option value="1994">1994</option>
				   <option value="1993">1993</option>
				   <option value="1992">1992</option>
				   <option value="1991">1991</option>
				   <option value="1990">1990</option>
				   <option value="1989">1989</option>
				   <option value="1988">1988</option>
				   <option value="1987">1987</option>
				   <option value="1986">1986</option>
				   <option value="1985">1985</option>
				   <option value="1984">1984</option>
				   <option value="1983">1983</option>
				   <option value="1982">1982</option>
				   <option value="1981">1981</option>
				   <option value="1980">1980</option>
				   <option value="1979">1979</option>
				   <option value="1978">1978</option>
				   <option value="1977">1977</option>
				   <option value="1976">1976</option>
				   <option value="1975">1975</option>
				   <option value="1974">1974</option>
				   <option value="1973">1973</option>
				   <option value="1972">1972</option>
				   <option value="1971">1971</option>
				   <option value="1970">1970</option>
				   <option value="1969">1969</option>
				   <option value="1968">1968</option>
				   <option value="1967">1967</option>
				   <option value="1966">1966</option>
				   <option value="1965">1965</option>
				   <option value="1964">1964</option>
				   <option value="1963">1963</option>
				   <option value="1962">1962</option>
				   <option value="1961">1961</option>
				   <option value="1960">1960</option>
				   <option value="1959">1959</option>
				   <option value="1958">1958</option>
				   <option value="1957">1957</option>
				   <option value="1956">1956</option>
				   <option value="1955">1955</option>
				   <option value="1954">1954</option>
				   <option value="1953">1953</option>
				   <option value="1952">1952</option>
				   <option value="1951">1951</option>
				   <option value="1950">1950</option>
				   <option value="1949">1949</option>
				   <option value="1948">1948</option>
				   <option value="1947">1947</option>
				   <option value="1946">1946</option>
				   <option value="1945">1945</option>
				   <option value="1944">1944</option>
				   <option value="1943">1943</option>
				   <option value="1942">1942</option>
				   <option value="1941">1941</option>
				   <option value="1940">1940</option>
				</select>

				<br/>
				<span class="err_dob err"></span>
			</div>
			<div class="clear"></div>
		</div>


		<div class="ivs-field">
			<label for="country">Country</label>
			<div class="ivs-input">
				<select name="country"  id="country">
					<option value=""> Select Country </option>
					<option value="australia" selected="selected"> Australia </option>
				</select> 
				<span class="err_country err"></span>
			</div>
				
			<div class="clear"></div>
		</div>

		<div class="ivs-field">
			<label for="identity_type">Identity Type</label>
			<div class="ivs-radio">
				<input type="hidden" name="client_id" value="<?php echo $table_fields[0]->client_id?>" >
				<input type="hidden" name="client_secret" value="<?php echo $table_fields[0]->client_secret?>" >
				<input type="hidden" name="redirect_url" value="<?php echo $table_fields[0]->redirect_url?>" >
				<input type="hidden" name="error_url" value="<?php echo $table_fields[0]->error_url?>" >
				
				<input name="identity_type"  type="radio" value="driver_license" checked  id="dl_btn" class="identity_type">  
				<span>Driver Licence</span> 
					<input name="identity_type" id="p_button" value="passport" type="radio" required class="identity_type">
					
				<span>Passport</span> 
			</div>
			<div class="clear"></div>
		</div>

		<div class="dl_info">

			<div class="ivs-field">
				<label for="driving_license">Driver Licence Number</label>
				<div class="ivs-input">	
					<input name="driver_license_number" id="driving_license" placeholder="Driver Licence Number" type="text" > 
					<span class="err_dl err"></span>
				</div>		
				<div class="clear"></div>
			</div>

			<div class="ivs-field">
				<label for="dl_state">Driver Licence State</label>
				<div class="ivs-input">
					<select name="driver_license_state" id="dl_state">
						<option value="">Select State</option>
						<option value="ACT">Australian Capital Teritory</option>
						<option value="NSW">New South Wales</option>
						
						<option value="QLD">Queensland</option>
						<option value="SA">South Australia</option>
						
						<option value="VIC">Victoria</option>
						<option value="WA">Western Australia</option>
					</select>		
					<span class="err_dl_state err"></span>
				</div>		
				<div class="clear"></div>
			</div>			

			<div class="state_dl" style="display:none;">
				<div class="ivs-field">
					<label for="rta">Rta Card Number</label>
					<div class="ivs-input">
						<input name="rta_card_number" id="rta" placeholder="Rta Card Number" type="text"> 
					</div>	
					<div class="clear"></div>
				</div>		
			</div>		

			<div class="doe_dl" style="display:none;">
				<div class="ivs-field">
					<label for="doe">Date Of Expiry</label>
					<div class="ivs-input">
						<select class="eday " style="width: 32% !important;float:left">
							   <option value="">Day</option>
							   <option value="01">1</option>
							   <option value="02">2</option>
							   <option value="03">3</option>
							   <option value="04">4</option>
							   <option value="05">5</option>
							   <option value="06">6</option>
							   <option value="07">7</option>
							   <option value="08">8</option>
							   <option value="09">9</option>
							   <option value="10">10</option>
							   <option value="11">11</option>
							   <option value="12">12</option>
							   <option value="13">13</option>
							   <option value="14">14</option>
							   <option value="15">15</option>
							   <option value="16">16</option>
							   <option value="17">17</option>
							   <option value="18">18</option>
							   <option value="19">19</option>
							   <option value="20">20</option>
							   <option value="21">21</option>
							   <option value="22">22</option>
							   <option value="23">23</option>
							   <option value="24">24</option>
							   <option value="25">25</option>
							   <option value="26">26</option>
							   <option value="27">27</option>
							   <option value="28">28</option>
							   <option value="29">29</option>
							   <option value="30">30</option>
							   <option value="31">31</option>
							</select>
							<select class="emonth " style="width: 33% !important;float:left;margin-left:5px">
							   <option value="">Month</option>
							   <option value="01">Jan</option>
							   <option value="02">Feb</option>
							   <option value="03">Mar</option>
							   <option value="04">Apr</option>
							   <option value="05">May</option>
							   <option value="06">Jun</option>
							   <option value="07">Jul</option>
							   <option value="08">Aug</option>
							   <option value="09">Sep</option>
							   <option value="10">Oct</option>
							   <option value="11">Nov</option>
							   <option value="12">Dec</option>
							</select>
							<select class="eyear " style="width: 33% !important;float:left;margin-left:5px;">
							   <option value="">Year</option>
							   <option value="2040">2040</option>
							   <option value="2039">2039</option>
							   <option value="2038">2038</option>
							   <option value="2037">2037</option>
							   <option value="2036">2036</option>
							   <option value="2035">2035</option>
							   <option value="2034">2034</option>
							   <option value="2033">2033</option>
							   <option value="2032">2032</option>
							   <option value="2031">2031</option>
							   <option value="2030">2030</option>
							   <option value="2029">2029</option>
							   <option value="2028">2028</option>
							   <option value="2027">2027</option>
							   <option value="2026">2026</option>
							   <option value="2025">2025</option>
							   <option value="2024">2024</option>
							   <option value="2023">2023</option>
							   <option value="2022">2022</option>
							   <option value="2021">2021</option>
							   <option value="2020">2020</option>
							   <option value="2019">2019</option>
							   <option value="2018">2018</option>
							   <option value="2017">2017</option>
							   <option value="2016">2016</option>
							   <option value="2015">2015</option>
							   <option value="2014">2014</option>
							</select>
							<span class="err_eod err"></span>
					</div>	
					<div class="clear"></div>
				</div>		
			</div>		


		</div>		

		<div class="passport_info" style="display:none;">

			<div class="ivs-field">
				<label for ="">Passport Number	</label>
				<div class="ivs-input">				
					<input name="passport_number" id="p_no" placeholder="Passport Number" type="text" > <br/>
					<span class="err_p_no err"></span>				
				</div>	
					
				<div class="clear"></div>
			</div>		


			<div class="ivs-field">
				<label for ="">Place of Birth	</label>
				<div class="ivs-input">	
					<input name="passport_placeof_birth" id="pob" placeholder="Place of Birth" type="text" > <br/>
					<span class="err_pob err"></span>
				</div>	
				<div class="clear"></div>
			</div>		

			<div class="ivs-field">
				<label for ="">Country of Birth</label>  
				<div class="ivs-input">
					<select id="passport_birth_country" name="passport_birth_country_name"  class="valid">
					<option value="">Country of Birth</option>
					<option value="SAO TOME &amp;amp; PRINCIPE">SAO TOME &amp;amp; PRINCIPE</option>
					<option value="SAUDI ARABIA">SAUDI ARABIA</option>
					<option value="SERBIA AND MONTENEGRO*">SERBIA AND MONTENEGRO*</option>
					<option value="SEYCHELLES">SEYCHELLES</option>
					<option value="SIERRA LEONE">SIERRA LEONE</option>
					<option value="SINGAPORE">SINGAPORE</option>
					<option value="SLOVAKIA">SLOVAKIA</option>
					<option value="SLOVENIA">SLOVENIA</option>
					<option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
					<option value="SOMALIA">SOMALIA</option>
					<option value="SOUTH AFRICA">SOUTH AFRICA</option>
					<option value="SOUTHERN RHODESIA*">SOUTHERN RHODESIA*</option>
					<option value="SPAIN">SPAIN</option>
					<option value="SRI LANKA">SRI LANKA</option>
					<option value="SUDAN">SUDAN</option>
					<option value="SURINAME">SURINAME</option>
					<option value="SVALBARD AND JAN MAYEN">SVALBARD AND JAN MAYEN</option>
					<option value="SWAZILAND">SWAZILAND</option>
					<option value="SWEDEN">SWEDEN</option>
					<option value="SWITZERLAND">SWITZERLAND</option>
					<option value="SYRIA">SYRIA</option>
					<option value="TAIWAN">TAIWAN</option>
					<option value="TAJIKISTAN">TAJIKISTAN</option>
					<option value="TANGANYIKA*">TANGANYIKA*</option>
					<option value="TANZANIA">TANZANIA</option>
					<option value="THAILAND">THAILAND</option>
					<option value="TIMOR LESTE (FORMERLY EAST TIMOR)">TIMOR LESTE (FORMERLY EAST TIMOR)</option>
					<option value="TOGO">TOGO</option>
					<option value="TOKELAU">TOKELAU</option>
					<option value="TONGA">TONGA</option>
					<option value="TRINIDAD &amp;amp; TOBAGO">TRINIDAD &amp;amp; TOBAGO</option>
					<option value="TUNISIA">TUNISIA</option>
					<option value="TURKEY">TURKEY</option>
					<option value="TURKMENISTAN">TURKMENISTAN</option>
					<option value="TURKS &amp;amp; CAICOS ISLANDS">TURKS &amp;amp; CAICOS ISLANDS</option>
					<option value="TUVALU">TUVALU</option>
					<option value="U.S.S.R.*">U.S.S.R.*</option>
					<option value="UGANDA">UGANDA</option>
					<option value="UKRAINE">UKRAINE</option>
					<option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
					<option value="UNITED KINGDOM">UNITED KINGDOM</option>
					<option value="URUGUAY">URUGUAY</option>
					<option value="USA">USA</option>
					<option value="UZBEKISTAN">UZBEKISTAN</option>
					<option value="VANUATU">VANUATU</option>
					<option value="VATICAN CITY STATE (HOLY SEE)">VATICAN CITY STATE (HOLY SEE)</option>
					<option value="VENEZUELA">VENEZUELA</option>
					<option value="VIETNAM">VIETNAM</option>
					<option value="VIRGIN ISLANDS (USA)">VIRGIN ISLANDS (USA)</option>
					<option value="WESTERN SAHARA">WESTERN SAHARA</option>
					<option value="WESTERN SAMOA*">WESTERN SAMOA*</option>
					<option value="YEMEN">YEMEN</option>
					<option value="YUGOSLAVIA*">YUGOSLAVIA*</option>
					<option value="ZAIRE">ZAIRE</option>
					<option value="ZAMBIA">ZAMBIA</option>
					<option value="ZANZIBAR*">ZANZIBAR*</option>
					<option value="ZIMBABWE">ZIMBABWE</option>
					<option value="AUSTRALIA">AUSTRALIA</option>
					<option value="AFGHANISTAN">AFGHANISTAN</option>
					<option value="ALAND ISLANDS">ALAND ISLANDS</option>
					<option value="ALBANIA">ALBANIA</option>
					<option value="ALGERIA">ALGERIA</option>
					<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					<option value="ANDORRA">ANDORRA</option>
					<option value="ANGOLA">ANGOLA</option>
					<option value="ANGUILLA">ANGUILLA</option>
					<option value="ANTARCTICA">ANTARCTICA</option>
					<option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
					<option value="ARGENTINA">ARGENTINA</option>
					<option value="ARMENIA">ARMENIA</option>
					<option value="ARUBA">ARUBA</option>
					<option value="AUSTRIA">AUSTRIA</option>
					<option value="AZERBAIJAN">AZERBAIJAN</option>
					<option value="BAHAMAS">BAHAMAS</option>
					<option value="BAHRAIN">BAHRAIN</option>
					<option value="BANGLADESH">BANGLADESH</option>
					<option value="BARBADOS">BARBADOS</option>
					<option value="BECHUANALAND">BECHUANALAND</option>
					<option value="BELARUS">BELARUS</option>
					<option value="BELGIUM">BELGIUM</option>
					<option value="BELIZE">BELIZE</option>
					<option value="BENIN">BENIN</option>
					<option value="BERMUDA">BERMUDA</option>
					<option value="BHUTAN">BHUTAN</option>
					<option value="BOLIVIA">BOLIVIA</option>
					<option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA</option>
					<option value="BOTSWANA">BOTSWANA</option>
					<option value="BOUVET ISLAND">BOUVET ISLAND</option>
					<option value="BRAZIL">BRAZIL</option>
					<option value="BRITISH INDIAN OCEAN TERRITITORY">BRITISH INDIAN OCEAN TERRITITORY</option>
					<option value="BRUNEI">BRUNEI</option>
					<option value="BULGARIA">BULGARIA</option>
					<option value="BURKINA FASO">BURKINA FASO</option>
					<option value="BURMA">BURMA</option>
					<option value="BURUNDI">BURUNDI</option>
					<option value="BYELORUSSIA">BYELORUSSIA</option>
					<option value="CAMBODIA">CAMBODIA</option>
					<option value="CAMEROON">CAMEROON</option>
					<option value="CANADA">CANADA</option>
					<option value="CAPE VERDE">CAPE VERDE</option>
					<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
					<option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
					<option value="CHAD">CHAD</option>
					<option value="CHILE">CHILE</option>
					<option value="CHINA">CHINA</option>
					<option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
					<option value="COCOS KEELING ISLANDS">COCOS KEELING ISLANDS</option>
					<option value="COLOMBIA">COLOMBIA</option>
					<option value="COMOROS">COMOROS</option>
					<option value="CONGO">CONGO</option>
					<option value="CONGO (DEMOCRATIC REPUBLIC OF THE)">CONGO (DEMOCRATIC REPUBLIC OF THE)</option>
					<option value="COOK ISLANDS">COOK ISLANDS</option>
					<option value="COSTA RICA">COSTA RICA</option>
					<option value="CROATIA">CROATIA</option>
					<option value="CUBA">CUBA</option>
					<option value="CYPRUS">CYPRUS</option>
					<option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
					<option value="CZECHOSLOVAKIA*">CZECHOSLOVAKIA*</option>
					<option value="DAHOMEY*">DAHOMEY*</option>
					<option value="DENMARK">DENMARK</option>
					<option value="DJIBOUTI">DJIBOUTI</option>
					<option value="DOMINICA">DOMINICA</option>
					<option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
					<option value="EAST PAKISTAN*">EAST PAKISTAN*</option>
					<option value="ECUADOR">ECUADOR</option>
					<option value="EGYPT">EGYPT</option>
					<option value="EL SALVADOR">EL SALVADOR</option>
					<option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
					<option value="ERITREA">ERITREA</option>
					<option value="ESTONIA">ESTONIA</option>
					<option value="ETHIOPIA">ETHIOPIA</option>
					<option value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
					<option value="FAROE ISLANDS">FAROE ISLANDS</option>
					<option value="FIJI">FIJI</option>
					<option value="FINLAND">FINLAND</option>
					<option value="FRANCE">FRANCE</option>
					<option value="FRENCH ALGERIA*">FRENCH ALGERIA*</option>
					<option value="FRENCH GUIANA">FRENCH GUIANA</option>
					<option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
					<option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
					<option value="FRENCH TERRITORY OF AFARS AND ISSAS*">FRENCH TERRITORY OF AFARS AND ISSAS*</option>
					<option value="GABON">GABON</option>
					<option value="GAMBIA">GAMBIA</option>
					<option value="GEORGIA">GEORGIA</option>
					<option value="GERMAN EAST AFRICA*">GERMAN EAST AFRICA*</option>
					<option value="GERMANY (DEMOCRATIC REPUBLIC OF)*">GERMANY (DEMOCRATIC REPUBLIC OF)*</option>
					<option value="GERMANY (FEDERAL REPUBLIC OF)">GERMANY (FEDERAL REPUBLIC OF)</option>
					<option value="GHANA">GHANA</option>
					<option value="GIBRALTAR">GIBRALTAR</option>
					<option value="GREECE">GREECE</option>
					<option value="GREENLAND">GREENLAND</option>
					<option value="GRENADA">GRENADA</option>
					<option value="GUADELOUPE">GUADELOUPE</option>
					<option value="GUAM">GUAM</option>
					<option value="GUATEMALA">GUATEMALA</option>
					<option value="GUERNSEY">GUERNSEY</option>
					<option value="GUINEA">GUINEA</option>
					<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					<option value="GUYANA">GUYANA</option>
					<option value="HAITI">HAITI</option>
					<option value="HEARD AND MCDONALD ISLANDS">HEARD AND MCDONALD ISLANDS</option>
					<option value="HONDURAS">HONDURAS</option>
					<option value="HONG KONG SAR">HONG KONG SAR</option>
					<option value="HUNGARY">HUNGARY</option>
					<option value="ICELAND">ICELAND</option>
					<option value="INDIA">INDIA</option>
					<option value="INDONESIA">INDONESIA</option>
					<option value="IRAN">IRAN</option>
					<option value="IRAQ">IRAQ</option>
					<option value="IRELAND">IRELAND</option>
					<option value="ISLE OF MAN">ISLE OF MAN</option>
					<option value="ISRAEL">ISRAEL</option>
					<option value="ITALY">ITALY</option>
					<option value="IVORY COAST">IVORY COAST</option>
					<option value="JAMAICA">JAMAICA</option>
					<option value="JAPAN">JAPAN</option>
					<option value="JERSEY">JERSEY</option>
					<option value="JORDAN">JORDAN</option>
					<option value="KANTON AND ENDERBURY ISLANDS*">KANTON AND ENDERBURY ISLANDS*</option>
					<option value="KAZAKHSTAN">KAZAKHSTAN</option>
					<option value="KENYA">KENYA</option>
					<option value="KIRIBATI">KIRIBATI</option>
					<option value="KOREA, NORTH">KOREA, NORTH</option>
					<option value="KOREA, SOUTH">KOREA, SOUTH</option>
					<option value="KOSOVO">KOSOVO</option>
					<option value="KUWAIT">KUWAIT</option>
					<option value="KYRGYZSTAN">KYRGYZSTAN</option>
					<option value="LAOS">LAOS</option>
					<option value="LATVIA">LATVIA</option>
					<option value="LEBANON">LEBANON</option>
					<option value="LESOTHO">LESOTHO</option>
					<option value="LIBERIA">LIBERIA</option>
					<option value="LIBYA">LIBYA</option>
					<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
					<option value="LITHUANIA">LITHUANIA</option>
					<option value="LUXEMBOURG">LUXEMBOURG</option>
					<option value="MACAU SAR">MACAU SAR</option>
					<option value="MACEDONIA, FORMER YUGOSLAV REPUBLIC OF">MACEDONIA, FORMER YUGOSLAV REPUBLIC OF</option>
					<option value="MADAGASCAR">MADAGASCAR</option>
					<option value="MALAWI">MALAWI</option>
					<option value="MALAYSIA">MALAYSIA</option>
					<option value="MALDIVES">MALDIVES</option>
					<option value="MALI">MALI</option>
					<option value="MALTA">MALTA</option>
					<option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
					<option value="MARTINIQUE">MARTINIQUE</option>
					<option value="MAURITANIA">MAURITANIA</option>
					<option value="MAURITIUS">MAURITIUS</option>
					<option value="MAYOTTE">MAYOTTE</option>
					<option value="MEXICO">MEXICO</option>
					<option value="MICRONESIA">MICRONESIA</option>
					<option value="MOLDOVA">MOLDOVA</option>
					<option value="MONACO">MONACO</option>
					<option value="MONGOLIA">MONGOLIA</option>
					<option value="MONTENEGRO">MONTENEGRO</option>
					<option value="MONTSERRAT">MONTSERRAT</option>
					<option value="MOROCCO">MOROCCO</option>
					<option value="MOZAMBIQUE">MOZAMBIQUE</option>
					<option value="MYANMAR">MYANMAR</option>
					<option value="NAMIBIA">NAMIBIA</option>
					<option value="NAURU">NAURU</option>
					<option value="NEPAL">NEPAL</option>
					<option value="NETHERLANDS">NETHERLANDS</option>
					<option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES</option>
					<option value="NEUTRAL ZONE">NEUTRAL ZONE</option>
					<option value="NEW CALEDONIA">NEW CALEDONIA</option>
					<option value="NEW ZEALAND">NEW ZEALAND</option>
					<option value="NICARAGUA">NICARAGUA</option>
					<option value="NIGER">NIGER</option>
					<option value="NIGERIA">NIGERIA</option>
					<option value="NIUE">NIUE</option>
					<option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
					<option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA ISLANDS</option>
					<option value="NORWAY">NORWAY</option>
					<option value="OMAN">OMAN</option>
					<option value="PAKISTAN">PAKISTAN</option>
					<option value="PALAU">PALAU</option>
					<option value="PALESTINIAN TERRITORIES*">PALESTINIAN TERRITORIES*</option>
					<option value="PANAMA">PANAMA</option>
					<option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
					<option value="PARAGUAY">PARAGUAY</option>
					<option value="PERU">PERU</option>
					<option value="PHILIPPINES">PHILIPPINES</option>
					<option value="PITCAIRN">PITCAIRN</option>
					<option value="POLAND">POLAND</option>
					<option value="PORTUGAL">PORTUGAL</option>
					<option value="PUERTO RICO">PUERTO RICO</option>
					<option value="QATAR">QATAR</option>
					<option value="REUNION">REUNION</option>
					<option value="RHODESIA*">RHODESIA*</option>
					<option value="ROMANIA">ROMANIA</option>
					<option value="RUSSIA">RUSSIA</option>
					<option value="RWANDA">RWANDA</option>
					<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					<option value="SAINT HELENA">SAINT HELENA</option>
					<option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS</option>
					<option value="SAINT LUCIA">SAINT LUCIA</option>
					<option value="SAINT MARTIN">SAINT MARTIN</option>
					<option value="SAINT PIERRE AND MIQUECON">SAINT PIERRE AND MIQUECON</option>
					<option value="SAINT VINCENT AND GRENADINES">SAINT VINCENT AND GRENADINES</option>
					<option value="SAMOA">SAMOA</option>
					<option value="SAN MARINO">SAN MARINO</option>
					<option value="SENEGAL">SENEGAL</option>
					<option value="SERBIA">SERBIA</option>
					<option value="SOUTH GEORGIA AND SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND SOUTH SANDWICH ISLANDS</option>
					<option value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR OUTLYING ISLANDS</option>
					<option value="VIRGIN ISLANDS (BRITISH)">VIRGIN ISLANDS (BRITISH)</option>
					<option value="WALLIS AND FUTUNA ISLANDS">WALLIS AND FUTUNA ISLANDS</option>
					<option value="YEMEN (DEMOCRATIC PEOPLES' REPUBLIC)*">YEMEN (DEMOCRATIC PEOPLES' REPUBLIC)*</option>
				</select>
				<span class="err_p_pbc err"></span>
				</div>
				<div class="clear"></div>
			</div>		

			<div class="ivs-field">
				<label for ="">Family Name at Birth </label>
				<div class="ivs-input">
					<input name="surname_atbirth" id="p_sab" placeholder="Family Name at Birth" type="text" > 
					<span class="err_p_sab err"></span>
					</div>
				<div class="clear"></div>
			</div>		

			<div class="ivs-field">
				<label for ="">Name at Citizenship </label>
				<div class="ivs-input">
					<input name="firstname_atcitizenship" id="p_fac" placeholder="Name at Citizenship " type="text" > <br/>
					<span class="err_p_fac err"></span>
				</div>	
				<div class="clear"></div>
			</div>		

			<div class="ivs-field">
				<label for ="">Family Name at Citizenship  </label>
				<div class="ivs-input">
					<input name="surname_atcitizenship" id="p_sac" placeholder="Family Name at Citizenship" type="text" >
					<span class="err_p_sac err"></span> 
				</div>	
				<div class="clear"></div>
			</div>		


		</div>		
		<div class="ivs-field ivs-btn">	
			<label for =""></label>
			<a href="#?"  class="btn" id="identity_verification"> Verify </a>
			<div class="clear"></div>
		</div>		

	</div>
</form>
	
 
<div class="result">
</div>
<?php
}else{

echo "API Credentials Not Yet Configured";
	}
  ?>

