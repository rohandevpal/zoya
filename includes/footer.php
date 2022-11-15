<script src="js/aos.js"></script>
<script type="text/javascript" src="js/after.js?v=2"></script>
<script type="text/javascript" src="js/custom.js?v=2"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/custom.js"></script>
<script src="./js/after.js"></script>  -->
<script type="text/javascript">
  function menubar() {
    $(".mainnav").css('right', '0%');
  }
</script>
<script type="text/javascript">
var storCodearray = [];

  $(document).ready(function() {
      
    // var city = {"Ahmedabad":"ZOYA Gallery @ Tanishq C G Road - Ahmedabad"};
    const myArray = [];
    myArray['Ahmedabad'] = ["ZOYA Gallery @ Tanishq C G Road - Ahmedabad"];
    myArray['Bangalore'] = ["ZOYA Vittal Mallya Road - Bangalore"];
    myArray['Chandigarh'] = ["ZOYA Gallery @ Tanishq Manimajra - Chandigarh"];
    myArray['Chennai'] = ["ZOYA Gallery @ Tanishq Cathedral Road - Chennai"];
    myArray['Gurgaon'] = ["ZOYA Ambience Mall - Gurgaon"];
    myArray['Kolkata'] = ["ZOYA Gallery @ Tanishq Camac Street - Kolkata"];
    myArray['Mumbai'] = ["ZOYA Khar - Mumbai", "ZOYA Palladium - Mumbai", "ZOYA Gallery @ Tanishq Andheri Link Road - Mumbai"];
    myArray['New Delhi'] = ["ZOYA South Ex 1 - New Delhi"];
    
    storCodearray['ZOYA Gallery @ Tanishq C G Road - Ahmedabad']='ZAH';
    storCodearray['ZOYA Vittal Mallya Road - Bangalore']='ZBL';
    storCodearray['ZOYA Gallery @ Tanishq Manimajra - Chandigarh']='ZCH';
    storCodearray['ZOYA Gallery @ Tanishq Cathedral Road - Chennai']='ZCC';
    storCodearray['ZOYA Ambience Mall - Gurgaon']='ZGA';
    storCodearray['ZOYA Gallery @ Tanishq Camac Street - Kolkata']='ZKC';
    storCodearray['ZOYA Khar - Mumbai']='KLR';
    storCodearray['ZOYA Palladium - Mumbai']='MLP';
    storCodearray['ZOYA Gallery @ Tanishq Andheri Link Road - Mumbai']='ZMT';
    storCodearray['ZOYA South Ex 1 - New Delhi']='ZSE';
    //console.log(storCodearray['ZOYA Gallery @ Tanishq C G Road - Ahmedabad']);

    $("#selectCity").on('change', function() {
      var select = $("#preferred_boutique").html('');
      var cityName = $(this).val();
      var length = myArray[cityName].length;
      
      if (length > 1) {
        $.each(myArray[cityName], function(key, value) {
          $("#preferred_boutique").append("<option value='" + value + "'>" + value + "</option>");
        })
      } else {
        var stordata = myArray[cityName];
        $("#preferred_boutique").append("<option value='" + stordata + "'>" + stordata + "</option>");
      }
    })
  });

  $("#apointmentForm").validate({
    rules: {
      Name: {
        required: true,
      },
      ContactNumber: {
        required: true,
        number: true
      },
      EmailId: {
        required: true,
        email: true
      },
      City: {
        required: true
      },
      StoreName: {
        required: true
      },
      Message: {
        required: false
      }
    },
    messages: {
      Name: "Please enter your full name",
      ContactNumber: {
        required: "Please enter telephone number",
        //number: "Please enter "
      },
      EmailId: {
        required: "Please enter your email address",
        email: "Please enter valid email address"
      },
      City: "Please select city",
      StoreName: "Please select preferred boutique",
      Message: "Please enter message",
    },
    submitHandler: function(form) {
      $('.loader-box').css('display', 'block');
      var name = $("#fullName").val();
      var email = $("#EmailId").val();
      var ContactNumber = $("#ContactNumber").val();
      var selectCity = $("#selectCity").val();
      var preferred_boutique = $("#preferred_boutique").val();
      var message = $("#message").val();
      
  var settings = {
  "url": "https://titan-exp-app-cors.us-e2.cloudhub.io/api/exp/zoya/v1/weblead",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "partnerId": "Zoya",
    "Authorization": "Basic VGl0YW5fTXVsZV9Db3JzOmFkbWluX3QhdGFuX211bGU=",
    "Content-Type": "application/json"
  },
  "data": JSON.stringify({
    "Name": name,
    "Brand": "ZOYA",
    "ContactNumber": ContactNumber,
    "Channel": "ZOYA",
    "Message": message,
    "AppointmentDate": "",
    "AppointmentTime": "",
    "SKU": "",
    "StoreName": preferred_boutique,
    "Occasion": "",
    "EmailId": email,
    "City": selectCity,
    "ModeOC": "call",
    "Store_code": storCodearray[preferred_boutique]
  }),
};
//console.log(settings);
$.ajax(settings).done(function (response) {
  if(response.success_code==200){
    window.location.href = "https://www.zoya.in/thank-you";
  }

});


    }
  });

  $(document).ready(function() {

    setTimeout(function(){
    $('.beyond-logo-box').delay(2500).fadeOut();
},5000);
    setTimeout(function(){
    $('.beyond-data-play').delay(2500).fadeIn();
},6000);

});
</script>
</body>

</html>