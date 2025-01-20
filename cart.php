<?php include('includes/header.php'); ?>


<div class="cart-page pt-5 pb-0">

	<div class="heading">
        <h1>Your Cart</h1>
    </div>
<div class="container">
<div class="row cart-tb">
	<div class="col-lg-12 col-md-12 cart-items">
		<div class="table-cart">
		<table class="table cart-table">
		  <thead>
		  <tr>
			<th>Item</th>
			<th>Price</th>
		  </tr>
		  </thead>
		  <tbody>
		                      <tr>
            <td colspan="2">Your cart is empty.</td>
          </tr>
          		  </tbody>
          		</table>
		</div>
        <div class="text-right col-12 bottom-form-btns">
        <a href="/special-astrology-services" class="btn btn-success success-button">Buy More Services</a>
                </div>
	</div>
</div>
</div>
</div>
<div class="container text-center">
<div class="secure-div pt-0 pb-0" id="login">
  <img class="desktop-img" src="https://assets.askganesha.com/images/secure-checkout.png" alt="Secure Checkout"/>
  <img class="mobile-img" src="https://assets.askganesha.com/images/secure-checkout-mobile.jpg" alt="Secure Checkout Mobile"/>
</div>

</div>

<div class="cart-page pt-0">
  <div class="container">
    <div class="row cart-tb pt-3">
    
      <div class="col-lg-6 col-md-6">
	      <div class="form_bor">

          <div class="row">
            <div class="col-md-12">
              <div class="form form-head">

                <div class="google-login">
                  <h3>Guest Checkout</h3>

                </div>

              </div>
              <form name="frmLogin" method="post" id="frm_ts_id_frmLogin26" action="/cart/register" class="form" ><div class="row" ><div class="col-12" ><div class="field-set required" ><div class="caption-wraper" ><label class="field_label" >Full Name</label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="Full Name" name="name" required="required" data-tsreq="{&quot;required&quot;:true}" value="" type="text"  /></div></div></div></div></div><div class="row" ><div class="col-12" ><div class="field-set required" ><div class="caption-wraper" ><label class="field_label" >Email</label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="Email" name="email" required="required" data-tsreq="{&quot;required&quot;:true,&quot;valueType&quot;:4}" value="" type="email"  /></div></div></div></div></div><div class="row" ><div class="col-12" ><div class="field-set required" ><div class="caption-wraper" ><label class="field_label" >Confirm Email</label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="Confirm Email" name="email1" required="required" data-tsreq="{&quot;required&quot;:true,&quot;valueType&quot;:4,&quot;comparewith&quot;:[{&quot;fld&quot;:&quot;email&quot;,&quot;compareFieldCaption&quot;:&quot;email&quot;,&quot;operator&quot;:&quot;eq&quot;}]}" value="" type="email"  /></div></div></div></div></div><div class="row" ><div class="col-12" ><div class="field-set" ><div class="caption-wraper" ><label class="field_label" ></label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="" name="btn_submit" data-tsreq="{&quot;required&quot;:false}" value="Submit" type="submit"  /></div></div></div></div></div></form>      
            </div>
          </div>

        </div>
	    </div>

      <div class="col-lg-6 col-md-6">
		
        <div class="form_bor">

          <div class="row">
            <div class="col-md-12">
              <div class="form form-head">

                <div class="google-login login-form">
                  <h3>Login Here</h3>
                  <div class="row">
                    <div class="col-12">
                      <div class="g-signin2" data-onsuccess="googleSignIn"
                        data-width="200" data-longtitle="true"></div>
                    </div>
                  </div>
                  <div class="mb-4"></div>
                  <div class="row">
                    <div class="col-12">

                    <!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->
<a href="javascript:void(0);" onclick="fblogin()" class="sign_with_fb">
                    <img src="images/facebook.png" alt="Facebook Login" width="24">
                    <span>Sign in with facebook</span>
                  </a>
                    </div>
                  </div>
                  <h5>OR</h5>
                  <span>Login with Email Id</span>
                </div>

              </div>
                  <form name="frmLogin" method="post" id="frm_ts_id_frmLogin17" action="/login/login" class="form" ><div class="row" ><div class="col-12" ><div class="field-set required" ><div class="caption-wraper" ><label class="field_label" >Email</label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="Email" name="email" required="required" data-tsreq="{&quot;required&quot;:true,&quot;valueType&quot;:4}" value="" type="email"  /></div></div></div></div></div><div class="row" ><div class="col-12" ><div class="field-set required" ><div class="caption-wraper" ><label class="field_label" >Password</label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="Password" name="password" required="required" data-tsreq="{&quot;required&quot;:true,&quot;valueType&quot;:6}" value="" type="password"  /></div></div></div></div></div><div class="row" ><div class="col-12" ><div class="field-set" ><div class="caption-wraper" ><label class="field_label" ></label></div><div class="field-wraper" ><div class="field_cover" ><input data-field-caption="" name="btn_submit" data-tsreq="{&quot;required&quot;:false}" value="Submit" type="submit"  /></div></div></div></div></div></form>
                  <div class="row">
                    <div class="col-12 bot-link">
                      <a href="/login/registration-form">Sign Up</a> | 
                      <a href="/login/forgot-password">Forgot Password?</a>
                    </div>
                  </div>

            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
</div>
<script src="https://apis.google.com/js/platform.js" async defer></script>


  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<script>

window.fbAsyncInit = function() {
    FB.init({
      appId      : '1029602161352211',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v16.0'           // Use this Graph API version for this call.
    });

    // FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
    //   statusChangeCallback(response);        // Returns the login status.
    // });
  };

  function fblogin()
{
  FB.login(function(response) {
  if (response.status === 'connected') {
    postFbToken(response.authResponse.accessToken); 
  } else {
    // The person is not logged into your webpage or we are unable to tell. 
  }
}, {scope: 'public_profile,email'});
}

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      //testAPI(); 
      postFbToken(response.authResponse.accessToken); 
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  // window.fbAsyncInit = function() {
  //   FB.init({
  //     appId      : '1029602161352211',
  //     cookie     : true,
  //     xfbml      : true,
  //     version    : 'v16.0'
  //   });
      
  //   FB.AppEvents.logPageView();   
      
  // };

  // (function(d, s, id){
  //    var js, fjs = d.getElementsByTagName(s)[0];
  //    if (d.getElementById(id)) {return;}
  //    js = d.createElement(s); js.id = id;
  //    js.src = "https://connect.facebook.net/en_US/sdk.js";
  //    fjs.parentNode.insertBefore(js, fjs);
  //  }(document, 'script', 'facebook-jssdk'));

  // function facebookLogin() {
  //   FB.getLoginStatus(function(response) {
  //         if (response.status === 'connected') {
  //             postFbToken(response.authResponse.accessToken);
  //         } else {
  //           FB.login(function(response){
  //             if (response.status === 'connected') {
  //                     postFbToken(response.authResponse.accessToken);
  //                 }
  //             }, {
  //                 scope: 'email,public_profile',
  //                 return_scopes: true
  //             });
  //         }
  //     });
  // }

  function postFbToken(token) {
    tscom.ajax(tscom.makeUrl('Login', 'authFacebook'), {token: token}, function(t) {
      if (t.status == 0) {
        alert(t.msg);
        return ;
      }
      document.location.reload();
    }, {tsOutMode: 'json'});
  }
  
</script>


<script type="text/javascript">
    var moveToLogin = false;
</script>




<?php include('includes/footer.php'); ?>