<?php include('header.php'); ?>

                        </td>
					</tr>
				</thead>
				<tbody class="pagebody">
					<tr>
						<td class="pagebody" align="center">
							<table border="0" cellspacing="0" cellpadding="0" width="908">
								<tr height="20">
									<td width="10"></td>
									<td width="736" colspan="2"></td>
									<td width="10"></td>
								</tr>
								<tr>
									<td class="pagetitle" colspan="4" align="center">Booking Request</td>
								</tr>
								<tr>
									<td height="20" colspan="4"></td>
								</tr>
								<tr>
									<td width="10"></td>
									<td colspan="2" align="center">
										<table border="0" cellspacing="0" cellpadding="0" width="700">
											<tr>
												<td class="titlelabel">All fields marked with <FONT class="errors">*</FONT> are 
													required.</td>
												<td colspan="2" align="right"></td>
											</tr>
											<tr>
												<td height="10" colspan="3">
													</td>
											</tr>
											<tr>
												<td class="tableheader" valign="middle" colspan="3">Travel Information</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" valign="middle" align="left" width="250">Destination</td>
												<td width="450" colspan="2" align="left"><span id="DestionLbl" class="titlelabel">Amsterdam, Rheine, Lucerne  and  Paris, Netherlands, Germany, Switzerland  and  France (Outbound - Europe)</span></td>
												</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Number of <FONT class="errors">*</FONT></td>
												<td valign="top" colspan="2">
													<table border="0" cellspacing="0" cellpadding="0" width="450">
														<tr align="left">
															<td class="titlelabel">Adults (12+ years)</td>
															<td><input name="NumberAdultText" type="text" value="0" maxlength="3" id="NumberAdultText" class="smTextEdit" style="width:50px;" /><span id="RequiredFieldValidator2" class="errors" style="visibility:hidden;">*</span><span id="CompareValidator3" class="errors" style="visibility:hidden;">*</span></td>
															<td class="titlelabel"><span id="children">Children (2-12 years)</span></td>
															<td width="100"><input name="NumberChildrenText" type="text" value="0" maxlength="3" id="NumberChildrenText" class="smTextEdit" style="width:50px;" /><span id="RequiredFieldValidator3" class="errors" style="visibility:hidden;">*</span><span id="CompareValidator4" class="errors" style="visibility:hidden;">*</span></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td colspan="3">
													<div id="tourdiv">
														<table border="0" cellspacing="0" cellpadding="0" width="700">
															<tr align="left">
																<td class="titlelabel" width="250" align="left">Number of Rooms <FONT class="errors">*</FONT></td>
																<td colspan="2" align="left">
																	<table border="0" cellspacing="0" cellpadding="0" width="300">
																		<tr align="left">
																			<td class="titlelabel" width="50">Double
																			</td>
																			<td width="50"><select name="DblCombobox" id="DblCombobox" class="ComboBox">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>

</select></td>
																			<td class="titlelabel" width="50"><span id="SglLabel">Single</span></td>
																			<td width="50"><select name="SglCombobox" id="SglCombobox" class="ComboBox">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>

</select></td>
																			<td class="titlelabel" width="50"><span id="TplLabel">Triple</span></td>
																			<td width="50"><select name="TplCombobox" id="TplCombobox" class="ComboBox">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>

</select></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td height="5" colspan="3"></td>
															</tr>
															</table>
													</div>
												</td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Number of Nights <FONT class="errors">*</FONT></td>
												<td colspan="2" align="left"><span id="lbNights" class="label" style="display:inline-block;width:60px;">8</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Intended Travel Date <FONT class="errors">*</FONT></td>
												<td colspan="2" align="left"><span id="TravelDate" class="label"></span>
													<div id="IndateDiv">
														<table id="CalenderTable" cellspacing="0" cellpadding="0" width="448">
															<tr>
																<td width="20" align="left"><select name="cinday" id="cinday" class="ComboBox">
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
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
	<option selected="selected" value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select></td>
																<td width="7"><select name="cinmonth" id="cinmonth" class="ComboBox">
	<option selected="selected" value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>

</select></td>
																<td width="4"><input name="year" type="text" value="2015" maxlength="4" id="year" class="smTextEdit" style="width:50px;" /></td>
																<td width="20" align="left"><a href="javascript:calendarShow(5,document.cinmonth);"><img alt="" border="0" src="img/calendar.gif" width="21" height="20" /></a>
																</td>
																<td width="140"><br />
																</td>
															</tr>
															<tr>
																<td class="titlelabel" colspan="5">Intended Travel Date should start 3 days after 
																	today.</td>
															</tr>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td colspan="3">
													
												</td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td colspan="3">
													
												</td>
											</tr>
											<tr>
												<td height="20" colspan="3"></td>
											</tr>
											<tr>
												<td colspan="3">
													
												</td>
											</tr>
											
											<tr>
												<td class="tableheader" vAlign="middle" colspan="3">Personal 
													Information</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Title</td>
												<td colspan="2" align="left"><select name="Title" id="Title" class="ComboBox" style="width:60px;">
	<option value="2">Miss</option>
	<option selected="selected" value="1">Mr.</option>
	<option value="2">Mrs.</option>
	<option value="2">Ms.</option>

</select></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">First Name <FONT class="errors">*</FONT></td>
												<td align="left"><input name="FirstName" type="text" maxlength="30" id="FirstName" class="TextEdit" style="width:150px;" /><span id="Requiredfieldvalidator7" tabindex="6" class="errors" style="display:none;">*</span><span id="RegularExpressionValidator2" class="errors" style="display:none;">Please enter characters only in first name.</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Last Name <FONT class="errors">*</FONT></td>
												<td align="left"><input name="LastName" type="text" id="LastName" class="TextEdit" style="width:150px;" /><span id="Requiredfieldvalidator5" tabindex="7" class="errors" style="display:none;">*</span><span id="RegularExpressionValidator3" class="errors" style="Z-INDEX:0;display:none;">Please enter characters only in last name.</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Country of Nationality <FONT class="errors">
														*</FONT></td>
												<td colspan="2" align="left"><select name="CountryNationality" id="CountryNationality" class="ComboBox" style="width:150px;">
	<option value=""></option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet Island">Bouvet Island</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Congo (DRC)">Congo (DRC)</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Croatia">Croatia</option>
	<option value="Cte d&#39;&#39;&#39;&#39;Ivoire">Cte d&#39;&#39;&#39;&#39;Ivoire</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji Islands">Fiji Islands</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Grand Cayman">Grand Cayman</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="GuineaBissau">GuineaBissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holland">Holland</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong SAR">Hong Kong SAR</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea">Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau SAR">Macau SAR</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="None">None</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Islands">Pitcairn Islands</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Seychelles Island">Seychelles Island</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South America">South America</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="St. Helena">St. Helena</option>
	<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
	<option value="St. Lucia">St. Lucia</option>
	<option value="St. Maarten">St. Maarten</option>
	<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
	<option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Virgin Islands (British)">Virgin Islands (British)</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select><span id="Requiredfieldvalidator1" tabindex="7" class="errors" style="visibility:hidden;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Country of Residence <FONT class="errors">*</FONT></td>
												<td colspan="2" align="left"><select name="CountryResidence" id="CountryResidence" class="ComboBox" onchange="SelectIndexChangedCountry(&#39;CountryResidence&#39;);" style="width:150px;">
	<option selected="selected" value=""></option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet Island">Bouvet Island</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Congo (DRC)">Congo (DRC)</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Croatia">Croatia</option>
	<option value="Cte d&#39;&#39;&#39;&#39;Ivoire">Cte d&#39;&#39;&#39;&#39;Ivoire</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji Islands">Fiji Islands</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Grand Cayman">Grand Cayman</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="GuineaBissau">GuineaBissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holland">Holland</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong SAR">Hong Kong SAR</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea">Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau SAR">Macau SAR</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="None">None</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Islands">Pitcairn Islands</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Seychelles Island">Seychelles Island</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South America">South America</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="St. Helena">St. Helena</option>
	<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
	<option value="St. Lucia">St. Lucia</option>
	<option value="St. Maarten">St. Maarten</option>
	<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
	<option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Virgin Islands (British)">Virgin Islands (British)</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select><span id="Requiredfieldvalidator4" tabindex="7" class="errors" style="visibility:hidden;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Nationality<FONT class="errors">*</FONT></td>
												<td colspan="2" align="left"><select name="OracleNationalityDDL" id="OracleNationalityDDL" class="ComboBox" style="width:150px;">
	<option value=""></option>
	<option value="AMR">American</option>
	<option value="CHN">Chinese</option>
	<option value="EGY">Egyptian</option>
	<option value="FOR">Forign Resident</option>
	<option value="FRC">French</option>
	<option value="GRM">German</option>
	<option value="JPN">Japanese</option>
	<option value="AUS">Australian</option>
	<option value="PHI">Philippines</option>
	<option value="LIB">Libyan</option>
	<option value="AFR">African</option>
	<option value="ARG">Argentinian</option>
	<option value="BEL">Belgian</option>
	<option value="BRA">Brazilian</option>
	<option value="BRI">British</option>
	<option value="BUL">Bulgarian</option>
	<option value="CHI">Chilean</option>
	<option value="COL">Colombian</option>
	<option value="COS">Costa Rican</option>
	<option value="CZE">Czech</option>
	<option value="DAN">Danish</option>
	<option value="ITA">Italian</option>
	<option value="ECU">Ecuadoran</option>
	<option value="EST">Estonian</option>
	<option value="FIL">Filipino</option>
	<option value="FIN">Finland</option>
	<option value="GEO">Geargian</option>
	<option value="GRE">Greek</option>
	<option value="GUA">Guatamalen</option>
	<option value="HUN">Hungarian</option>
	<option value="ICE">Icelander</option>
	<option value="IND">Indonesain</option>
	<option value="IRA">Iranian</option>
	<option value="ISR">Israeli</option>
	<option value="IRI">Irish</option>
	<option value="JAM">Jamaican</option>
	<option value="KOR">Korean</option>
	<option value="KYR">Kyrgyz</option>
	<option value="SCO">Scottish</option>
	<option value="SLO">Slovakian</option>
	<option value="SLV">Slovenian</option>
	<option value="SAF">South African</option>
	<option value="SAM">South America</option>
	<option value="SWE">Swedish</option>
	<option value="SWI">Swiss</option>
	<option value="THA">Thai</option>
	<option value="TUR">Turkish</option>
	<option value="LAT">Latvian</option>
	<option value="LIT">Lithuanian</option>
	<option value="LUX">Luxembourgian</option>
	<option value="MAC">Macedonian</option>
	<option value="NEP">Nepalese</option>
	<option value="NZE">New Zealander</option>
	<option value="NOR">Norwegian</option>
	<option value="PAN">Panamanian</option>
	<option value="PER">Peruvian</option>
	<option value="POL">Polish</option>
	<option value="POR">Portuguese</option>
	<option value="PUE">Puerto Rican</option>
	<option value="ROM">Romanian</option>
	<option value="RUS">Russian</option>
	<option value="MEX">Mexican</option>
	<option value="MOR">Moroccon</option>
	<option value="UKR">Ukranian</option>
	<option value="UZB">Uzbekistanian</option>
	<option value="YUG">Yugoslavian</option>
	<option value="ZAM">Zambian</option>
	<option value="AFG">Afghan</option>
	<option value="ALB">Albanian</option>
	<option value="ALG">Algerian</option>
	<option value="AND">Andorran</option>
	<option value="ARM">Armenian</option>
	<option value="AZE">Azerbaijani</option>
	<option value="BAH">Bahamian</option>
	<option value="BHR">Bahraini</option>
	<option value="BAG">Bangladeshi</option>
	<option value="BAR">Barbadian</option>
	<option value="BLR">Belarusian</option>
	<option value="BLZ">Belizean</option>
	<option value="BEN">Beninese</option>
	<option value="BER">Bermudan</option>
	<option value="BHU">Bhutanese</option>
	<option value="BOL">Bolivian</option>
	<option value="BOS">Bosnian</option>
	<option value="HER">Herzegovinia</option>
	<option value="BOT">Botswana</option>
	<option value="BRU">Bruneian</option>
	<option value="BUK">Burkinable</option>
	<option value="BUR">Burndian</option>
	<option value="CAM">Cambodian</option>
	<option value="CAE">Cameroonian</option>
	<option value="CVE">Cape Verdean</option>
	<option value="CAF">Central African</option>
	<option value="CHA">Chadian</option>
	<option value="COM">Comoran</option>
	<option value="CON">Congolese</option>
	<option value="CRO">Croat</option>
	<option value="CUB">Cuban</option>
	<option value="CYP">Cypriot</option>
	<option value="DJI">Djiboutian</option>
	<option value="DOM">Domincian</option>
	<option value="SAL">Salvadoran</option>
	<option value="EQU">Equatorial</option>
	<option value="ERI">Eritrean</option>
	<option value="ETH">Ethiopian</option>
	<option value="FIJ">Fijan</option>
	<option value="GAB">Gabones</option>
	<option value="GAM">Gambian</option>
	<option value="GHA">Ghanaian</option>
	<option value="GRS">Gresnadian</option>
	<option value="GUI">Guinean</option>
	<option value="GBI">Guinea Bissauan</option>
	<option value="GUY">Guyanese</option>
	<option value="HAI">Haitian</option>
	<option value="HON">Handuran</option>
	<option value="INI">Indian</option>
	<option value="IRQ">Iraqi</option>
	<option value="JOR">Jordanian</option>
	<option value="KAZ">Kazakhstani</option>
	<option value="KEN">Kenyan</option>
	<option value="KIR">Kirbati</option>
	<option value="KUW">Kuwaiti</option>
	<option value="LAO">Laotian</option>
	<option value="LEB">Lebanese</option>
	<option value="LES">Lesotho</option>
	<option value="LBE">Liberian</option>
	<option value="LIE">Liechtenstein</option>
	<option value="MAL">Malagasy</option>
	<option value="MLA">Malawian</option>
	<option value="MLY">Malaysian</option>
	<option value="MLD">Maldivian</option>
	<option value="MLI">Malian</option>
	<option value="MLT">Maltese</option>
	<option value="MAU">Mauritian</option>
	<option value="MIC">Micronesia</option>
	<option value="MOL">Moldovan</option>
	<option value="MON">Monacan</option>
	<option value="MOG">Mongolian</option>
	<option value="MOZ">Mozambican</option>
	<option value="BRM">Burmese</option>
	<option value="NAM">Namibian</option>
	<option value="NAU">Nauruan</option>
	<option value="NIC">Nicaraguan</option>
	<option value="NIG">Nigerien</option>
	<option value="NGE">Nigerian</option>
	<option value="OMA">Omani</option>
	<option value="PAK">Pakistani</option>
	<option value="PNG">Papua New Guinean</option>
	<option value="PAR">Paraguayan</option>
	<option value="QAT">Qatari</option>
	<option value="RWA">Rwandan</option>
	<option value="SMO">Samoan</option>
	<option value="SMM">Sammarines</option>
	<option value="SUA">Saudi Arabia</option>
	<option value="SEN">Senegalese</option>
	<option value="SEY">Seychelles</option>
	<option value="SIE">Sierra Leone</option>
	<option value="SIN">Singaporean</option>
	<option value="SOM">Somali</option>
	<option value="SLA">Sri Lankan</option>
	<option value="SUD">Sudanese</option>
	<option value="SUR">Surinamer</option>
	<option value="SWA">Swazi</option>
	<option value="SYR">Syrian</option>
	<option value="CHT">Chinese Taipei</option>
	<option value="TAN">Tanzanian</option>
	<option value="TOG">Togolese</option>
	<option value="TON">Tongan</option>
	<option value="TRI">Trinidadian</option>
	<option value="TUN">Tunisian</option>
	<option value="TUK">Turkmen</option>
	<option value="UGA">Ugandan</option>
	<option value="EMI">Emiratian</option>
	<option value="URU">Uruguayan</option>
	<option value="NIV">Ni- Vanuatu</option>
	<option value="VIE">Vietnamese</option>
	<option value="VEN">Venezuelan</option>
	<option value="YEM">Yemeni</option>
	<option value="ZIM">Zimbabwean</option>
	<option value="EFR">Egyptain&amp;Forign Resident</option>
	<option value="CAN">Candian</option>
	<option value="PAL">Palestinian</option>
	<option value="SPA">Spanish</option>
	<option value="AST">Austrian</option>
	<option value="DUT">Dutch</option>
	<option value="SER">Serbian</option>
	<option value="NLS">Nether Lands</option>
	<option value="TWN">Taiwan Citizen</option>

</select><span id="Requiredfieldvalidator11" tabindex="7" class="errors" style="visibility:hidden;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Please choose an option...</td>
												<td colspan="2" align="left"><select name="HSBCoptionList" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;HSBCoptionList\&#39;,\&#39;\&#39;)&#39;, 0)" id="HSBCoptionList" class="ComboBox">
	<option selected="selected" value="-1#">None of the options applicable</option>
	<option value="-1#">None of the options applicable</option>

</select></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Where did you know about us?</td>
												<td colspan="2" align="left"><select name="KnowAboutDDL" id="KnowAboutDDL" class="ComboBox">
	<option value=""></option>
	<option value="Facebook">Facebook</option>
	<option value="Twitter">Twitter</option>
	<option value="Internet search">Internet search</option>
	<option value="Printed ad">Printed ad</option>
	<option value="Our magazine">Our magazine</option>
	<option value="Email / Newsletter">Email / Newsletter</option>
	<option value="Newspaper">Newspaper</option>

</select></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td></td>
												<td colspan="2"><span id="CampaignLbl" class="errors"></span></td>
											</tr>
											<tr>
												<td height="20" colspan="3"></td>
											</tr>
											<tr>
												<td class="tableheader" valign="middle" colspan="3">Contact Information</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Street Address</td>
												<td colspan="2" align="left"><input name="StreetAddress" type="text" maxlength="50" id="StreetAddress" class="bigTextEdit" style="width:225px;" /></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Country <FONT class="errors">*</FONT></td>
												<td colspan="2" align="left"><select name="country" id="country" class="ComboBox" onchange="SelectIndexChangedCountry(&#39;country&#39;);" style="width:150px;">
	<option selected="selected" value=""></option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet Island">Bouvet Island</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Congo (DRC)">Congo (DRC)</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Croatia">Croatia</option>
	<option value="Cte d&#39;&#39;&#39;&#39;Ivoire">Cte d&#39;&#39;&#39;&#39;Ivoire</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji Islands">Fiji Islands</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Grand Cayman">Grand Cayman</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="GuineaBissau">GuineaBissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holland">Holland</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong SAR">Hong Kong SAR</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea">Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau SAR">Macau SAR</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="None">None</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Islands">Pitcairn Islands</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Seychelles Island">Seychelles Island</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South America">South America</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="St. Helena">St. Helena</option>
	<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
	<option value="St. Lucia">St. Lucia</option>
	<option value="St. Maarten">St. Maarten</option>
	<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
	<option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Virgin Islands (British)">Virgin Islands (British)</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select><span id="Requiredfieldvalidator6" tabindex="7" class="errors" style="visibility:hidden;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">City</td>
												<td colspan="2" align="left"><input name="City" type="text" maxlength="20" id="City" class="TextEdit" style="width:150px;" /><select name="CityDDL" id="CityDDL" class="ComboBox" onchange="SelectIndexChangedCity();">
	<option selected="selected" value="Please Select a City">Please Select a City</option>
	<option value="6th October (02)">6th October (02)</option>
	<option value="Abu Simbel (097)">Abu Simbel (097)</option>
	<option value="Abu Soma ()">Abu Soma ()</option>
	<option value="Ain Sokhna (062)">Ain Sokhna (062)</option>
	<option value="Al Arish (068)">Al Arish (068)</option>
	<option value="Alexandria (03)">Alexandria (03)</option>
	<option value="Aswan (097)">Aswan (097)</option>
	<option value="Bahareya (045)">Bahareya (045)</option>
	<option value="Borg El Arab (03)">Borg El Arab (03)</option>
	<option value="Cairo (02)">Cairo (02)</option>
	<option value="Dahab (069)">Dahab (069)</option>
	<option value="Edfu (095)">Edfu (095)</option>
	<option value="Egypt ()">Egypt ()</option>
	<option value="El Arish ()">El Arish ()</option>
	<option value="El Dakhla Oasis (092)">El Dakhla Oasis (092)</option>
	<option value="El Gouna (065)">El Gouna (065)</option>
	<option value="El Kab ()">El Kab ()</option>
	<option value="El Kharga Oasis (092)">El Kharga Oasis (092)</option>
	<option value="El Minya (086)">El Minya (086)</option>
	<option value="El Quseir (065)">El Quseir (065)</option>
	<option value="Fayoum ()">Fayoum ()</option>
	<option value="Giza (02)">Giza (02)</option>
	<option value="Helwan (02)">Helwan (02)</option>
	<option value="Hurghada (065)">Hurghada (065)</option>
	<option value="Ismailia (064)">Ismailia (064)</option>
	<option value="Kom Ombo (095)">Kom Ombo (095)</option>
	<option value="Lake Nasser (096)">Lake Nasser (096)</option>
	<option value="Luxor (095)">Luxor (095)</option>
	<option value="Luxor (095)">Luxor (095)</option>
	<option value="Makadi Bay (065)">Makadi Bay (065)</option>
	<option value="Marsa Alam (065)">Marsa Alam (065)</option>
	<option value="Marsa Matruh (046)">Marsa Matruh (046)</option>
	<option value="Mersa Matruh (046)">Mersa Matruh (046)</option>
	<option value="Minya (086)">Minya (086)</option>
	<option value="Nile Cruises ()">Nile Cruises ()</option>
	<option value="Port Said (066)">Port Said (066)</option>
	<option value="Safaga (0653)">Safaga (0653)</option>
	<option value="Sahl Hasheesh (067)">Sahl Hasheesh (067)</option>
	<option value="Sharm El Sheikh (069)">Sharm El Sheikh (069)</option>
	<option value="Sohag (093)">Sohag (093)</option>
	<option value="Soma Bay (065)">Soma Bay (065)</option>
	<option value="St Catherine (069)">St Catherine (069)</option>
	<option value="Suez (062)">Suez (062)</option>
	<option value="Taba (069)">Taba (069)</option>

</select><span id="RequiredFieldValidator9" class="errors" style="visibility:hidden;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" width="250" align="left">Phone Number</td>
												<td align="left"><span id="PhoneCodeTxt" class="TextEdit" style="display:inline-block;width:50px;"></span><input name="PhoneNumberTxt" type="text" id="PhoneNumberTxt" class="TextEdit" style="width:170px;" /></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" width="250" align="left">Mobile</td>
												<td align="left"><input name="MobileTxt" type="text" id="MobileTxt" class="TextEdit" style="width:170px;" /></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" width="250" align="left">Fax Number</td>
												<td colspan="2" align="left"><input name="FaxTxt" type="text" id="FaxTxt" class="TextEdit" style="width:170px;" /></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" align="left">Email Address <FONT class="errors">*</FONT></td>
												<td width="450" colspan="2" align="left"><input name="EmailAddress" type="text" maxlength="50" id="EmailAddress" class="bigTextEdit" style="width:225px;" /><span id="RegularExpressionValidator1" tabindex="12" class="errors" style="display:none;">*</span><span id="Requiredfieldvalidator8" tabindex="11" class="errors" style="display:none;">*</span></td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td class="tableheader" valign="middle" colspan="3">Special Requests</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="Label" colspan="3" align="left">Please enter any special requests or needs you may 
													have in the box below so that we may better service your booking.
												</td>
											</tr>
											<tr>
												<td height="5" colspan="3"></td>
											</tr>
											<tr>
												<td width="650" colspan="3" align="left"><textarea name="comment" rows="2" cols="20" id="comment" class="TextArea" style="height:105px;width:650px;">
</textarea></td>
											</tr>
											<tr>
												<td height="20" colspan="3"></td>
											</tr>
											<tr>
												<td class="tableheader" vAlign="middle" colspan="3">Privacy Statement</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="Label" colspan="3" align="left">We understand that making purchases online involves a 
													great deal of trust on your part; we take this trust very seriously, and make 
													it our highest priority to ensure the security and confidentiality of the 
													personally identifiable information ("PII") you provide us. (PII includes 
													information that can be linked to a specific individual, such as name, address, 
													phone number, or email address.)
												</td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td class="titlelabel" colspan="2" align="left">
												    <span style="display:inline-block;color:#3366FF;height:22px;width:10px;"><input id="AgreementCheck" type="checkbox" name="AgreementCheck" /></span>&nbsp;&nbsp;&nbsp;  <a class="titlelabel" onclick="MM_openBrWindow('cond.aspx','','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=550,height=600')" href="#">I accept the terms and conditions </a>
													<br />
												</td>
											</tr>
											<tr>
												<td height="10" colspan="3" align="center"></td>
											</tr>
											<tr>
												<td colspan="3" align="center"><div id="ValidationSummary1" class="errors" style="display:none;">

</div></td>
											</tr>
											<tr>
												<td colspan="3" align="center"></td>
											</tr>
											<tr>
												<td colspan="3" align="center"></td>
											</tr>
											<tr>
												<td colspan="3" align="center"></td>
											</tr>
											<tr>
												<td colspan="3" align="center"></td>
											</tr>
											<tr>
												<td height="10" colspan="3"></td>
											</tr>
											<tr>
												<td colspan="3" align="center">
												<div>
												<div id="UpdateProgress" style="display:none;">
	
<img id="Image1" src="waiting.gif" alt="Processing" />

</div>

<div id="pnlData">
	
<span id="ErrorLabel" class="errors"></span><br />
<span id="result" class="errors"></span><br />
<input type="submit" name="Button1" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button1" class="button" style="width:120px;" />

</div>
</div>
												</td>
											</tr>
										</table>
	
											
											



<?php include('footer.php'); ?>
