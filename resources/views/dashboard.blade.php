@extends('app')
@section('title', 'IPPP MMS / Loyalty')
@section('content')
                    <div class="body-nav body-nav-vertical body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="/">
                                        <i class="icon-user icon-large"></i> Loyality
                                    </a>
                                </li>
                                <li>
                                    <a href="wifi">
                                        <i class="icon-signal icon-large"></i> Wifi
                                    </a>
                                </li>
                                <li>
                                    <a href="users/">
                                        <i class="icon-cogs icon-large"></i> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

    <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>Loyality<br/><small>Loyalty Program</small></h3>
                    </header>
                </div>
            </div>
        </div>
    </section>

    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Membership Search</h5>
                    </div>
                    <div class="box-content">
                        <legend class="lead">
                            Member ID : 
                            <form class="form-inline" method="POST" action="/">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-barcode"></i></span>
                                    <input id="mid" class="span4" type="text" placeholder="Member ID">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon-search"></i>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </legend>
                    
                        <div class="box-content">
                            <div class="well well-small well-shadow span3">
                                <img src="../images/pic_01.jpg" />
                            </div>
                            <div class="well well-small well-shadow span4">
                                <legend class="lead">POINTS <a href="javascript:window.open('points.html');" class="btn btn-small pull-right"><i class="btn-icon-only icon-print"></i></a></legend>
                                <div class="box-content">
                                    <h2 style="text-align:center" class="alert-info">80</h2>
                                    <a href="#myModal" role="button" data-toggle="modal" class="btn btn-large btn-info">
                                        <i class="btn-icon-only icon-plus"> ADD</i>
                                    </a>
                                    <a href="#myModal2" role="button" data-toggle="modal" class="btn btn-large btn-danger">
                                        <i class="btn-icon-only icon-minus"> USE</i>
                                    </a>
                                </div>
							</div>
                            <div class="well well-small well-shadow span6">
                                <legend class="lead">Member Info&nbsp;<span class="alert-info">Gold (10%)</span></legend>
                                <div class="box-content">
                                    <span><i class="btn-icon-only icon-barcode"></i> : <span><code>000000000001</code><br />
								    <span><i class="btn-icon-only icon-user"></i> : <span><code>Taro&nbsp;Yamada</code><br />
								    <span><i class="btn-icon-only icon-phone"></i> : <span><code>0999-885-0105</code><br />
								    <span><i class="btn-icon-only icon-envelope"></i> : <span><code>taro.yamada@yahoo.com</code><br />
								    <span><i class="btn-icon-only icon-money"></i> : <span><code>80</code><br />
                                </div>
							</div>
                            <table id="sample-table" class="table table-hover table-bordered tablesorter">
                               <thead>
                                    <tr>
                                        <th style="width:20%">Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2016/11/22 18:00:12</td>
                                        <td>Added 80 points</td>
                                    </tr>
                                    <tr>
                                        <td>2016/11/04 21:52:04</td>
                                        <td>Used 120 points</td>
                                    </tr>
                                    <tr>
                                        <td>2016/10/27 19:32:15</td>
                                        <td>Added 80 points</td>
                                    </tr>
                                    <tr>
                                        <td>2016/10/26 22:23:35</td>
                                        <td>Added 80 points</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="row">
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
                        <h5>Shortcuts</h5>
                    </div>
                    <div class="box-content">
                        <div class="btn-group-box">
                            <button class="btn"><i class="icon-dashboard icon-large"></i><br/>Dashboard</button>
                            <button class="btn"><i class="icon-user icon-large"></i><br/>Account</button>
                            <button class="btn"><i class="icon-search icon-large"></i><br/>Search</button>
                            <button class="btn"><i class="icon-list-alt icon-large"></i><br/>Reports</button>
                            <button class="btn"><i class="icon-bar-chart icon-large"></i><br/>Charts</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span8">
                <div class="blockoff-left">
                    <legend class="lead">
                        Welcome
                    </legend>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <div class="box pattern pattern-sandstone">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Lists</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list collapse in">
                        <ul>
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="box-collapse">
                            <button class="btn btn-box" data-toggle="collapse" data-target=".more-list">
                                Show More
                            </button>
                        </div>
                        <ul class="more-list collapse out">
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                                    <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Forms</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline">
                            <p>Login</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span>
                                <input class="span4" type="text" placeholder="Email address">
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-key"></i></span>
                                <input class="span4" type="password" placeholder="Password">
                            </div>
                        </form>
                        <form class="form-inline">
                            <p>Date Picker & Select Boxes</p>
                            <div id="datepicker" class="input-prepend date">
                                <span class="add-on"><i class="icon-th"></i></span>
                                <input class="span2" type="text" value="02-16-2012">
                            </div>
                            <select class="chosen span4" data-placeholder="Choose a Country...">
                            <option value=""></option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
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
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
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
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
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
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
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
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
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
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </form>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span3">
                <div class="box">
                    <div class="box-content">

                    </div>
                </div>
            </div>
            
            <div class="span16">
                <div class="row">
                    <div class="span8">
                        

<script type="text/javascript">
    google.load('visualization', '1', {'packages': ['corechart']});
    google.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        visualization_data = new google.visualization.DataTable();
        
        visualization_data.addColumn('string', 'Task');
        
        visualization_data.addColumn('number', 'Hours per Day');
        
        
        visualization_data.addRow(['Work', 11]);
        
        visualization_data.addRow(['Eat', 2]);
        
        visualization_data.addRow(['Commute', 2]);
        
        visualization_data.addRow(['Watch TV', 2]);
        
        visualization_data.addRow(['Sleep', 7]);
        
      
        visualization = new google.visualization.PieChart(document.getElementById('piechart'));

        



        
        
        visualization.draw(visualization_data, {title: 'My Daily Activities', height: 260});

        
    }
</script>

                        <div class="box">
                            <div class="box-header">
                                <i class="icon-bar-chart"></i>
                                <h5>Charts</h5>
                            </div>
                            <div class="box-content">
                                <div id="piechart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="box pattern pattern-sandstone">
                            <div class="box-header">
                                <i class="icon-table"></i>
                                <h5>
                                    Table
                                </h5>
                            </div>
                            <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>Version</th>
                                            <th>Browser</th>
                                            <th class="td-actions"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>7.0</td>
                                            <td>Internet
                                            Explorer</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.0</td>
                                            <td>Firefox</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latest</td>
                                            <td>Safari</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latest</td>
                                            <td>Chrome</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>
                                            Opera</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span8">
                        <div class="box">
                            <div class="box-header">
                                <i class="icon-folder-open"></i>
                                <h5>Content</h5>
                            </div>
                            <div class="box-content">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        

<script type="text/javascript">
    google.load('visualization', '1', {'packages': ['corechart']});
    google.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        visualization_data = new google.visualization.DataTable();
        
        visualization_data.addColumn('string', 'Task');
        
        visualization_data.addColumn('number', 'Hours per Day');
        
        
        visualization_data.addRow(['Work', 11]);
        
        visualization_data.addRow(['Eat', 2]);
        
        visualization_data.addRow(['Commute', 2]);
        
        visualization_data.addRow(['Watch TV', 2]);
        
        visualization_data.addRow(['Sleep', 7]);
        
      
        visualization = new google.visualization.ColumnChart(document.getElementById('barchart'));

        



        
        
        visualization.draw(visualization_data, {title: 'My Daily Activities', height: 300});

        
    }
</script>
                        <div class="blockoff-left">
                            <div id="barchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-sign-blank"></i>
                        <h5>Sample Box</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-hide-me box-content collapse out">
                        <legend class="lead">
                            Box Code
                        </legend>
                        <code style="background: none; border: none;"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-header"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-sign-blank"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;h5&gt;</span>Sample Box<span class="nt">&lt;/h5&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-box-right"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">".box-hide-me"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-reorder"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/button&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-hide-me box-content collapse out"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;legend</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Box Code
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/legend&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-footer"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;h5&gt;</span>Sample Footer<span class="nt">&lt;/h5&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/><span class="nt">&lt;/div&gt;</span>
                        </code>
                    </div>
                    <div class="box-footer">
                        <h5>Sample Footer</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16">
                <div class="well well-small well-shadow">
                    <legend class="lead">Shadow Well<code>class="well well-small well-shadow"</code></legend>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-content">
                        <legend class="lead">
                            Box Component
                        </legend>
                        <code style="background: none;border: none;"><span class="nt">&lt;div</span>
                            <span class="na">class=</span><span>"box"</span><span>&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&lt;div</span> <span>class=</span><span>"box-content"</span><span>&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&lt;/div&gt;</span>
                            <br/><span>&lt;/div&gt;</span>
                        </code><br/>
                    </div>
                </div>
            </div>
        </div>
-->
    </section>

    

            </div>
        </div>
		
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">POINT ADDITION</h3>
</div>
<div class="modal-body">
<form method="POST" action="/">
<div class="input-prepend">
    <span class="add-on"><i class="icon-money"></i></span>
    <input id="myPoint" name="myPoint" class="span4" type="text" placeholder="Used Peso Amount">
    <button type="submit" class="btn btn-primary">
        <i class="icon-ok"></i>
        ADD
    </button>
</div>
</form>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
</div>
</div>

<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">POINT USAGE</h3>
</div>
<div class="modal-body">
<form method="POST" action="/">
<div class="input-prepend">
    <span class="add-on"><i class="icon-money"></i></span>
    <input id="myPoint2" name="myPoint" class="span4" type="text" placeholder="Used Point Amount">
    <button type="submit" class="btn btn-primary">
        <i class="icon-ok"></i>
        USE
    </button>
</div>
</form>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
</div>
</div>

		<script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();

            $('#mid').focus();

            $('#myModal').on('shown', function(){
                $('#myPoint').focus();  
            });
            $('#myModal2').on('shown', function(){
                $('#myPoint2').focus();  
            });
        </script>

@endsection
