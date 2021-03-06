<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

					<div id="cover" class="gridlove-cover-area">
					<div class="gridlove-cover-item">
					<div class="gridlove-cover-bg">
					<span class="gridlove-cover">
					<img width="1500" height="500" src="https://mksdmcdn-9b59.kxcdn.com/gridlove/wp-content/uploads/2016/09/gridlock_52-1500x500.jpg" class="attachment-gridlove-cover size-gridlove-cover wp-post-image" alt="">        		 
					</span>  
					</div>

					</div>
					</div>


						<div id="content" class="gridlove-site-content container">
						<div class="row">
						<div class="gridlove-content gridlove-page-layout-4">
						<article id="post-2234" class="gridlove-box box-vm post-2234 page type-page status-publish has-post-thumbnail hentry">
						<div class="box-inner-p-bigger box-single">
						<div class="entry-header">
						<h1 class="entry-title">Be a Pink Buzz Reader</h1></div>
						<div class="entry-content">
						<p> Fill out the form to subscribe for free July edition of "Pink Buzz Newspaper". Try it to love it ! 
						</p>
                 
					<?php
						
						if($print == "print" && $digital == ""){

							$print = true; $digital = true;
							$type = "print";
						}

						if($print == "print" && $digital == "digital"){

							$print = true; $digital = true; $type = "both";
						}
						if($print == "" && $digital == "digital"){

							$print = true; $digital = false; $type = "digital";
						}


					?>	
					<!-- include message block -->
                    <?php $this->load->view('partials/_messages_blog'); ?>

					
					 <?php echo form_open('savesubscribe', ['id' => 'form_validate', 'class' => 'validate_terms']); ?>
					<?php if($print): ?>
					<div class="subsciption_form_container">
					
					<input type="hidden" name="type" value="<?php echo $type; ?>" >	
					<fieldset>
					<div class="row noprint_subscription">
					<div class="col-lg-12 col-md-12">
					<h4> Personal Information </h4>
					</div>
					<div class="col-lg-12 col-md-12">
					<!-- parents-name input-->
					<div class="control-group">
					<label class="control-label">Parent's / Gaurdian's Name</label>
					<div class="controls">
					<input id="parents-name" name="pname" required="required" type="text" placeholder="Enter Parent's / Gaurdian's Name" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
					<!-- Child-name input-->
					<div class="control-group">
					<label class="control-label">Child's Name</label>
					<div class="controls">
					<input id="child-name" name="cname" required="required" type="text" placeholder="Enter Child's name" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
					<!-- Child Age  input-->
					<div class="control-group">
					<label class="control-label">Child's Age</label>
					<div class="controls">
					<input id="childAge" name="age" required="required" type="number" placeholder="Enter number of Years" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>
					<!-- Email  input-->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">Email Address</label>
					<div class="controls">
					<input id="email" name="email" required="required" type="email" placeholder="Enter Email ID" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>
					<!-- Mobile  input-->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">Mobile Number</label>
					<div class="controls">
					<input id="mobile" name="mobile"  maxlenght="10" required="required" type="number" placeholder="Enter Mobile Number" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>
					</div>
					</fieldset></div>
                   <?php endif; ?>
                
                
                
                	<?php if($digital): ?>
					<div class="row withprint_subscription">

					<div class="col-lg-12 col-md-12">

					<div class="mks_separator" style="border-bottom: 2px solid;"></div>


					<h4> Shipping Address </h4>

					</div>



					<!-- address-line1 input-->
					<div class="col-lg-12 col-md-12">

					<div class="control-group">
					<label class="control-label">Address Line 1</label>
					<div class="controls">
					<input id="address-line1" name="address1" required="required" type="text" placeholder="address line 1" class="input-xlarge">
					<p class="help-block">Street address, P.O. box, company name, c/o</p>
					</div>
					</div>

					</div>

					<!-- address-line2 input-->
					<div class="col-lg-12 col-md-12">
					<div class="control-group">
					<label class="control-label">Address Line 2</label>
					<div class="controls">
					<input id="address-line2" name="address2" type="text" placeholder="address line 2" class="input-xlarge">
					<p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
					</div>
					</div>
					</div>


					<!-- city input-->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">City / Town</label>
					<div class="controls">
					<input id="city" name="city" required="required" type="text" placeholder="city" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>


					<!-- region input-->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">State / Province / Region</label>
					<div class="controls">
					<input id="region" name="state" required="required" type="text" placeholder="state / province / region" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>


					<!-- postal-code input-->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">Zip / Postal Code</label>
					<div class="controls">
					<input id="postal-code" name="zipcode" required="required" type="number" placeholder="zip or postal code" class="input-xlarge">
					<p class="help-block"></p>
					</div>
					</div>
					</div>


					<!-- country select -->
					<div class="col-lg-6 col-md-6">
					<div class="control-group">
					<label class="control-label">Country</label>
					<div class="controls">
					<select id="country" name="country" required="required" class="input-xlarge"><!--Fix India-->
					<option value="" selected="selected">(please select a country)</option>
					<option value="AF">Afghanistan</option>
					<option value="AL">Albania</option>
					<option value="DZ">Algeria</option>
					<option value="AS">American Samoa</option>
					<option value="AD">Andorra</option>
					<option value="AO">Angola</option>
					<option value="AI">Anguilla</option>
					<option value="AQ">Antarctica</option>
					<option value="AG">Antigua and Barbuda</option>
					<option value="AR">Argentina</option>
					<option value="AM">Armenia</option>
					<option value="AW">Aruba</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="AZ">Azerbaijan</option>
					<option value="BS">Bahamas</option>
					<option value="BH">Bahrain</option>
					<option value="BD">Bangladesh</option>
					<option value="BB">Barbados</option>
					<option value="BY">Belarus</option>
					<option value="BE">Belgium</option>
					<option value="BZ">Belize</option>
					<option value="BJ">Benin</option>
					<option value="BM">Bermuda</option>
					<option value="BT">Bhutan</option>
					<option value="BO">Bolivia</option>
					<option value="BA">Bosnia and Herzegowina</option>
					<option value="BW">Botswana</option>
					<option value="BV">Bouvet Island</option>
					<option value="BR">Brazil</option>
					<option value="IO">British Indian Ocean Territory</option>
					<option value="BN">Brunei Darussalam</option>
					<option value="BG">Bulgaria</option>
					<option value="BF">Burkina Faso</option>
					<option value="BI">Burundi</option>
					<option value="KH">Cambodia</option>
					<option value="CM">Cameroon</option>
					<option value="CA">Canada</option>
					<option value="CV">Cape Verde</option>
					<option value="KY">Cayman Islands</option>
					<option value="CF">Central African Republic</option>
					<option value="TD">Chad</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CX">Christmas Island</option>
					<option value="CC">Cocos (Keeling) Islands</option>
					<option value="CO">Colombia</option>
					<option value="KM">Comoros</option>
					<option value="CG">Congo</option>
					<option value="CD">Congo, the Democratic Republic of the</option>
					<option value="CK">Cook Islands</option>
					<option value="CR">Costa Rica</option>
					<option value="CI">Cote d'Ivoire</option>
					<option value="HR">Croatia (Hrvatska)</option>
					<option value="CU">Cuba</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DJ">Djibouti</option>
					<option value="DM">Dominica</option>
					<option value="DO">Dominican Republic</option>
					<option value="TP">East Timor</option>
					<option value="EC">Ecuador</option>
					<option value="EG">Egypt</option>
					<option value="SV">El Salvador</option>
					<option value="GQ">Equatorial Guinea</option>
					<option value="ER">Eritrea</option>
					<option value="EE">Estonia</option>
					<option value="ET">Ethiopia</option>
					<option value="FK">Falkland Islands (Malvinas)</option>
					<option value="FO">Faroe Islands</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="FX">France, Metropolitan</option>
					<option value="GF">French Guiana</option>
					<option value="PF">French Polynesia</option>
					<option value="TF">French Southern Territories</option>
					<option value="GA">Gabon</option>
					<option value="GM">Gambia</option>
					<option value="GE">Georgia</option>
					<option value="DE">Germany</option>
					<option value="GH">Ghana</option>
					<option value="GI">Gibraltar</option>
					<option value="GR">Greece</option>
					<option value="GL">Greenland</option>
					<option value="GD">Grenada</option>
					<option value="GP">Guadeloupe</option>
					<option value="GU">Guam</option>
					<option value="GT">Guatemala</option>
					<option value="GN">Guinea</option>
					<option value="GW">Guinea-Bissau</option>
					<option value="GY">Guyana</option>
					<option value="HT">Haiti</option>
					<option value="HM">Heard and Mc Donald Islands</option>
					<option value="VA">Holy See (Vatican City State)</option>
					<option value="HN">Honduras</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="ID">Indonesia</option>
					<option value="IR">Iran (Islamic Republic of)</option>
					<option value="IQ">Iraq</option>
					<option value="IE">Ireland</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="JO">Jordan</option>
					<option value="KZ">Kazakhstan</option>
					<option value="KE">Kenya</option>
					<option value="KI">Kiribati</option>
					<option value="KP">Korea, Democratic People's Republic of</option>
					<option value="KR">Korea, Republic of</option>
					<option value="KW">Kuwait</option>
					<option value="KG">Kyrgyzstan</option>
					<option value="LA">Lao People's Democratic Republic</option>
					<option value="LV">Latvia</option>
					<option value="LB">Lebanon</option>
					<option value="LS">Lesotho</option>
					<option value="LR">Liberia</option>
					<option value="LY">Libyan Arab Jamahiriya</option>
					<option value="LI">Liechtenstein</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MO">Macau</option>
					<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
					<option value="MG">Madagascar</option>
					<option value="MW">Malawi</option>
					<option value="MY">Malaysia</option>
					<option value="MV">Maldives</option>
					<option value="ML">Mali</option>
					<option value="MT">Malta</option>
					<option value="MH">Marshall Islands</option>
					<option value="MQ">Martinique</option>
					<option value="MR">Mauritania</option>
					<option value="MU">Mauritius</option>
					<option value="YT">Mayotte</option>
					<option value="MX">Mexico</option>
					<option value="FM">Micronesia, Federated States of</option>
					<option value="MD">Moldova, Republic of</option>
					<option value="MC">Monaco</option>
					<option value="MN">Mongolia</option>
					<option value="MS">Montserrat</option>
					<option value="MA">Morocco</option>
					<option value="MZ">Mozambique</option>
					<option value="MM">Myanmar</option>
					<option value="NA">Namibia</option>
					<option value="NR">Nauru</option>
					<option value="NP">Nepal</option>
					<option value="NL">Netherlands</option>
					<option value="AN">Netherlands Antilles</option>
					<option value="NC">New Caledonia</option>
					<option value="NZ">New Zealand</option>
					<option value="NI">Nicaragua</option>
					<option value="NE">Niger</option>
					<option value="NG">Nigeria</option>
					<option value="NU">Niue</option>
					<option value="NF">Norfolk Island</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="NO">Norway</option>
					<option value="OM">Oman</option>
					<option value="PK">Pakistan</option>
					<option value="PW">Palau</option>
					<option value="PA">Panama</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PY">Paraguay</option>
					<option value="PE">Peru</option>
					<option value="PH">Philippines</option>
					<option value="PN">Pitcairn</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="PR">Puerto Rico</option>
					<option value="QA">Qatar</option>
					<option value="RE">Reunion</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="KN">Saint Kitts and Nevis</option>
					<option value="LC">Saint LUCIA</option>
					<option value="VC">Saint Vincent and the Grenadines</option>
					<option value="WS">Samoa</option>
					<option value="SM">San Marino</option>
					<option value="ST">Sao Tome and Principe</option>
					<option value="SA">Saudi Arabia</option>
					<option value="SN">Senegal</option>
					<option value="SC">Seychelles</option>
					<option value="SL">Sierra Leone</option>
					<option value="SG">Singapore</option>
					<option value="SK">Slovakia (Slovak Republic)</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Islands</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="GS">South Georgia and the South Sandwich Islands</option>
					<option value="ES">Spain</option>
					<option value="LK">Sri Lanka</option>
					<option value="SH">St. Helena</option>
					<option value="PM">St. Pierre and Miquelon</option>
					<option value="SD">Sudan</option>
					<option value="SR">Suriname</option>
					<option value="SJ">Svalbard and Jan Mayen Islands</option>
					<option value="SZ">Swaziland</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="TW">Taiwan, Province of China</option>
					<option value="TJ">Tajikistan</option>
					<option value="TZ">Tanzania, United Republic of</option>
					<option value="TH">Thailand</option>
					<option value="TG">Togo</option>
					<option value="TK">Tokelau</option>
					<option value="TO">Tonga</option>
					<option value="TT">Trinidad and Tobago</option>
					<option value="TN">Tunisia</option>
					<option value="TR">Turkey</option>
					<option value="TM">Turkmenistan</option>
					<option value="TC">Turks and Caicos Islands</option>
					<option value="TV">Tuvalu</option>
					<option value="UG">Uganda</option>
					<option value="UA">Ukraine</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="UY">Uruguay</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VU">Vanuatu</option>
					<option value="VE">Venezuela</option>
					<option value="VN">Viet Nam</option>
					<option value="VG">Virgin Islands (British)</option>
					<option value="VI">Virgin Islands (U.S.)</option>
					<option value="WF">Wallis and Futuna Islands</option>
					<option value="EH">Western Sahara</option>
					<option value="YE">Yemen</option>
					<option value="YU">Yugoslavia</option>
					<option value="ZM">Zambia</option>
					<option value="ZW">Zimbabwe</option>
					</select>
					</div>
					</div>
					</div>


					</div>   
                <?php endif; ?>
              
                <div class="form-submit">
                
                <input type="checkbox" id="terms" name="agree" required="required" value="1">
  <label for="Terms &amp; Conditions"> Agree to <a href="./terms-conditions" target="_blank"> Subscription Terms and Conditions </a> </label><br><br>
                
                
                <input type="submit" value="Get Subscribed" name="SubmitSubscribe" id="submitsubscribe" class="gridlove-button-search submit">
                </div>
                
                
                  </form>
                
            
        
  
  
  
					</div>
         
            
                
    </div>
    
    
    
    </article></div>
    
                        
    
                    
                    
     
    
    
                </div>
                
                
    
                           
        
                </div>