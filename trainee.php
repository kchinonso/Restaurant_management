
<?php
      require "header.php";
    ?>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>Trainee</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="index.php">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            Trainee
                        </li>
                    </ul>
                </div>
            </div>
        </div>

      
        <section class="contact-section section-padding pt-0 section-bg mt-5">
            <div class="container">
            <div class="contact-title text-center my-5">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                                </div>
                <div class="contact-area">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-6">
                        <div class="contact-form-items">
                                
                                <form  id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name*">
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="password" name="password"  placeholder="Password*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="date" name="date_of_birth" placeholder="Date of Birth*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-calender"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Your Address</h6>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="number" name="post_code"  placeholder="post code*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="state" placeholder="State*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                      
                                        </div>
                                    
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="marital_status" placeholder="Marital Status*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="contact_confirmation" placeholder="Contact information*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="disability" placeholder="Disability*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp mb-5" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <label for="">Upload ID</label><br>
                                                <input type="file" name="proof_of_id" placeholder="Proof of ID*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        
                        
                        </form>
                        </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
                           <div class="contact-form-items">
                            <form id="contact-form" method="POST">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="email" name="email" placeholder="Email*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelop"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt"><br>
                                                <input type="password" name="confirm_password" placeholder="Confirm password*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt"><br>
                                        <input type="text" name="city"  placeholder="City*">
                                        <div class="icon">
                                            <!-- <i class="fal fa-user"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt"><br><br>
                                        <input type="text" name="apartment" placeholder="Apartment*">
                                        <div class="icon">
                                            <!-- <i class="fal fa-envelope"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt"><br>
                                                <input type="text" name="street_name" placeholder="Street name*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="sexual-orientation" placeholder="Sexual orientation*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="emergency_contact" placeholder="Emergency contact*">
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                            <div class="col-lg-12 ">
                                            <div class="form-clt text-dark">
                                                <label for="">Select your gender</label>
                                              <select name="" >
                                                <!-- <option value="">Gender</option> -->
                                                <option  value="">Male</option>
                                                <option value="">Female</option>
                                                <option value="">Other</option>
                                              </select>
                                                <div class="icon">
                                                    <!-- <i class="fal fa-user"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                     

                          
                                       
                                    
                                       
                                        <div class="col-lg-12 wow fadeInUp mb-5" data-wow-delay=".5s">
                                            <div class="form-">
                                                <label for="">Select your country</label>
                                            <select class="form-select " aria-label="Default select example">
    <option value="AFG">Afghanistan</option>
    <option value="ALA">Åland Islands</option>
    <option value="ALB">Albania</option>
    <option value="DZA">Algeria</option>
    <option value="ASM">American Samoa</option>
    <option value="AND">Andorra</option>
    <option value="AGO">Angola</option>
    <option value="AIA">Anguilla</option>
    <option value="ATA">Antarctica</option>
    <option value="ATG">Antigua and Barbuda</option>
    <option value="ARG">Argentina</option>
    <option value="ARM">Armenia</option>
    <option value="ABW">Aruba</option>
    <option value="AUS">Australia</option>
    <option value="AUT">Austria</option>
    <option value="AZE">Azerbaijan</option>
    <option value="BHS">Bahamas</option>
    <option value="BHR">Bahrain</option>
    <option value="BGD">Bangladesh</option>
    <option value="BRB">Barbados</option>
    <option value="BLR">Belarus</option>
    <option value="BEL">Belgium</option>
    <option value="BLZ">Belize</option>
    <option value="BEN">Benin</option>
    <option value="BMU">Bermuda</option>
    <option value="BTN">Bhutan</option>
    <option value="BOL">Bolivia, Plurinational State of</option>
    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
    <option value="BIH">Bosnia and Herzegovina</option>
    <option value="BWA">Botswana</option>
    <option value="BVT">Bouvet Island</option>
    <option value="BRA">Brazil</option>
    <option value="IOT">British Indian Ocean Territory</option>
    <option value="BRN">Brunei Darussalam</option>
    <option value="BGR">Bulgaria</option>
    <option value="BFA">Burkina Faso</option>
    <option value="BDI">Burundi</option>
    <option value="KHM">Cambodia</option>
    <option value="CMR">Cameroon</option>
    <option value="CAN">Canada</option>
    <option value="CPV">Cape Verde</option>
    <option value="CYM">Cayman Islands</option>
    <option value="CAF">Central African Republic</option>
    <option value="TCD">Chad</option>
    <option value="CHL">Chile</option>
    <option value="CHN">China</option>
    <option value="CXR">Christmas Island</option>
    <option value="CCK">Cocos (Keeling) Islands</option>
    <option value="COL">Colombia</option>
    <option value="COM">Comoros</option>
    <option value="COG">Congo</option>
    <option value="COD">Congo, the Democratic Republic of the</option>
    <option value="COK">Cook Islands</option>
    <option value="CRI">Costa Rica</option>
    <option value="CIV">Côte d'Ivoire</option>
    <option value="HRV">Croatia</option>
    <option value="CUB">Cuba</option>
    <option value="CUW">Curaçao</option>
    <option value="CYP">Cyprus</option>
    <option value="CZE">Czech Republic</option>
    <option value="DNK">Denmark</option>
    <option value="DJI">Djibouti</option>
    <option value="DMA">Dominica</option>
    <option value="DOM">Dominican Republic</option>
    <option value="ECU">Ecuador</option>
    <option value="EGY">Egypt</option>
    <option value="SLV">El Salvador</option>
    <option value="GNQ">Equatorial Guinea</option>
    <option value="ERI">Eritrea</option>
    <option value="EST">Estonia</option>
    <option value="ETH">Ethiopia</option>
    <option value="FLK">Falkland Islands (Malvinas)</option>
    <option value="FRO">Faroe Islands</option>
    <option value="FJI">Fiji</option>
    <option value="FIN">Finland</option>
    <option value="FRA">France</option>
    <option value="GUF">French Guiana</option>
    <option value="PYF">French Polynesia</option>
    <option value="ATF">French Southern Territories</option>
    <option value="GAB">Gabon</option>
    <option value="GMB">Gambia</option>
    <option value="GEO">Georgia</option>
    <option value="DEU">Germany</option>
    <option value="GHA">Ghana</option>
    <option value="GIB">Gibraltar</option>
    <option value="GRC">Greece</option>
    <option value="GRL">Greenland</option>
    <option value="GRD">Grenada</option>
    <option value="GLP">Guadeloupe</option>
    <option value="GUM">Guam</option>
    <option value="GTM">Guatemala</option>
    <option value="GGY">Guernsey</option>
    <option value="GIN">Guinea</option>
    <option value="GNB">Guinea-Bissau</option>
    <option value="GUY">Guyana</option>
    <option value="HTI">Haiti</option>
    <option value="HMD">Heard Island and McDonald Islands</option>
    <option value="VAT">Holy See (Vatican City State)</option>
    <option value="HND">Honduras</option>
    <option value="HKG">Hong Kong</option>
    <option value="HUN">Hungary</option>
    <option value="ISL">Iceland</option>
    <option value="IND">India</option>
    <option value="IDN">Indonesia</option>
    <option value="IRN">Iran, Islamic Republic of</option>
    <option value="IRQ">Iraq</option>
    <option value="IRL">Ireland</option>
    <option value="IMN">Isle of Man</option>
    <option value="ISR">Israel</option>
    <option value="ITA">Italy</option>
    <option value="JAM">Jamaica</option>
    <option value="JPN">Japan</option>
    <option value="JEY">Jersey</option>
    <option value="JOR">Jordan</option>
    <option value="KAZ">Kazakhstan</option>
    <option value="KEN">Kenya</option>
    <option value="KIR">Kiribati</option>
    <option value="PRK">Korea, Democratic People's Republic of</option>
    <option value="KOR">Korea, Republic of</option>
    <option value="KWT">Kuwait</option>
    <option value="KGZ">Kyrgyzstan</option>
    <option value="LAO">Lao People's Democratic Republic</option>
    <option value="LVA">Latvia</option>
    <option value="LBN">Lebanon</option>
    <option value="LSO">Lesotho</option>
    <option value="LBR">Liberia</option>
    <option value="LBY">Libya</option>
    <option value="LIE">Liechtenstein</option>
    <option value="LTU">Lithuania</option>
    <option value="LUX">Luxembourg</option>
    <option value="MAC">Macao</option>
    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
    <option value="MDG">Madagascar</option>
    <option value="MWI">Malawi</option>
    <option value="MYS">Malaysia</option>
    <option value="MDV">Maldives</option>
    <option value="MLI">Mali</option>
    <option value="MLT">Malta</option>
    <option value="MHL">Marshall Islands</option>
    <option value="MTQ">Martinique</option>
    <option value="MRT">Mauritania</option>
    <option value="MUS">Mauritius</option>
    <option value="MYT">Mayotte</option>
    <option value="MEX">Mexico</option>
    <option value="FSM">Micronesia, Federated States of</option>
    <option value="MDA">Moldova, Republic of</option>
    <option value="MCO">Monaco</option>
    <option value="MNG">Mongolia</option>
    <option value="MNE">Montenegro</option>
    <option value="MSR">Montserrat</option>
    <option value="MAR">Morocco</option>
    <option value="MOZ">Mozambique</option>
    <option value="MMR">Myanmar</option>
    <option value="NAM">Namibia</option>
    <option value="NRU">Nauru</option>
    <option value="NPL">Nepal</option>
    <option value="NLD">Netherlands</option>
    <option value="NCL">New Caledonia</option>
    <option value="NZL">New Zealand</option>
    <option value="NIC">Nicaragua</option>
    <option value="NER">Niger</option>
    <option value="NGA">Nigeria</option>
    <option value="NIU">Niue</option>
    <option value="NFK">Norfolk Island</option>
    <option value="MNP">Northern Mariana Islands</option>
    <option value="NOR">Norway</option>
    <option value="OMN">Oman</option>
    <option value="PAK">Pakistan</option>
    <option value="PLW">Palau</option>
    <option value="PSE">Palestinian Territory, Occupied</option>
    <option value="PAN">Panama</option>
    <option value="PNG">Papua New Guinea</option>
    <option value="PRY">Paraguay</option>
    <option value="PER">Peru</option>
    <option value="PHL">Philippines</option>
    <option value="PCN">Pitcairn</option>
    <option value="POL">Poland</option>
    <option value="PRT">Portugal</option>
    <option value="PRI">Puerto Rico</option>
    <option value="QAT">Qatar</option>
    <option value="REU">Réunion</option>
    <option value="ROU">Romania</option>
    <option value="RUS">Russian Federation</option>
    <option value="RWA">Rwanda</option>
    <option value="BLM">Saint Barthélemy</option>
    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KNA">Saint Kitts and Nevis</option>
    <option value="LCA">Saint Lucia</option>
    <option value="MAF">Saint Martin (French part)</option>
    <option value="SPM">Saint Pierre and Miquelon</option>
    <option value="VCT">Saint Vincent and the Grenadines</option>
    <option value="WSM">Samoa</option>
    <option value="SMR">San Marino</option>
    <option value="STP">Sao Tome and Principe</option>
    <option value="SAU">Saudi Arabia</option>
    <option value="SEN">Senegal</option>
    <option value="SRB">Serbia</option>
    <option value="SYC">Seychelles</option>
    <option value="SLE">Sierra Leone</option>
    <option value="SGP">Singapore</option>
    <option value="SXM">Sint Maarten (Dutch part)</option>
    <option value="SVK">Slovakia</option>
    <option value="SVN">Slovenia</option>
    <option value="SLB">Solomon Islands</option>
    <option value="SOM">Somalia</option>
    <option value="ZAF">South Africa</option>
    <option value="SGS">South Georgia and the South Sandwich Islands</option>
    <option value="SSD">South Sudan</option>
    <option value="ESP">Spain</option>
    <option value="LKA">Sri Lanka</option>
    <option value="SDN">Sudan</option>
    <option value="SUR">Suriname</option>
    <option value="SJM">Svalbard and Jan Mayen</option>
    <option value="SWZ">Swaziland</option>
    <option value="SWE">Sweden</option>
    <option value="CHE">Switzerland</option>
    <option value="SYR">Syrian Arab Republic</option>
    <option value="TWN">Taiwan, Province of China</option>
    <option value="TJK">Tajikistan</option>
    <option value="TZA">Tanzania, United Republic of</option>
    <option value="THA">Thailand</option>
    <option value="TLS">Timor-Leste</option>
    <option value="TGO">Togo</option>
    <option value="TKL">Tokelau</option>
    <option value="TON">Tonga</option>
    <option value="TTO">Trinidad and Tobago</option>
    <option value="TUN">Tunisia</option>
    <option value="TUR">Turkey</option>
    <option value="TKM">Turkmenistan</option>
    <option value="TCA">Turks and Caicos Islands</option>
    <option value="TUV">Tuvalu</option>
    <option value="UGA">Uganda</option>
    <option value="UKR">Ukraine</option>
    <option value="ARE">United Arab Emirates</option>
    <option value="GBR">United Kingdom</option>
    <option value="USA">United States</option>
    <option value="UMI">United States Minor Outlying Islands</option>
    <option value="URY">Uruguay</option>
    <option value="UZB">Uzbekistan</option>
    <option value="VUT">Vanuatu</option>
    <option value="VEN">Venezuela, Bolivarian Republic of</option>
    <option value="VNM">Viet Nam</option>
    <option value="VGB">Virgin Islands, British</option>
    <option value="VIR">Virgin Islands, U.S.</option>
    <option value="WLF">Wallis and Futuna</option>
    <option value="ESH">Western Sahara</option>
    <option value="YEM">Yemen</option>
    <option value="ZMB">Zambia</option>
    <option value="ZWE">Zimbabwe</option>
</select>
                                                <div class="icon">
                                                    <!-- <i class="fal fa-envelope"></i> -->
                                                </div>
                                            </div>
                                        </div>

                                       

                                        
                                      
                                        <div class="col-lg-6 wow fadeInUp " data-wow-delay=".8s">
                                            <button type="submit" class="theme-btn">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                            <span class="button-icon "><i class="fal fa-paper-plane"></i></span>
                                            <span class="button-text">Register</span>
                                            </span>
                                            </button>
                                        </div>
                                    </form>
                                    </div>
                                
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
                                        
        </section>

        <!-- Main Cta Banner Section Start -->
        <section class="main-cta-banner-2 section-padding bg-cover" style="background-image: url('assets/img/banner/main-cta-bg-2.jpg');">
            <div class="tomato-shape-left float-bob-y">
                <img src="assets/img/tomato.png" alt="shape-img">
            </div>
            <div class="chili-shape-right float-bob-y">
                <img src="assets/img/chilli.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
                    <div class="section-title mb-0">
                        <!-- <span class="theme-color-3 wow fadeInUp">crispy, every bite taste</span> -->
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            30 minutes fast <br>
                            <span class="theme-color-3">delivery</span> challenge
                        </h2>
                    </div>
                    <a href="https://www.uwagboeskitchen.com/online-ordering" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">order now</span>
                    </span>
                    </a>
                    <div class="delivery-man">
                        <img src="assets/img/delivery-man-2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>

        <?php
      require "footer.php";
    ?>