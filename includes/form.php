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
                <div class="sidefromin">
                  <form id="apointmentForm" method="POST" action="" novalidate="novalidate">
                    <input type="hidden" class="form-control" name="product_collection" id="product_collection" value="FOL">
                    <!-- <input type="hidden" class="form-control" name="SKU" id="SKU" value="FL21GAH"> -->
                    <input type="hidden" class="form-control" name="source" id="source" value="FOL Products Home Page">
                    <div class="fromdiv">
                      <div class="row">
                        <div class="form-group col-sm-12  mb-4">
                          <input type="text" class="form-control" name="Name" value="" id="fullName" placeholder="Full Name">
                          <span id="name_error"></span>
                        </div>

                        <div class="form-group col-sm-6  mb-4">
                          <input type="number" class="form-control" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" title="Enter valid mobile number ex.9811111111" name="ContactNumber" value="" id="ContactNumber" placeholder="Contact Number">
                          <span id="telephone_error"></span>
                        </div>
                        <div class="form-group col-sm-6 mb-4">
                          <input type="text" class="form-control" name="EmailId" value="" id="EmailId" placeholder="Email ID">
                          <span id="email_error"></span>
                        </div>
                        <div class="form-group col-sm-6 mb-4">
                          <select class="form-control" id="selectCity" name="City" placeholder="Select City">
                            <option value="">Select City</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Gurgaon">Gurgaon</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="New Delhi">New Delhi</option>
                          </select>
                          <span id="city_error"></span>
                        </div>
                        <div class="form-group col-sm-6 mb-4">
                          <select class="form-control" id="preferred_boutique" name="StoreName" placeholder="Select Boutique" value="">
                            <option value="">Select a Boutique</option>
                          </select>
                          <span id="preferred_boutique_error"></span>
                        </div>
                        <div class="form-group col-sm-12 mb-4">
                          <textarea class="form-control" name="Message" value="" id="message" placeholder="What would you like to talk to us about? Write your message here (optional)" rows="2"></textarea>
                        </div>
                        <div class="form-group col-sm-12 mb-0">
                          <button type="submit" class="btn submitin primary-btn" id="form_submit1">Submit</button>
                        </div>
                        <div class="loader-box">
                          <img src="./images/loader.gif">
                        </div>
                        <div class="thank-you-message">
                          <p style="d-none" id="success_msg"></p>
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
