<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/design.css">
    <title>CRYPTO SWAP - KYC</title>
</head>

<body>

<div class="container-fluid my-4">
    <?php
        if(isset($_SESSION['sent'])){
            ?>
        <div class="d-flex justify-content-center">
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Thank you</strong> We have received your submission, we will update you Soon!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php
            unset($_SESSION['sent']);
        }
        ;
    ?>
    <?php
    if(isset($_SESSION['error'])){
        ?>
        <div class="d-flex justify-content-center">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>oops!</strong> There was an error!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="card shadow">
                    <h6 class="p-2 px-3 text-uppercase heading shadow">The Basics</h6>
                    <div class="card-body form-body">
                        <div class="form-line">
                            <h6 class="text-uppercase">Legal name</h6>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" id="first" name="first">
                                    <label for="first" class="m-0">First</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control" id="middle" name="middle">
                                    <label for="middle" class="m-0">Middle</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" id="last" name="last">
                                    <label for="last" class="m-0">Last</label>
                                </div>
                            </div>
                            <small>Please enter your name as it appears on your identification.</small>
                        </div>
                        <div class="form-group">
                            <label for="address1" class="text-uppercase">Address Line 1</label>
                            <input type="text" class="form-control" id="address1" name="address1"
                                   placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="address2" class="text-uppercase">Address Line 2</label>
                            <input type="text" class="form-control" id="address2" name="address2"
                                   placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="city" class="text-uppercase">city</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="state" class="text-uppercase">state / province / region</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="postal" class="text-uppercase">Postal code</label>
                                <input type="text" class="form-control" id="postal" name="postal">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country" class="text-uppercase">Country</label>
                                <select id="country" name="country" class="form-control">
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
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
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
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
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <small>Please enter your address exactly as it appears on your identification.</small>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-uppercase">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-uppercase">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-uppercase">Preferred username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password" class="text-uppercase">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm-password" class="text-uppercase">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password"
                                       name="confirm-password">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card shadow">
                    <h6 class="p-2 px-3 text-uppercase heading shadow">Account requirements</h6>
                    <div class="card-body form-body">

                        <div class="form-line">
                            <h6 class="text-uppercase">Type of account required ? </h6>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                               name="account-type[]" value="Demo account Access" required>
                                        <label class="custom-control-label text-capitalize" for="customCheck1">Demo
                                            account Access</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                               name="account-type[]" value="individual crypto/fiat trader" required>
                                        <label class="custom-control-label" for="customCheck2">individual crypto/fiat
                                            trader</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3"
                                               name="account-type[]" value="High volume crypto/fiat trader" required>
                                        <label class="custom-control-label" for="customCheck3">High volume crypto/fiat
                                            trader</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4"
                                               name="account-type[]" value="corporate crypto/fiat trader" required>
                                        <label class="custom-control-label" for="customCheck4">corporate crypto/fiat
                                            trader</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5"
                                               name="account-type[]" value="institutional crypto/fiat trader" required>
                                        <label class="custom-control-label" for="customCheck5">institutional crypto/fiat
                                            trader</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6"
                                               name="account-type[]" value="Custodial account" required>
                                        <label class="custom-control-label" for="customCheck6">Custodial account</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-line">
                            <h6 class="text-uppercase">Crypto swap account TIER selection
                                <span data-toggle="tooltip" data-placement="top"
                                      title="Crypto Swap offers 5 different user Tiers. Each has its own privileges, benefits, and limits,
                                 as well as each comes with it's own compliance requirements needed in order for Crypto-Swap
                                 to comply with its commitment with the Canadian Financial Authority. In order better serve you
                                  and to construct a proper Compliance Portfolio, select the level above that most accurately
                                  represents your accounts estimated monthly turnover. Amounts are USD equivalents. "
                                      class="tooltip-pointer"><b>*</b>
                                </span>
                            </h6>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="account-swap"
                                               class="custom-control-input" value="Less than $1,000" required>
                                        <label class="custom-control-label" for="customRadio1">Less than $1,000</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="account-swap"
                                               class="custom-control-input" value="$1,000 - $10,000">
                                        <label class="custom-control-label" for="customRadio2">$1,000 - $10,000</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="account-swap"
                                               class="custom-control-input" value="$10,000 - $100,000">
                                        <label class="custom-control-label" for="customRadio3">$10,000 -
                                            $100,000</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="account-swap"
                                               class="custom-control-input" value="$100,000 - $1,000,000">
                                        <label class="custom-control-label" for="customRadio4">$100,000 -
                                            $1,000,000</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="account-swap"
                                               class="custom-control-input" value="$1,000,000 - $10,000,000">
                                        <label class="custom-control-label" for="customRadio5">$1,000,000 -
                                            $10,000,000</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio6" name="account-swap"
                                               class="custom-control-input" value="in excess $10,000,000">
                                        <label class="custom-control-label" for="customRadio6">in excess
                                            $10,000,000</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-line">
                            <h6 class="text-uppercase">You are...
                                <span data-toggle="tooltip" data-placement="top"
                                      title="Compliance requirements dictate that we determine and that you
                                       make us aware of any familial relationships your have, or any dose associations,
                                       professionally or politically with any of the following persons: a) a Senior
                                       Foreign Political Figure, b an Agent or for a Third Party, or c)the Head of an
                                       International Organization. Note that this representation does not, and will not,
                                       effect your ability to preregister for a Crypto Swap account."
                                      class="tooltip-pointer"><b>*</b>
                                </span>
                            </h6>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio13" name="your-position"
                                               class="custom-control-input" value="a Senior Foreign Political Figure"  required>
                                        <label class="custom-control-label" for="customRadio13">a Senior Foreign
                                            Political Figure</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio14" name="your-position"
                                               class="custom-control-input" value="an Agent of Third Party">
                                        <label class="custom-control-label" for="customRadio14">an Agent of Third
                                            Party</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio15" name="your-position"
                                               class="custom-control-input"
                                               value="the Head of an international organization">
                                        <label class="custom-control-label" for="customRadio15">the Head of an
                                            international organization</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio16" name="your-position"
                                               class="custom-control-input" value="an Immediate relative of above">
                                        <label class="custom-control-label" for="customRadio16">an Immediate relative of
                                            above</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio17" name="your-position"
                                               class="custom-control-input" value="a Sovereign">
                                        <label class="custom-control-label" for="customRadio17">a Sovereign</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio18" name="your-position"
                                               class="custom-control-input" value="None Of the above">
                                        <label class="custom-control-label" for="customRadio18">None Of the
                                            above</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-line">
                            <h6 class="text-uppercase">You are...
                                <span data-toggle="tooltip" data-placement="top"
                                      title="Compliance requirements dictate that we determine and that you make us aware
                                       of any entities that you may represent while conducting your activities on Crypto
                                        Swap. Note that this representation does not, and will not, effect your ability to
                                        preregister for a Crypto Swap account.
"
                                      class="tooltip-pointer"><b>*</b>
                                </span>
                            </h6>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio7" name="about-company"
                                               class="custom-control-input" value="A corporation"  required>
                                        <label class="custom-control-label" for="customRadio7" >A corporation</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio8" name="about-company"
                                               class="custom-control-input" value="A Trust">
                                        <label class="custom-control-label" for="customRadio8">A Trust</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio9" name="about-company"
                                               class="custom-control-input" value="a Financial Institution">
                                        <label class="custom-control-label" for="customRadio9">a Financial
                                            Institution</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio10" name="about-company"
                                               class="custom-control-input" value="a Partnership">
                                        <label class="custom-control-label" for="customRadio10">a Partnership</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio11" name="about-company"
                                               class="custom-control-input" value="a Money Services Business">
                                        <label class="custom-control-label" for="customRadio11">a Money Services
                                            Business</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio12" name="about-company"
                                               class="custom-control-input" value="an Investment Fund">
                                        <label class="custom-control-label" for="customRadio12">an Investment
                                            Fund</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio20" name="about-company"
                                               class="custom-control-input" value="An unincorporated">
                                        <label class="custom-control-label" for="customRadio20">An
                                            unincorporated</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio21" name="about-company"
                                               class="custom-control-input" value="An organization or Association">
                                        <label class="custom-control-label" for="customRadio21">An organization or
                                            Association</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio22" name="about-company"
                                           class="custom-control-input" value="None of the above">
                                    <label class="custom-control-label" for="customRadio22">None of the above</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="text-uppercase">Enter relevant information
                                according to your account requirements requirements(if any)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="relevant-info"
                                      rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card shadow">
                    <h6 class="p-2 px-3 text-uppercase heading shadow">Verification Documents</h6>
                    <div class="card-body form-body">
                        <div class="media mb-3">
                            <img src="images/baseline-account_box-24px.png" class="mr-3 document-icon img-fluid"
                                 alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-uppercase">PHOTO ID Front Side

                                    <span data-toggle="tooltip" data-placement="top"
                                          title="You are required, at a minimum to verify your IDENTITY by uploading one
                                           piece of identification issued by a verifiable government body that is not
                                           expired. e.g. passport, drivers licence. etc. Please do not edit the document
                                            in anyway. Documents that show signs of editing in any way will be rejected.
                                            (No Photoshop) More information may be required."
                                          class="tooltip-pointer"><b>*</b>
                                </span>

                                </h6>
                                <small>Max File Size is 10 mb</small>
                                <div class="upload">
                                    <a href="javascript:" class="text-dark text-decoration-none">
                                        <h6 class="font-weight-bold text-uppercase my-2">Upload</h6>
                                    </a>
                                    <input type="file" class="upload-input" name="identification-document-front"  required>
                                </div>
                            </div>
                        </div>

                        <div class="media mb-3">
                            <img src="images/baseline-account_box-24px.png" class="mr-3 document-icon img-fluid"
                                 alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-uppercase">PHOTO ID back side

                                    <span data-toggle="tooltip" data-placement="top"
                                          title="You are required, at a minimum to verify your IDENTITY by uploading one
                                           piece of identification issued by a verifiable government body that is not
                                           expired. e.g. passport, drivers licence. etc. Please do not edit the document
                                            in anyway. Documents that show signs of editing in any way will be rejected.
                                            (No Photoshop) More information may be required."
                                          class="tooltip-pointer"><b>*</b>
                                </span>

                                </h6>
                                <small>Max File Size is 10 mb</small>
                                <div class="upload">
                                    <a href="javascript:" class="text-dark text-decoration-none">
                                        <h6 class="font-weight-bold text-uppercase my-2">Upload</h6>
                                    </a>
                                    <input type="file" class="upload-input" name="identification-document-back"  required>
                                </div>
                            </div>
                        </div>

                        <div class="media mb-3">
                            <img src="images/baseline-home-24px.png" class="mr-3 document-icon img-fluid" alt="...">
                            <div class="media-body my-3">
                                <h6 class="m-0 text-uppercase">Address verification

                                    <span data-toggle="tooltip" data-placement="top"
                                          title="You are required, at a minimum, to verify your ADDRESS by uploading one
                                           piece of identification issued by a verifiable government body that has not
                                           already been used here for another purpose, issued in the last 3 months.
                                           e.g. bank statement, utility bill, etc. Please do not edit the document in
                                           anyway. Documents that show signs of editing will be rejected. (No Photoshop)
                                           More information may be required."
                                          class="tooltip-pointer"><b>*</b>
                                </span>
                                </h6>
                                <small>Max File Size is 10 mb</small>
                                <div class="upload">
                                    <a href="javascript:" class="text-dark text-decoration-none">
                                        <h6 class="font-weight-bold text-uppercase my-2">Upload</h6>
                                    </a>
                                    <input type="file" class="upload-input" name="address-document"  required>
                                </div>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <img src="images/baseline-account_box-24px_2.png" class="mr-3 document-icon" alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-uppercase">corporate documentation(if relevant)
                                    <span data-toggle="tooltip" data-placement="top"
                                          title="Please upload your current government registration document
                                                   depicting the structure or the business entity you are representing
                                                    on this account. Please do not edit the document in anyway. Documents
                                                     that show signs of editing in any way will be rejected. (No Photoshop)
                                                      More information may be required.
"
                                          class="tooltip-pointer"><b>*</b>
                                </span>
                                </h6>
                                <small>Max File Size is 10 mb</small>
                                <div class="upload">
                                    <a href="javascript:" class="text-dark text-decoration-none">
                                        <h6 class="font-weight-bold text-uppercase my-2">Upload</h6>
                                    </a>
                                    <input type="file" class="upload-input" name="corporate-document"  required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full-name" class="text-uppercase">Type your Full name</label>
                            <input type="text" class="form-control" id="full-name" name="full-name">
                        </div>
                        <div class="form-group my-4">
                            <input type="submit" class="btn btn-dark px-4" name="submit">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $(function(){

        var requiredCheckboxes = $(':checkbox[required]');

        requiredCheckboxes.change(function(){

            if(requiredCheckboxes.is(':checked')) {
                requiredCheckboxes.removeAttr('required');
            }

            else {
                requiredCheckboxes.attr('required', 'required');
            }
        });

    });
</script>
</body>

</html>