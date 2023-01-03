<!-- ===================MODALS========================== -->

<!-- =============DELETE MODAL======================== -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">DELETE COMMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" role="alert">
            Are you sure you want to delete the comment?
         </div>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal"><span class="commentBtnText">CANCEL</span> </button>
        <button type="button" class="btn btn-primary "><span class="commentBtnText">OK</span></button>
      </div>
    </div>
  </div>
</div>


<!-- ===========REPORT MODAL============== -->
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Report Issue</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        You are about to flag this content as being inappropriate.  Please select a reason or provide an explanation why you are flagging this comment and submit your report.  The administrator will be notified.
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="type_1" value="SPAM">
            <label class="form-check-label" for="type_1">
                <strong>SPAM</strong>
            </label>
            <p>Exits only to promote an answer, product or service, does not disclose the author's affiliation</p>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="type_2" value="ABUSE">
            <label class="form-check-label" for="type_2">
                <strong>Rude or Abusive</strong>
            </label>
            <p>A reasonable person would find this content inappropriate for respectful discourse</p>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="type_3" value="OTHER REASON">
            <label class="form-check-label" for="type_3">
                <strong>Other Reason</strong>
            </label>

        </div>

        <div class="form-check">
            <p>Please explain why you are reporting this content</p>            
            <div id="modaleditor"></div>      
        </div>

            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-warning"><span class="commentBtnText">REPORT</span></button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span class="commentBtnText">CLOSE</span> </button>
            
        </div>
        </div>
    </form>
   
  </div>
</div>



<!-- ====================CREATE NEW PROJECT MODAL====================== -->
<div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Project
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                
                <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Project Title</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                </div>

                <label for="exampleFormControlInput1" class="form-label">PROJECT DESCRIPTION</label>
                <div id="newProjectEditor"></div>  
                </div>
            </div>

        
                     
                
      

            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-warning"><span class="commentBtnText">SAVE</span></button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span class="commentBtnText">CANCEL</span> </button>
            
        </div>
        </div>
    </form>
   
  </div>
</div>

<!-- ======================TERMS AND CONDITIONS MODAL====================== -->
<div class="modal fade" id="TermsAndConditionsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title my_modal_titles" id="exampleModalLabel" style="font-size: 1.2rem;">Africa Speaks Website Terms and Conditions</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="my_modal_titles" style="text-align: center;"><b>PRIVACY POLICY</b></h2>
                    <p>Effective date: 2021-04-01</p>
                    <p>1. <b>Introduction</b></p>
                    <p>Welcome to <b> Africa Speaks Trust</b>.</p>
                    <p><b>Africa Speaks Trust</b> (“us”, “we”, or “our”) operates <b>africaspeaks.global</b> (hereinafter referred to as <b>“Service”</b>).</p>
                    <p>Our Privacy Policy governs your visit to <b>africaspeaks.global</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>
                    <p>We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>
                    <p>Our Terms and Conditions (<b>“Terms”</b>) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (<b>“agreement”</b>).</p>
                    <p>2. <b>Definitions</b></p>
                    <p><b>SERVICE</b> means the africaspeaks.global website operated by Africa Speaks Trust.</p>
                    <p><b>PERSONAL DATA</b> means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>
                    <p><b>USAGE DATA</b> is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</p>
                    <p><b>COOKIES</b> are small files stored on your device (computer or mobile device).</p>
                    <p><b>DATA CONTROLLER</b> means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</p>
                    <p><b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</p> <p><b>DATA SUBJECT</b> is any living individual who is the subject of Personal Data.</p>
                    <p><b>THE USER</b> is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</p>
                    <p>3. <b>Information Collection and Use</b></p>
                    <p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>
                    <p>4. <b>Types of Data Collected</b></p>
                    <p><b>Personal Data</b></p>
                    <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (<b>“Personal Data”</b>). Personally identifiable information may include, but is not limited to:</p>
                    <p>0.1. Email address</p>
                    <p>0.2. First name and last name</p>
                    <p>0.3. Phone number</p>
                    <p>0.4. Address, Country, State, Province, ZIP/Postal code, City</p>
                    <p>0.5. Cookies and Usage Data</p>
                    <p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.</p>
                    <p><b>Usage Data</b></p>
                    <p>We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (<b>“Usage Data”</b>).</p>
                    <p>This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                    <p>When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.</p>
                    <p><b>Location Data</b></p><p>We may use and store information about your location if you give us permission to do so (<b>“Location Data”</b>). We use this data to provide features of our Service, to improve and customize our Service.</p><p>You can enable or disable location services when you use our Service at any time by way of your device settings.</p>
                    <p><b>Tracking Cookies Data</b></p>
                    <p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>
                    <p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.</p>
                    <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
                    <p>Examples of Cookies we use:</p>
                    <p>0.1. <b>Session Cookies:</b> We use Session Cookies to operate our Service.</p>
                    <p>0.2. <b>Preference Cookies:</b> We use Preference Cookies to remember your preferences and various settings.</p>
                    <p>0.3. <b>Security Cookies:</b> We use Security Cookies for security purposes.</p>
                    <p>0.4. <b>Advertising Cookies:</b> Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.</p>
                    <p><b>Other Data</b></p>
                    <p>While using our Service, we may also collect the following information: sex, age, date of birth, place of birth, passport details, citizenship, registration at place of residence and actual address, telephone number (work, mobile), details of documents on education, qualification, professional training, employment agreements, <a href="https://policymaker.io/non-disclosure-agreement/">NDA agreements</a>, information on bonuses and compensation, information on marital status, family members, social security (or other taxpayer identification) number, office location and other data.</p>
                    <p>5. <b>Use of Data</b></p>
                    <p>Africa Speaks Trust uses the collected data for various purposes:</p>
                    <p>0.1. to provide and maintain our Service;</p>
                    <p>0.2. to notify you about changes to our Service;</p>
                    <p>0.3. to allow you to participate in interactive features of our Service when you choose to do so;</p>
                    <p>0.4. to provide customer support;</p>
                    <p>0.5. to gather analysis or valuable information so that we can improve our Service;</p>
                    <p>0.6. to monitor the usage of our Service;</p>
                    <p>0.7. to detect, prevent and address technical issues;</p>
                    <p>0.8. to fulfil any other purpose for which you provide it;</p>
                    <p>0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</p>
                    <p>0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;</p>
                    <p>0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;</p>
                    <p>0.12. in any other way we may describe when you provide the information;</p>
                    <p>0.13. for any other purpose with your consent.</p>
                    <p>6. <b>Retention of Data</b></p>
                    <p>We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
                    <p>We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>
                    <p>7. <b>Transfer of Data</b></p>
                    <p>Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
                    <p>If you are located outside United States of America and choose to provide information to us, please note that we transfer the data, including Personal Data, to United States of America and process it there.</p>
                    <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
                    <p>Africa Speaks Trust will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</p>
                    <p>8. <b>Disclosure of Data</b></p>
                    <p>We may disclose personal information that we collect, or you provide:</p>
                    <p>0.1. <b>Disclosure for Law Enforcement.</b></p><p>Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.</p><p>0.2. <b>Business Transaction.</b></p><p>If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</p><p>0.3. <b>Other cases. We may disclose your information also:</b></p><p>0.3.1. to our subsidiaries and affiliates;</p><p>0.3.2. to contractors, service providers, and other third parties we use to support our business;</p><p>0.3.3. to fulfill the purpose for which you provide it;</p><p>0.3.4. for the purpose of including your company’s logo on our website;</p><p>0.3.5. for any other purpose disclosed by us when you provide the information;</p><p>0.3.6. with your consent in any other cases;</p><p>0.3.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.</p>
                    <p>9. <b>Security of Data</b></p>
                    <p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
                    <p>10. <b>Your Data Protection Rights Under General Data Protection Regulation (GDPR)
                        </b></p>
                    <p>If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.</p>
                    <p>We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</p>
                    <p> If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at <b>info@africaspeaks.global</b>.</p>
                    <p>In certain circumstances, you have the following data protection rights:</p>
                    <p>0.1. the right to access, update or to delete the information we have on you;</p>
                    <p>0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;</p>
                    <p>0.3. the right to object. You have the right to object to our processing of your Personal Data;</p>
                    <p>0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;</p>
                    <p>0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;</p>
                    <p>0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;</p>
                    <p>Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</p>
                    <p>You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).</p>
                    <p>11. <b>Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)</b></p>
                    <p>CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy.</p>
                    <p>According to CalOPPA we agree to the following:</p>
                    <p>0.1. users can visit our site anonymously;</p>
                    <p>0.2. our Privacy Policy link includes the word “Privacy”, and can easily be found on the home page of our website;</p>
                    <p>0.3. users will be notified of any privacy policy changes on our Privacy Policy Page;</p>
                    <p>0.4. users are able to change their personal information by emailing us at <b>info@africaspeaks.global</b>.</p>
                    <p>Our Policy on “Do Not Track” Signals:</p>
                    <p>We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.</p>
                    <p>You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.</p>
                    <p>12. <b>Your Data Protection Rights under the California Consumer Privacy Act (CCPA)</b></p>
                    <p>If you are a California resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:</p>
                    <p><b>0.1. What personal information we have about you. If you make this request, we will return to you:</b></p>
                    <p>0.0.1. The categories of personal information we have collected about you.</p>
                    <p>0.0.2. The categories of sources from which we collect your personal information.</p>
                    <p>0.0.3. The business or commercial purpose for collecting or selling your personal information.</p>
                    <p>0.0.4. The categories of third parties with whom we share personal information.</p>
                    <p>0.0.5. The specific pieces of personal information we have collected about you.</p>
                    <p>0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.</p>
                    <p>0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.</p>
                    <p>Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.</p>
                    <p><b>0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.</b></p>
                    <p><b>0.3. To stop selling your personal information. We don’t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a “sale” under California law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.</b></p>
                    <p>If you submit a request to stop selling your personal information, we will stop making such transfers.</p>
                    <p>Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.</p>
                    <p>To exercise your California data protection rights described above, please send your request(s) by email: <b>info@africaspeaks.global</b>.</p>
                    <p>Your data protection rights, described above, are covered by the CCPA, short for the California Consumer Privacy Act. To find out more, visit the official California Legislative Information website. The CCPA took effect on 01/01/2020.</p>
                    <p>13. <b>Service Providers</b></p>
                    <p>We may employ third party companies and individuals to facilitate our Service (<b>“Service Providers”</b>), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>
                    <p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
                    <p>14. <b>Analytics</b></p>
                    <p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
                    <p>15. <b>CI/CD tools</b></p>
                    <p>We may use third-party Service Providers to automate the development process of our Service.</p>

                    <p>16. <b>Behavioral Remarketing</b></p>
                    <p>We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</p>

                    <p>17. <b>Links to Other Sites</b></p>
                    <p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                    <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                    <p>For example, the outlined <a href="https://policymaker.io/privacy-policy/">privacy policy</a> has been made using <a href="https://policymaker.io/">PolicyMaker.io</a>, a free tool that helps create high-quality legal documents. PolicyMaker’s <a href="https://policymaker.io/privacy-policy/">privacy policy generator</a> is an easy-to-use tool for creating a <a href="https://policymaker.io/blog-privacy-policy/">privacy policy for blog</a>, website, e-commerce store or mobile app.</p>
                    <p>18. <b><b>Children’s Privacy</b></b></p>
                    <p>Our Services are not intended for use by children under the age of 18 (<b>“Child”</b> or <b>“Children”</b>).</p>
                    <p>We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.</p>
                    <p>19. <b>Changes to This Privacy Policy</b></p>
                    <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                    <p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update “effective date” at the top of this Privacy Policy.</p>
                    <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                    <p>20. <b>Contact Us</b></p>
                    <p>If you have any questions about this Privacy Policy, please contact us by email: <b>info@africaspeaks.global</b>.</p>
                    <p style="margin-top: 5em; font-size: 0.7em;">This <a href="https://policymaker.io/privacy-policy/">Privacy Policy</a> was created for <b>africaspeaks.global</b> by <a href="https://policymaker.io">PolicyMaker.io</a> on 2021-04-01.</p>

                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary modal_close_text" data-bs-dismiss="modal">Understood</button>
          
        </div>
      </div>
    </div>
  </div>
        
 <!-- Lausanne Modal -->
 <div class="modal fade" id="LausanneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title my_modal_titles" id="exampleModalLabel">Lausanne Covenant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <h3 id="cov" class="cov my_modal_titles" align="center" tabindex="-1">INTRODUCTION</h3>
                    <p>We, members of the Church of Jesus Christ, from more than 150 nations, participants in the International Congress on World Evangelization at Lausanne, praise God for his great salvation and rejoice in the fellowship he has given us with himself and with each other. We are deeply stirred by what God is doing in our day, moved to penitence by our failures and challenged by the unfinished task of evangelization. We believe the gospel is God’s good news for the whole world, and we are determined by his grace to obey Christ’s commission to proclaim it to all mankind and to make disciples of every nation. We desire, therefore, to affirm our faith and our resolve, and to make public our covenant.</p>
                    <h3 class="cov my_modal_titles" align="center">1. THE PURPOSE OF GOD</h3>
                    <p>We affirm our belief in the one eternal God, Creator and Lord of the world, Father, Son and Holy Spirit, who governs all things according to the purpose of his will. He has been calling out from the world a people for himself, and sending his people back into the world to be his servants and his witnesses, for the extension of his kingdom, the building up of Christ’s body, and the glory of his name. We confess with shame that we have often denied our calling and failed in our mission, by becoming conformed to the world or by withdrawing from it. Yet we rejoice that, even when borne by earthen vessels, the gospel is still a precious treasure. To the task of making that treasure known in the power of the Holy Spirit we desire to dedicate ourselves anew.</p>
                    <p class="scripture"><em>(Isaiah 40:28; Matthew 28:19; Ephesians 1:11; Acts 15:14; John 17:6,18; Ephesians 4:12; 1 Corinthians 5:10; Romans 12:2; 2 Corinthians 4:7)</em></p>
                    <h3 class="cov my_modal_titles" align="center">2. THE AUTHORITY AND POWER OF THE BIBLE</h3>
                    <p>We affirm the divine inspiration, truthfulness and authority of both Old and New Testament Scriptures in their entirety as the only written word of God, without error in all that it affirms, and the only infallible rule of faith and practice. We also affirm the power of God’s word to accomplish his purpose of salvation. The message of the Bible is addressed to all men and women. For God’s revelation in Christ and in Scripture is unchangeable. Through it the Holy Spirit still speaks today. He illumines the minds of God’s people in every culture to perceive its truth freshly through their own eyes and thus discloses to the whole Church ever more of the many-colored wisdom of God.</p>
                    <p class="scripture"><em>(2 Timothy 3:16; 2 Peter 1:21; John 10:35; Isaiah 55:11; 1 Corinthians 1:21; Romans 1:16, Matthew 5:17,18; Jude 3; Ephesians 1:17,18; 3:10,18)</em></p>
                    <h3 class="cov my_modal_titles" align="center">3. THE UNIQUENESS AND UNIVERSALITY OF CHRIST</h3>
                    <p>We affirm that there is only one Saviour and only one gospel, although there is a wide diversity of evangelistic approaches. We recognize that everyone has some knowledge of God through his general revelation in nature. But we deny that this can save, for people suppress the truth by their unrighteousness. We also reject as derogatory to Christ and the gospel every kind of syncretism and dialogue which implies that Christ speaks equally through all religions and ideologies. Jesus Christ, being himself the only God-Man, who gave himself as the only ransom for sinners, is the only mediator between God and people. There is no other name by which we must be saved. All men and women are perishing because of sin, but God loves everyone, not wishing that any should perish but that all should repent. Yet those who reject Christ repudiate the joy of salvation and condemn themselves to eternal separation from God. To proclaim Jesus as ‘the Saviour of the world’ is not to affirm that all people are either automatically or ultimately saved, still less to affirm that all religions offer salvation in Christ. Rather it is to proclaim God’s love for a world of sinners and to invite everyone to respond to him as Saviour and Lord in the wholehearted personal commitment of repentance and faith. Jesus Christ has been exalted above every other name; we long for the day when every knee shall bow to him and every tongue shall confess him Lord.</p>
                    <p class="scripture"><em>(Galatians 1:6-9; Romans 1:18-32; l Timothy 2:5,6; Acts 4:12; John 3:16-19; 2 Peter 3:9; 2 Thessalonians 1:7-9; John 4:42; Matthew 11:28; Ephesians 1:20,21; Philippians 2:9-11)</em></p>
                    <h3 class="cov my_modal_titles" align="center">4. THE NATURE OF EVANGELISM</h3>
                    <p>To evangelize is to spread the good news that Jesus Christ died for our sins and was raised from the dead according to the Scriptures, and that, as the reigning Lord, he now offers the forgiveness of sins and the liberating gifts of the Spirit to all who repent and believe. Our Christian presence in the world is indispensable to evangelism, and so is that kind of dialogue whose purpose is to listen sensitively in order to understand. But evangelism itself is the proclamation of the historical, biblical Christ as Saviour and Lord, with a view to persuading people to come to him personally and so be reconciled to God. In issuing the gospel invitation we have no liberty to conceal the cost of discipleship. Jesus still calls all who would follow him to deny themselves, take up their cross, and identify themselves with his new community. The results of evangelism include obedience to Christ, incorporation into his Church and responsible service in the world.</p>
                    <p class="scripture"><em>(1 Corinthians 15:3,4; Acts 2:32-39; John 20:21; 1 Corinthians 1:23; 2 Corinthians 4:5; 5:11,20; Luke 14:25-33; Mark 8:34; Acts 2:40,47; Mark 10:43-45)</em></p>
                    <h3 class="cov my_modal_titles" align="center">5. CHRISTIAN SOCIAL RESPONSIBILITY</h3>
                    <p>We affirm that God is both the Creator and the Judge of all men. We therefore should share his concern for justice and reconciliation throughout human society and for the liberation of men and women from every kind of oppression. Because men and women are made in the image of God, every person, regardless of race, religion, colour, culture, class, sex or age, has an intrinsic dignity because of which he or she should be respected and served, not exploited. Here too we express penitence both for our neglect and for having sometimes regarded evangelism and social concern as mutually exclusive. Although reconciliation with other people is not reconciliation with God, nor is social action evangelism, nor is political liberation salvation, nevertheless we affirm that evangelism and socio-political involvement are both part of our Christian duty. For both are necessary expressions of our doctrines of God and Man, our love for our neighbour and our obedience to Jesus Christ. The message of salvation implies also a message of judgment upon every form of alienation, oppression and discrimination, and we should not be afraid to denounce evil and injustice wherever they exist. When people receive Christ they are born again into his kingdom and must seek not only to exhibit but also to spread its righteousness in the midst of an unrighteous world. The salvation we claim should be transforming us in the totality of our personal and social responsibilities. Faith without works is dead.</p>
                    <p class="scripture"><em>(Acts 17:26,31; Genesis 18:25; Isaiah 1:17; Psalm 45:7; Genesis 1:26,27; James 3:9; Leviticus 19:18; Luke 6:27,35; James 2:14-26; John 3:3,5; Matthew 5:20; 6:33; 2 Corinthians 3:18; James 2:20)</em></p>
                    <h3 class="cov my_modal_titles" align="center">6. THE CHURCH AND EVANGELISM</h3>
                    <p>We affirm that Christ sends his redeemed people into the world as the Father sent him, and that this calls for a similar deep and costly penetration of the world. We need to break out of our ecclesiastical ghettos and permeate non-Christian society. In the Church’s mission of sacrificial service, evangelism is primary. World evangelization requires the whole Church to take the whole gospel to the whole world. The Church is at the very centre of God’s cosmic purpose and is his appointed means of spreading the gospel. But a church which preaches the cross must itself be marked by the cross. It becomes a stumbling block to evangelism when it betrays the gospel or lacks a living faith in God, a genuine love for people, or scrupulous honesty in all things including promotion and finance. The church is the community of God’s people rather than an institution, and must not be identified with any particular culture, social or political system, or human ideology.</p>
                    <p class="scripture"><em>(John 17:18; 20:21; Matthew 28:19,20; Acts 1:8; 20:27; Ephesians 1:9,10; 3:9-11; Galatians 6:14,17; 2 Corinthians 6:3,4; 2 Timothy 2:19-21; Philippians 1:27)</em></p>
                    <h3 class="cov my_modal_titles" align="center">7. COOPERATION IN EVANGELISM</h3>
                    <p>We affirm that the Church’s visible unity in truth is God’s purpose. Evangelism also summons us to unity, because our oneness strengthens our witness, just as our disunity undermines our gospel of reconciliation. We recognize, however, that organizational unity may take many forms and does not necessarily advance evangelism. Yet we who share the same biblical faith should be closely united in fellowship, work and witness. We confess that our testimony has sometimes been marred by a sinful individualism and needless duplication. We pledge ourselves to seek a deeper unity in truth, worship, holiness and mission. We urge the development of regional and functional cooperation for the furtherance of the Church’s mission, for strategic planning, for mutual encouragement, and for the sharing of resources and experience.</p>
                    <p class="scripture"><em>(John 17:21,23; Ephesians 4:3,4; John 13:35; Philippians 1:27; John 17:11-23)</em></p>
                    <h3 class="cov my_modal_titles" align="center">8. CHURCHES IN EVANGELISTIC PARTNERSHIP<a id="p-8"></a></h3>
                    <p>We rejoice that a new missionary era has dawned. The dominant role of western missions is fast disappearing. God is raising up from the younger churches a great new resource for world evangelization, and is thus demonstrating that the responsibility to evangelize belongs to the whole body of Christ. All churches should therefore be asking God and themselves what they should be doing both to reach their own area and to send missionaries to other parts of the world. A re-evaluation of our missionary responsibility and role should be continuous. Thus a growing partnership of churches will develop and the universal character of Christ’s Church will be more clearly exhibited. We also thank God for agencies which labor in Bible translation, theological education, the mass media, Christian literature, evangelism, missions, church renewal and other specialist fields. They too should engage in constant self-examination to evaluate their effectiveness as part of the Church’s mission.</p>
                    <p class="scripture"><em>(Romans 1:8; Philippians 1:5; 4:15; Acts 13:1-3; 1 Thessalonians 1:6-8)</em></p>
                    <h3 class="cov my_modal_titles" align="center">9. THE URGENCY OF THE EVANGELISTIC TASK</h3>
                    <p>More than 2,700 million people, which is more than two-thirds of all humanity, have yet to be evangelized. We are ashamed that so many have been neglected; it is a standing rebuke to us and to the whole Church. There is now, however, in many parts of the world, an unprecedented receptivity to the Lord Jesus Christ. We are convinced that this is the time for churches and para-church agencies to pray earnestly for the salvation of the unreached and to launch new efforts to achieve world evangelization. A reduction of foreign missionaries and money in an evangelized country may sometimes be necessary to facilitate the national church’s growth in self-reliance and to release resources for unevangelized areas. Missionaries should flow ever more freely from and to all six continents in a spirit of humble service. The goal should be, by all available means and at the earliest possible time, that every person will have the opportunity to hear, to understand, and to receive the good news. We cannot hope to attain this goal without sacrifice. All of us are shocked by the poverty of millions and disturbed by the injustices which cause it. Those of us who live in affluent circumstances accept our duty to develop a simple life-style in order to contribute more generously to both relief and evangelism.</p>
                    <p class="scripture"><em>(John 9:4; Matthew 9:35-38; Romans 9:1-3; 1 Corinthians 9:19-23; Mark 16:15; Isaiah 58:6,7; James 1:27; 2:1-9; Matthew 25:31-46; Acts 2:44,45; 4:34,35)</em></p>
                    <h3 class="cov my_modal_titles" align="center">10. EVANGELISM AND CULTURE</h3>
                    <p>The development of strategies for world evangelization calls for imaginative pioneering methods. Under God, the result will be the rise of churches deeply rooted in Christ and closely related to their culture. Culture must always be tested and judged by Scripture. Because men and women are God’s creatures, some of their culture is rich in beauty and goodness. Because they are fallen, all of it is tainted with sin and some of it is demonic. The gospel does not presuppose the superiority of any culture to another, but evaluates all cultures according to its own criteria of truth and righteousness, and insists on moral absolutes in every culture. Missions have, all too frequently, exported with the gospel an alien culture, and churches have sometimes been in bondage to culture rather than to Scripture. Christ’s evangelists must humbly seek to empty themselves of all but their personal authenticity in order to become the servants of others, and churches must seek to transform and enrich culture, all for the glory of God.</p>
                    <p class="scripture"><em>(Mark 7:8,9,13; Genesis 4:21,22; 1 Corinthians 9:19-23; Philippians 2:5-7; 2 Corinthians 4:5)</em></p>
                    <h3 class="cov my_modal_titles" align="center">11. EDUCATION AND LEADERSHIP</h3>
                    <p>We confess that we have sometimes pursued church growth at the expense of church depth, and divorced evangelism from Christian nurture. We also acknowledge that some of our missions have been too slow to equip and encourage national leaders to assume their rightful responsibilities. Yet we are committed to indigenous principles, and long that every church will have national leaders who manifest a Christian style of leadership in terms not of domination but of service. We recognize that there is a great need to improve theological education, especially for church leaders. In every nation and culture there should be an effective training programme for pastors and laity in doctrine, discipleship, evangelism, nurture and service. Such training programmes should not rely on any stereotyped methodology but should be developed by creative local initiatives according to biblical standards.</p>
                    <p class="scripture"><em>(Colossians 1:27,28; Acts 14:23; Titus 1:5,9; Mark 10:42-45; Ephesians 4:11,12)</em></p>
                    <h3 class="cov my_modal_titles" align="center">12. SPIRITUAL CONFLICT</h3>
                    <p>We believe that we are engaged in constant spiritual warfare with the principalities and powers of evil, who are seeking to overthrow the Church and frustrate its task of world evangelization. We know our need to equip ourselves with God’s armour and to fight this battle with the spiritual weapons of truth and prayer. For we detect the activity of our enemy, not only in false ideologies outside the Church, but also inside it in false gospels which twist Scripture and put people in the place of God. We need both watchfulness and discernment to safeguard the biblical gospel. We acknowledge that we ourselves are not immune to worldliness of thought and action, that is, to a surrender to secularism. For example, although careful studies of church growth, both numerical and spiritual, are right and valuable, we have sometimes neglected them. At other times, desirous to ensure a response to the gospel, we have compromised our message, manipulated our hearers through pressure techniques, and become unduly preoccupied with statistics or even dishonest in our use of them. All this is worldly. The Church must be in the world; the world must not be in the Church.</p>
                    <p class="scripture"><em>(Ephesians 6:12; 2 Corinthians 4:3,4; Ephesians 6:11,13-18; 2 Corinthians 10:3-5; 1 John 2:18-26; 4:1-3; Galatians 1:6-9; 2 Corinthians 2:17; 4:2; John 17:15)</em></p>
                    <h3 class="cov my_modal_titles" align="center">13. FREEDOM AND PERSECUTION</h3>
                    <p>It is the God-appointed duty of every government to secure conditions of peace, justice and liberty in which the Church may obey God, serve the Lord Jesus Christ, and preach the gospel without interference. We therefore pray for the leaders of nations and call upon them to guarantee freedom of thought and conscience, and freedom to practise and propagate religion in accordance with the will of God and as set out in The Universal Declaration of Human Rights. We also express our deep concern for all who have been unjustly imprisoned, and especially for those who are suffering for their testimony to the Lord Jesus. We promise to pray and work for their freedom. At the same time we refuse to be intimidated by their fate. God helping us, we too will seek to stand against injustice and to remain faithful to the gospel, whatever the cost. We do not forget the warnings of Jesus that persecution is inevitable.</p>
                    <p class="scripture"><em>(1 Timothy 1:1-4; Acts 4:19; 5:29; Colossians 3:24; Hebrews 13:1-3; Luke 4:18; Galatians 5:11; 6:12; Matthew 5:10-12; John 15:18-21)</em></p>
                    <h3 class="cov my_modal_titles" align="center">14. THE POWER OF THE HOLY SPIRIT</h3>
                    <p>We believe in the power of the Holy Spirit. The Father sent his Spirit to bear witness to his Son; without his witness ours is futile. Conviction of sin, faith in Christ, new birth and Christian growth are all his work. Further, the Holy Spirit is a missionary spirit; thus evangelism should arise spontaneously from a Spirit-filled church. A church that is not a missionary church is contradicting itself and quenching the Spirit. Worldwide evangelization will become a realistic possibility only when the Spirit renews the Church in truth and wisdom, faith, holiness, love and power. We therefore call upon all Christians to pray for such a visitation of the sovereign Spirit of God that all his fruit may appear in all his people and that all his gifts may enrich the body of Christ. Only then will the whole Church become a fit instrument in his hands, that the whole earth may hear his voice.</p>
                    <p class="scripture"><em>(1 Corinthians 2:4; John 15:26;27; 16:8-11; 1 Corinthians 12:3; John 3:6-8; 2 Corinthians 3:18; John 7:37-39; 1 Thessalonians 5:19; Acts 1:8; Psalm 85:4-7; 67:1-3; Galatians 5:22,23; 1 Corinthians 12:4-31; Romans 12:3-8)</em></p>
                    <h3 class="cov my_modal_titles" align="center">15. THE RETURN OF CHRIST</h3>
                    <p>We believe that Jesus Christ will return personally and visibly, in power and glory, to consummate his salvation and his judgment. This promise of his coming is a further spur to our evangelism, for we remember his words that the gospel must first be preached to all nations. We believe that the interim period between Christ’s ascension and return is to be filled with the mission of the people of God, who have no liberty to stop before the end. We also remember his warning that false Christs and false prophets will arise as precursors of the final Antichrist. We therefore reject as a proud, self-confident dream the notion that people can ever build a utopia on earth. Our Christian confidence is that God will perfect his kingdom, and we look forward with eager anticipation to that day, and to the new heaven and earth in which righteousness will dwell and God will reign forever. Meanwhile, we re-dedicate ourselves to the service of Christ and of people in joyful submission to his authority over the whole of our lives.</p>
                    <p class="scripture"><em>(Mark 14:62; Hebrews 9:28; Mark 13:10; Acts 1:8-11; Matthew 28:20; Mark 13:21-23; 1 John 2:18; 4:1-3; Luke 12:32; Revelation 21:1-5; 2 Peter 3:13; Matthew 28:18) </em></p>
                    <h3 class="cov my_modal_titles" align="center">CONCLUSION</h3>
                    <p>Therefore, in the light of this our faith and our resolve, we enter into a solemn covenant with God and with each other, to pray, to plan and to work together for the evangelization of the whole world. We call upon others to join us. May God help us by his grace, and for his glory, to be faithful to this our covenant! Amen, Alleluia!</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-white font-weight-bold modal_close_text" data-bs-dismiss="modal"><span class="text-white font-weight-bold"></span>Understood</button>
         
        </div>
      </div>
    </div>
  </div>

  <!-- ================ACCOUNT CLOSURE MODAL====================== -->
  <div class="modal fade" id="accountClosureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title brownColor" id="exampleModalLabel">Are you sure you want to close your account?
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="brownColor">
                If there's anything we can help you with, please contact us. Once your account is closed, you won't be able to use this account.
                </div>
                
                <div class="col-12">               

                    <label for="exampleFormControlInput1" class="form-label">Reason*</label>
                    <div id="closeAccountEditor">
                        
                    </div>  
                </div>
            </div>

        
                     
                
      

            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-warning"><span class="commentBtnText">CLOSE ACCOUNT</span></button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span class="commentBtnText">CANCEL</span> </button>
            
        </div>
        </div>
    </form>
   
  </div>
</div>

<!-- ================ DELETE MODAL ====================== -->
 <div class="modal fade" id="deleteRoleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">DELETE ROLE
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="alert alert-warning" role="alert">
                    Are you sure you want to delete the role?
                </div>
                                
            </div>

        
                     
                
      

            
        </div>
        <div class="modal-footer">
       
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span class="commentBtnText">CANCEL</span> </button>
            <button type="button" class="btn btn-primary"><span class="commentBtnText">OK</span></button>
        </div>
        </div>
    </form>
   
  </div>
</div>



<!-- ================ DELETE MODAL ====================== -->
<div class="modal fade" id="createNewRoleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">CREATE NEW ROLE
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                
            <div class="col-12">
                <div class="form">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control">
                </div>
            </div>
                                
            </div>
            
        </div>
        <div class="modal-footer">
       
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <span class="commentBtnText">CANCEL</span> </button>
            <button type="button" class="btn btn-warning"><span class="commentBtnText">ADD ROLE</span></button>
        </div>
        </div>
    </form>
   
  </div>
</div>






  <!-- ===========FOOTER SECTION============ -->
 
<footer style="background-color: #000;" class="mb-0">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3 col-12 text-start" >
                    <img src="assets/images/africaspeaks_logo.png" class="my-5 img-fluid" alt="" width="80" height="59">

                </div>
                <div class="col-md-9 col-12">
                    <div class="row">
                        <div class="col-12">
                            <ul class="d-flex   list-inline  footer_ul_nav">
                                <li class=" list-inline-item "><a href="../africaspeaks community forum/">BACK TO COMMUNITY AREA</a></li>                                                  
                    
                            </ul> 
                        </div>
                        
                    </div>
                       
                   
                </div>
               

                
            </div>
            <div class="row">
                
            </div>
            <div class="row mt-3 mb-3 text-white">
                <div class="col-md-6">
                    <div class="float-md-start footer_text">&copy 2022 Africa Speaks. All Rights Reserved</div>
                </div>
                <div class="col-md-6">
                    <p class="float-md-end footer_text">Designed and developed by <a href="#" class="text-decoration-none"><span class="
                        orangeColor">Calvary Studio</span></a> </p>
    
                </div>
            
                <!-- <p class="float-end">Designed and developed by <a href="#"><span>Calvary Studio</span></a> </p> -->
    
            </div>
        </div>
    </footer>
    

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    //  WYSIWYG
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
    .create( document.querySelector( '#modaleditor' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#addCommentEditor' ) )
    .catch( error => {
        console.error( error );
    } );

    $('#dob').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });

    ClassicEditor
    .create( document.querySelector( '#bioEditor' ) )
    .catch( error => {
        console.error( error );
    } );
    
    ClassicEditor
    .create( document.querySelector( '#newProjectEditor' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#closeAccountEditor' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.newTopicEditor' ) )
    .catch( error => {
        console.error( error );
    } );   

    ClassicEditor
    .create( document.querySelector( '#newForumEditor' ) )
    .catch( error => {
        console.error( error );
    } ); 
    ClassicEditor
    .create( document.querySelector( '.newForumEditor' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#newTopicEditorAdmin' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.viewCommentEditor' ) )
    .catch( error => {
        console.error( error );
    } );

    
    viewCommentEditor
</script>
</body>
</html>