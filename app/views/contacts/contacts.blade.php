@extends('main.master')

@section('contacts_content')
<div class="container-fluid content" style="margin: 50px; padding: 0;">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
        <h3>Stay in Touch</h3>
        <div class="map container-fluid" style="padding: 0">
            <figure class="img_inner fleft">
                <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </figure>

        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0; margin-top: 20px">
            <address>
                <dl>
                    <dt>
                        8901 Marmora Road,<br>
                        Glasgow, D04 89GR.
                    </dt>
                    <dd><span>Freephone:</span>+1 800 559 6580</dd>
                    <dd><span>Telephone:</span>+1 800 603 6035</dd>
                    <dd><span>FAX:</span>+1 800 889 9898</dd>
                    <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                </dl>
            </address>
            <address class="mb0">
                <dl>
                    <dt>
                        9870 St Vincent Place,<br>
                        Glasgow, DC 45 Fr 45.
                    </dt>
                    <dd><span>Freephone:</span>+1 800 559 6580</dd>
                    <dd><span>Telephone:</span>+1 800 603 6035</dd>
                    <dd><span>FAX:</span>+1 800 889 9898</dd>
                    <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                </dl>
            </address>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
            <h3>Contact Us</h3>

            <form id="form">
                <div class="success_wrapper">
                    <div class="success">Contact form submitted!<br>
                        <strong>We will be in touch soon.</strong> </div></div>
                <fieldset>
                    <label class="name">
                        <input type="text" value="Name">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
                    <label class="email">
                        <input type="text" value="Email">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
                    <label class="name">
                        <input type="text" value="Subject">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid subject.</span><span class="empty error-empty">*This field is required.</span> </label>
                    <label class="message">
                        <textarea>Message</textarea>
                        <br class="clear">
                        <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                    <div class="clear"></div>
                    <div class="btns"><a data-type="reset" class="btn">Clear</a><div class="none"></div><a data-type="submit" class="btn">Send</a>
                        <div class="clear"></div>
                    </div></fieldset>
            </form>
        </div>

    </div>
</div>


<!--<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 05, 2013!</div>
  <div class="container_12">
    <div class="grid_9">
      <h3>Stay in Touch</h3>
            <div class="map">
            <figure class="img_inner fleft">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
              <address>
                            <dl>
                                <dt>
                                    8901 Marmora Road,<br>
                                    Glasgow, D04 89GR.
                                </dt>
                                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                <dd><span>FAX:</span>+1 800 889 9898</dd>
                                <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                            </dl>
                         </address>
                         <address class="mb0">
                            <dl>
                                <dt>
                                    9870 St Vincent Place,<br>
Glasgow, DC 45 Fr 45.
                                </dt>
                                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                <dd><span>FAX:</span>+1 800 889 9898</dd>
                                <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                            </dl>
                         </address>
          </div>
    </div>
    <div class="grid_3">
      <h3>Contact Us</h3>
      <form id="form">
      <div class="success_wrapper">
      <div class="success">Contact form submitted!<br>
      <strong>We will be in touch soon.</strong> </div></div>
      <fieldset>
      <label class="name">
      <input type="text" value="Name">
      <br class="clear">
      <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="email">
      <input type="text" value="Email">
      <br class="clear">
      <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="name">
      <input type="text" value="Subject">
      <br class="clear">
      <span class="error error-empty">*This is not a valid subject.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="message">
      <textarea>Message</textarea>
      <br class="clear">
      <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
      <div class="clear"></div>
      <div class="btns"><a data-type="reset" class="btn">Clear</a><div class="none"></div><a data-type="submit" class="btn">Send</a>
      <div class="clear"></div>
      </div></fieldset></form>
    </div>
    <div class="clear"></div>
  </div>
</div>-->
@stop

<!--@section('contacts_content')
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_2 prefix_2">
      <ul>
        <li><a href="#">FAQS Page</a></li>
        <li><a href="#">People Say</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Useful links</a></li>
        <li><a href="#">Partners</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Insurance</a></li>
        <li><a href="#">Family Travel</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <h4>Contact Us:</h4>
      TEL: 1-800-234-5678<br><a href="#">info@demolink.org</a>
     
    </div>
    <div class="clear"></div>
    </div>
  </div>
@stop-->
