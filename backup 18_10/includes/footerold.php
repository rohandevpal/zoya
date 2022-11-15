<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/after.js"></script>
<script>
        window.__lc = window.__lc || {};
            window.__lc.license =  9374285;
            window.__lc.group = 19;
            window.__lc.chat_between_groups = false;
            ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice));
                
              /*Live Chat-Facebook pixel*/
              var LC_API = LC_API || {};
              LC_API.on_prechat_survey_submitted = function(data)
              {
                  fbq('trackCustom', 'LiveChat', { event: 'Pre-chat submitted' });
              };

              LC_API.on_chat_started = function(data)
              {
                  fbq('trackCustom', 'LiveChat', { event: 'Chat Started' });
              };

              LC_API.on_postchat_survey_submitted = function(data)
              {
                  fbq('trackCustom', 'LiveChat', { event: 'Post-chat submitted' });
              };

              LC_API.on_ticket_created = function(data)
              {
                  fbq('trackCustom', 'LiveChat', { event: 'Ticket created' });
              };
                
              /*Live Chat-Google Ads pixel*/  
                    var LC_API = LC_API || {};
              LC_API.on_chat_started = function()
              {
              // track this chat in Google AdWords
              var google_conversion_id, google_conversion_label, img;
              google_conversion_id    = '416596231';
              google_conversion_label = 'hP4gCJzO594DEIeC08YB';
              img = new Image(1, 1);
              img.src = 'https://www.googleadservices.com/pagead/conversion/'+google_conversion_id+'/?label='+google_conversion_label+'&script=0';
              };
         </script>
    

    <section id="form">
  <div class="modal  find-modalin" id="schedulein" aria-modal="true" role="dialog">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <p class="close  closeBtnForm" data-bs-dismiss="modal">
            <img src="./images/findclose.svg" alt="" style="cursor: pointer;">
          </p>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="mainfrom">
            <div class="row">
              <div class="col-md-12 col-lg-5">
                <div class="sidetextin">
                  <h4>Talk to a Zoya <br>Jewellery Advisor </h4>
                  <p>Book a one-on-one virtual consultation with our jewellery specialists. We are open everyday from 11 am to 8 pm IST to help you with: </p>
                  <ul>
                    <li>Finding a piece that tells your story</li>
                    <li>Placing orders </li>
                    <li>Understanding Zoya policies</li>
                    <li> Size and fit queries</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 col-lg-7 my-auto">
                <div class="sidefromin" style="padding-left: 13px;">
                  <form id="apointment-form" method="post" action="#" novalidate="novalidate">
                    <input type="hidden" class="form-control" name="product_collection" id="product_collection" value="FOL">
                    <input type="hidden" class="form-control" name="SKU" id="SKU" value="FL21GAH">
                    <input type="hidden" class="form-control" name="source" id="source" value="FOL Products Home Page">
                    <div class="fromdiv">
                      <div class="row">
                        <div class="form-group col-sm-6  mb-4">
                          <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                          <span id="name_error"></span>
                        </div>
                        <div class="form-group col-sm-6 mb-4">
                          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                          <span id="lastname_error"></span>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                          <input type="number" class="form-control" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" title="Enter Valid mobile number ex.9811111111" name="telephone" id="telephone" placeholder="Contact Number">
                          <span id="telephone_error"></span>
                        </div>
                        <div class="form-group col-sm-6 mb-4">
                          <input type="email" class="form-control" name="email" value="" id="email" placeholder="Email ID">
                          <span id="email_error"></span>
                        </div>
                      <div class="form-group col-sm-6  mb-4">
                          <select class="form-control" id="city" name="city" placeholder="Select City">
                            <option value="">Select City</option>
                          </select>
                          <span id="city_error"></span>
                        </div>
                      <div class="form-group col-sm-6  mb-4">
                          <select class="form-control" id="preferred_boutique" name="preferred_boutique" placeholder="Select Boutique">
                            <option value="">Select a Boutique</option>
                          </select>
                          <span id="preferred_boutique_error"></span>
                        </div>
                        <div class="form-group col-sm-12 mb-4">
                          <textarea class="form-control" name="message" id="message" placeholder="What would you like to talk to us about? Write your message here (optional)" rows="2"></textarea>
                        </div>
                             <div class="form-group col-sm-12">
                        <button type="button" class="btn submitin primary-btn" id="form_submit">Submit</button>
                      </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <script type="text/javascript">
        function menubar(){
           $(".mainnav").css('right','0%');
        }     
    </script>
</body>

</html>
