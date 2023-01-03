<?php 
    include ('includes/header.php');
?>

<div class="container-fluid">

    
<!-- ==========MAIN SECTION============== -->

<main class="mainSectionForum p-3 pt-1">
    <div class="row">
    <div class="col-12 py-2">
            <form action="" method="post" class="row">
               
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <label for="name">Search By Member Name</label>                    
                    <input value="" type="text" name="member_name" id="member_name" class="form-control" autocomplete="off">  
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <label for="role_id">Role</label>
                    <select class="form-control" name="role_id" id="role_id" tabindex="-1" aria-hidden="true">
                        <option value="0">--Select Role--</option>
                        <option value="2">Publisher</option>
                        <option value="3">Printer</option>
                        <option value="4">Author</option>
                        <option value="5">Distributor</option>
                        <option value="6">Bookshop</option>
                        <option value="7">Editor</option>
                        <option value="8">Production Editor</option>
                        <option value="9">Copy Editor</option>
                        <option value="10">Marketing/Sales</option>
                        <option value="11">Production</option>
                        <option value="12">Designer</option>
                        <option value="1">Other Role</option>
                    </select>
                </div>  
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <label for="country_id">Country</label>
                    <select class="form-control select2-hidden-accessible" name="country_id" id="country_id"  tabindex="-1" aria-hidden="true">
                        <option value="0">--Select Country--</option>
                        <option value="1">Afghanistan</option>
                        <option value="2">Aland Islands</option>
                        <option value="3">Albania</option>
                        <option value="4">Algeria</option>
                        <option value="5">American Samoa</option>
                        <option value="6">Andorra</option>
                        <option value="7">Angola</option>
                        <option value="8">Anguilla</option>
                        <option value="9">Antarctica</option>
                        <option value="10">Antigua And Barbuda</option>
                        <option value="11">Argentina</option>
                        <option value="12">Armenia</option>
                        <option value="13">Aruba</option>
                        <option value="14">Australia</option>
                        <option value="15">Austria</option>
                        <option value="16">Azerbaijan</option>
                        <option value="18">Bahrain</option>
                        <option value="19">Bangladesh</option>
                        <option value="20">Barbados</option>
                        <option value="21">Belarus</option>
                        <option value="22">Belgium</option>
                        <option value="23">Belize</option>
                        <option value="24">Benin</option>
                        <option value="25">Bermuda</option>
                        <option value="26">Bhutan</option>
                        <option value="27">Bolivia</option>
                        <option value="155">Bonaire, Sint Eustatius and Saba</option>
                        <option value="28">Bosnia and Herzegovina</option>
                        <option value="29">Botswana</option>
                        <option value="30">Bouvet Island</option>
                        <option value="31">Brazil</option>
                        <option value="32">British Indian Ocean Territory</option>
                        <option value="33">Brunei</option>
                        <option value="34">Bulgaria</option>
                        <option value="35">Burkina Faso</option>
                        <option value="36">Burundi</option>
                        <option value="37">Cambodia</option>
                        <option value="38">Cameroon</option>
                        <option value="39">Canada</option>
                        <option value="40">Cape Verde</option>
                        <option value="41">Cayman Islands</option>
                        <option value="42">Central African Republic</option>
                        <option value="43">Chad</option>
                        <option value="44">Chile</option>
                        <option value="45">China</option>
                        <option value="46">Christmas Island</option>
                        <option value="47">Cocos (Keeling) Islands</option>
                        <option value="48">Colombia</option>
                        <option value="49">Comoros</option>
                        <option value="50">Congo</option>
                        <option value="52">Cook Islands</option>
                        <option value="53">Costa Rica</option>
                        <option value="54">Cote D'Ivoire (Ivory Coast)</option>
                        <option value="55">Croatia</option>
                        <option value="56">Cuba</option>
                        <option value="249">Curaçao</option>
                        <option value="57">Cyprus</option>
                        <option value="58">Czech Republic</option>
                        <option value="51">Democratic Republic of the Congo</option>
                        <option value="59">Denmark</option>
                        <option value="60">Djibouti</option>
                        <option value="61">Dominica</option>
                        <option value="62">Dominican Republic</option>
                        <option value="63">East Timor</option>
                        <option value="64">Ecuador</option>
                        <option value="65">Egypt</option>
                        <option value="66">El Salvador</option>
                        <option value="67">Equatorial Guinea</option>
                        <option value="68">Eritrea</option>
                        <option value="69">Estonia</option>
                        <option value="70">Ethiopia</option>
                        <option value="71">Falkland Islands</option>
                        <option value="72">Faroe Islands</option>
                        <option value="73">Fiji Islands</option>
                        <option value="74">Finland</option>
                        <option value="75">France</option>
                        <option value="76">French Guiana</option>
                        <option value="77">French Polynesia</option>
                        <option value="78">French Southern Territories</option>
                        <option value="79">Gabon</option>
                        <option value="80">Gambia The</option>
                        <option value="81">Georgia</option>
                        <option value="82">Germany</option>
                        <option value="83">Ghana</option>
                        <option value="84">Gibraltar</option>
                        <option value="85">Greece</option>
                        <option value="86">Greenland</option>
                        <option value="87">Grenada</option>
                        <option value="88">Guadeloupe</option>
                        <option value="89">Guam</option>
                        <option value="90">Guatemala</option>
                        <option value="91">Guernsey and Alderney</option>
                        <option value="92">Guinea</option>
                        <option value="93">Guinea-Bissau</option>
                        <option value="94">Guyana</option>
                        <option value="95">Haiti</option>
                        <option value="96">Heard Island and McDonald Islands</option>
                        <option value="97">Honduras</option>
                        <option value="98">Hong Kong S.A.R.</option>
                        <option value="99">Hungary</option>
                        <option value="100">Iceland</option>
                        <option value="101">India</option>
                        <option value="102">Indonesia</option>
                        <option value="103">Iran</option>
                        <option value="104">Iraq</option>
                        <option value="105">Ireland</option>
                        <option value="106">Israel</option>
                        <option value="107">Italy</option>
                        <option value="108">Jamaica</option>
                        <option value="109">Japan</option>
                        <option value="110">Jersey</option>
                        <option value="111">Jordan</option>
                        <option value="112">Kazakhstan</option>
                        <option value="113">Kenya</option>
                        <option value="114">Kiribati</option>
                        <option value="248">Kosovo</option>
                        <option value="117">Kuwait</option>
                        <option value="118">Kyrgyzstan</option>
                        <option value="119">Laos</option>
                        <option value="120">Latvia</option>
                        <option value="121">Lebanon</option>
                        <option value="122">Lesotho</option>
                        <option value="123">Liberia</option>
                        <option value="124">Libya</option>
                        <option value="125">Liechtenstein</option>
                        <option value="126">Lithuania</option>
                        <option value="127">Luxembourg</option>
                        <option value="128">Macau S.A.R.</option>
                        <option value="129">Macedonia</option>
                        <option value="130">Madagascar</option>
                        <option value="131">Malawi</option>
                        <option value="132">Malaysia</option>
                        <option value="133">Maldives</option>
                        <option value="134">Mali</option>
                        <option value="135">Malta</option>
                        <option value="136">Man (Isle of)</option>
                        <option value="137">Marshall Islands</option>
                        <option value="138">Martinique</option>
                        <option value="139">Mauritania</option>
                        <option value="140">Mauritius</option>
                        <option value="141">Mayotte</option>
                        <option value="142">Mexico</option>
                        <option value="143">Micronesia</option>
                        <option value="144">Moldova</option>
                        <option value="145">Monaco</option>
                        <option value="146">Mongolia</option>
                        <option value="147">Montenegro</option>
                        <option value="148">Montserrat</option>
                        <option value="149">Morocco</option>
                        <option value="150">Mozambique</option>
                        <option value="151">Myanmar</option>
                        <option value="152">Namibia</option>
                        <option value="153">Nauru</option>
                        <option value="154">Nepal</option>
                        <option value="156">Netherlands</option>
                        <option value="157">New Caledonia</option>
                        <option value="158">New Zealand</option>
                        <option value="159">Nicaragua</option>
                        <option value="160">Niger</option>
                        <option value="161">Nigeria</option>
                        <option value="162">Niue</option>
                        <option value="163">Norfolk Island</option>
                        <option value="115">North Korea</option>
                        <option value="164">Northern Mariana Islands</option>
                        <option value="165">Norway</option>
                        <option value="166">Oman</option>
                        <option value="167">Pakistan</option>
                        <option value="168">Palau</option>
                        <option value="169">Palestinian Territory Occupied</option>
                        <option value="170">Panama</option>
                        <option value="171">Papua new Guinea</option>
                        <option value="172">Paraguay</option>
                        <option value="173">Peru</option>
                        <option value="174">Philippines</option>
                        <option value="175">Pitcairn Island</option>
                        <option value="176">Poland</option>
                        <option value="177">Portugal</option>
                        <option value="178">Puerto Rico</option>
                        <option value="179">Qatar</option>
                        <option value="180">Reunion</option>
                        <option value="181">Romania</option>
                        <option value="182">Russia</option>
                        <option value="183">Rwanda</option>
                        <option value="184">Saint Helena</option>
                        <option value="185">Saint Kitts And Nevis</option>
                        <option value="186">Saint Lucia</option>
                        <option value="187">Saint Pierre and Miquelon</option>
                        <option value="188">Saint Vincent And The Grenadines</option>
                        <option value="189">Saint-Barthelemy</option>
                        <option value="190">Saint-Martin (French part)</option>
                        <option value="191">Samoa</option>
                        <option value="192">San Marino</option>
                        <option value="193">Sao Tome and Principe</option>
                        <option value="194">Saudi Arabia</option>
                        <option value="195">Senegal</option>
                        <option value="196">Serbia</option>
                        <option value="197">Seychelles</option>
                        <option value="198">Sierra Leone</option>
                        <option value="199">Singapore</option>
                        <option value="250">Sint Maarten (Dutch part)</option>
                        <option value="200">Slovakia</option>
                        <option value="201">Slovenia</option>
                        <option value="202">Solomon Islands</option>
                        <option value="203">Somalia</option>
                        <option value="204">South Africa</option>
                        <option value="205">South Georgia</option>
                        <option value="116">South Korea</option>
                        <option value="206">South Sudan</option>
                        <option value="207">Spain</option>
                        <option value="208">Sri Lanka</option>
                        <option value="209">Sudan</option>
                        <option value="210">Suriname</option>
                        <option value="211">Svalbard And Jan Mayen Islands</option>
                        <option value="212">Swaziland</option>
                        <option value="213">Sweden</option>
                        <option value="214">Switzerland</option>
                        <option value="215">Syria</option>
                        <option value="216">Taiwan</option>
                        <option value="217">Tajikistan</option>
                        <option value="218">Tanzania</option>
                        <option value="219">Thailand</option>
                        <option value="17">The Bahamas</option>
                        <option value="220">Togo</option>
                        <option value="221">Tokelau</option>
                        <option value="222">Tonga</option>
                        <option value="223">Trinidad And Tobago</option>
                        <option value="224">Tunisia</option>
                        <option value="225">Turkey</option>
                        <option value="226">Turkmenistan</option>
                        <option value="227">Turks And Caicos Islands</option>
                        <option value="228">Tuvalu</option>
                        <option value="229">Uganda</option>
                        <option value="230">Ukraine</option>
                        <option value="231">United Arab Emirates</option>
                        <option value="232">United Kingdom</option>
                        <option value="233">United States</option>
                        <option value="234">United States Minor Outlying Islands</option>
                        <option value="235">Uruguay</option>
                        <option value="236">Uzbekistan</option>
                        <option value="237">Vanuatu</option>
                        <option value="238">Vatican City State (Holy See)</option>
                        <option value="239">Venezuela</option>
                        <option value="240">Vietnam</option>
                        <option value="241">Virgin Islands (British)</option>
                        <option value="242">Virgin Islands (US)</option>
                        <option value="243">Wallis And Futuna Islands</option>
                        <option value="244">Western Sahara</option>
                        <option value="245">Yemen</option>
                        <option value="246">Zambia</option>
                        <option value="247">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-12 col-md-3">
                   
                    <div class="row g-0 mt-md-4">
                        <div class="col-6 px-1"><button class="btn btn-warning w-100 "><span class="commentBtnText">SEARCH</span></button></div>
                        <div class="col-6 px-1"><a href="/members" class="btn btn-danger w-100"><span class="commentBtnText">CLEAR</span></a></div>
                    </div>


                </div>

                                <!-- alphabetical navigation -->
                <div class="col-12 pt-5 d-none d-md-block">
                    <div class="btn-toolbar">
                        <div role="group" class="btn-group w-100 btn-group-sm">
                            <a href="memberList.php" type="button" class="btn  btn-outline-danger">A</a>
                            <a href="/members?list=B" type="button" class="btn  btn-outline-danger">B</a>
                            <a href="/members?list=C" type="button" class="btn  btn-outline-danger">C</a>
                            <a href="/members?list=D" type="button" class="btn  btn-outline-danger">D</a>
                            <a href="/members?list=E" type="button" class="btn  btn-outline-danger">E</a>
                            <a href="/members?list=F" type="button" class="btn  btn-outline-danger">F</a>
                            <a href="/members?list=G" type="button" class="btn  btn-outline-danger">G</a>
                            <a href="/members?list=H" type="button" class="btn  btn-outline-danger">H</a>
                            <a href="/members?list=I" type="button" class="btn  btn-outline-danger">I</a>
                            <a href="/members?list=J" type="button" class="btn  btn-outline-danger">J</a>
                            <a href="/members?list=K" type="button" class="btn  btn-outline-danger">K</a>
                            <a href="/members?list=L" type="button" class="btn  btn-outline-danger">L</a>
                            <a href="/members?list=M" type="button" class="btn  btn-outline-danger">M</a>
                            <a href="/members?list=N" type="button" class="btn  btn-outline-danger">N</a>
                            <a href="/members?list=O" type="button" class="btn  btn-outline-danger">O</a>
                            <a href="/members?list=P" type="button" class="btn  btn-outline-danger">P</a>
                            <a href="/members?list=Q" type="button" class="btn  btn-outline-danger">Q</a>
                            <a href="/members?list=R" type="button" class="btn  btn-outline-danger">R</a>
                            <a href="/members?list=S" type="button" class="btn  btn-outline-danger">S</a>
                            <a href="/members?list=T" type="button" class="btn  btn-outline-danger">T</a>
                            <a href="/members?list=U" type="button" class="btn  btn-outline-danger">U</a>
                            <a href="/members?list=V" type="button" class="btn  btn-outline-danger">V</a>
                            <a href="/members?list=W" type="button" class="btn  btn-outline-danger">W</a>
                            <a href="/members?list=X" type="button" class="btn  btn-outline-danger">X</a>
                            <a href="/members?list=Y" type="button" class="btn  btn-outline-danger">Y</a>
                            <a href="/members?list=Z" type="button" class="btn  btn-outline-danger">Z</a>
                        </div>
                    </div>

                </div>
                <!-- end alphabetical navigation -->
            </form>
        </div>
    </div>

    <!-- start directory -->

    <div class="col-12">
            <div class="row">

            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div  class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials"> AA </span>

                        <span class="membershipBadge">
                            <img title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg">
                        </span>
                    </div>
                    <p><strong>ADENIKE ADEWAKUN</strong> <br> <span class="redColor">Editor</span></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Lagos, Lagos, Nigeria</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->
                                    
            
            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div data-id="285" class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials">                                    
                            <img class="img-fluid avatarImage" src="assets/images/render_image.jpg">
                        </span>

                        <span class="membershipBadge">
                            <img data-toggle="tooltip" title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg" data-original-title="Full Member"></span>
                    </div>
                    <p><strong>Afolabi Ghislain  Agbede</strong> <br> <span class="redColor">Publisher</span></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Porto Novo, Porto Novo, Cape Verde</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->

            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div  class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials"> AA </span>

                        <span class="membershipBadge">
                            <img title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg">
                        </span>
                    </div>
                    <p><strong>ADENIKE ADEWAKUN</strong> <br> <span class="redColor">Editor</span></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Lagos, Lagos, Nigeria</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->
                                    
            
            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div data-id="285" class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials">                                    
                            <img class="img-fluid avatarImage" src="assets/images/render_image.jpg">
                        </span>

                        <span class="membershipBadge">
                            <img data-toggle="tooltip" title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg" data-original-title="Full Member"></span>
                    </div>
                    <p><strong>Afolabi Ghislain  Agbede</strong> <br> <span class="redColor">Publisher</span></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Porto Novo, Porto Novo, Cape Verde</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->

            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div  class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials"> AA </span>

                        <span class="membershipBadge">
                            <img title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg">
                        </span>
                    </div>
                    <p><strong>ADENIKE ADEWAKUN</strong> <br> <a href="memberSummary.php"><span class="redColor">Editor</span></a></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Lagos, Lagos, Nigeria</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->
                                    
            
            <!-- start directory listing -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div data-id="285" class="p-2  directoryListing m-2">
                    <div class="myavatar mx-auto my-2">

                        <span class="avatarInitials">                                    
                            <img class="img-fluid avatarImage" src="assets/images/render_image.jpg">
                        </span>

                        <span class="membershipBadge">
                            <img data-toggle="tooltip" title="" alt="Member Type" src="https://community.africaspeaks.global/assets/images/member_full.svg" data-original-title="Full Member"></span>
                    </div>
                    <p><strong>Afolabi Ghislain  Agbede</strong> <br> <span class="redColor">Publisher</span></p>
                    <div class="row directoryRole">
                        <div class="col text-center"><span class="directoryLightGrey">Location</span> <br> Porto Novo, Porto Novo, Cape Verde</div>
                    </div>
                </div>
            </div>
            <!-- end directory listing -->
                                            
                                     
                




            </div>
        </div>
    
   
</main>
    

   
</div>





<?php 
    include ('includes/footer.php');
?>
