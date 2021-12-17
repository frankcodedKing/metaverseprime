@extends("layouts.spacedcustomlayout")

@section("body")

<div class="page-title">
    <div class="container">
        <h1>Support</h1>
            <ul class="support-header">
                <li><i class="far fa-envelope"></i>
                    <h5>Mail Us</h5>
                    <p>{{isset($compd)? $compd->companyEmail: ""}}</p></li>

                    <li><i class="fas fa-phone-volume"></i>
                        <h5>Call Us</h5>
                            <p>{{isset($compd)? $compd->companyPhone: ""}}</p></li>
                            </ul>
                            </div></div>
            <div class="support-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                        <h4 class="support-h3">Contact Us</h4>


<script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>

<form method=post name=mainform action="{{route('postcontact')}}" onsubmit="return checkform()">
@csrf

<ul class="form-list row">
    <li class="col-md-6">
        <div class="input-box">
            <div class="iconed">
            <span class="icon"><i class="fas fa-user"></i></span>
                <input type="text" name="name" placeholder="Name or Username" value="" class="form-control"/>		</div>
                </div>	</li>

<li class="col-md-6">
        <div class="input-box">
            <div class="iconed">
            <span class="icon"><i class="fas fa-envelope"></i></span>				<input type="email" placeholder="Your Email" name="email" value="" class="form-control"/>									</div>
            </div>	</li>

<li class="col-md-12">
    <div class="input-box">
        <textarea name="message" style="min-height:150px;" placeholder="Message" class="form-control"></textarea>				  </div>  </li>


<li class="col-md-12">
    <button class="btn btn-blue" type="submit">Send</button></li>
    </ul>
</form>


</div>
<div class="col-md-5">
    <img src="images/support.svg" class="img-responsive"/>
    </div>
</div>
</div>
</div>

@endsection()
