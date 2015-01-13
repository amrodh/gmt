<?php include('header.php'); ?>

      

<div class="panel panel-default" style="margin: 5px 0px; border-color: #428bca; border-width: 2px; width: 970px;">
        <div class="panel-heading" style="text-align: center; background-color: white; border-color: #428bca; border-width: 1px; padding-bottom: 0px;">
          <label style="font-size: 1.2em;">CONTACT FORM<br/><small>All fields marked with <label style="color: red;">*</label> are required.</small></label>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
              <div class="fieldWrapper">
                  
              </div>
          
        </div>
        <form action="/contact/" method="post">
              <input type='hidden' name='csrfmiddlewaretoken' value='W3xNLZXAa4nFmD9ZTOwxidK9MKtsaMxo' />
        <div class="panel-body" style="background-color: #eee;">
          <label style="color: #428bca; text-align: center; display: block;">Contact Information</label>

          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Name</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 162px;">Title</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 162px;">First Name<label style="color: red;">*</label></label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 162px;">Last Name<label style="color: red;">*</label></label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 160px;">
                  <!-- <select>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Miss</option>
                  </select> -->
                  <input id="id_title" maxlength="100" name="title" type="text" />
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 160px;">
                  <!-- <input type="text" placeholder="first name"> -->
                  <input id="id_firstname" maxlength="100" name="firstname" type="text" />
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <input type="text" placeholder="first name"> -->
                  <input id="id_lastname" maxlength="100" name="lastname" type="text" />
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Country</label></li>

              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Nationality<label style="color: red;">*</label></label></li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 170px;"></div></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Residence<label style="color: red;">*</label></label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; height: 20px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
            
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <select style="width: 150px;">
                    <option>Egypt</option>
                    <option>Mrs.</option>
                    <option>Miss</option>
                  </select> -->
                  <input id="id_nationality" maxlength="100" name="nationality" type="text" />
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 170px;">
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <select style="width: 150px;">
                    <option>Egypt</option>
                    <option>Mrs.</option>
                    <option>Miss</option>
                  </select> -->
                  <input id="id_residence" maxlength="100" name="residence" type="text" />
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Address</label></li>
             
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Street</label></li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 170px;"></div></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">City</label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 320px;">
                  <!-- <input type="text" placeholder="street" style="width: 300px;"> -->
                  <input id="id_street" maxlength="100" name="street" type="text" />
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <input type="text" placeholder="city"> -->
                  <input id="id_city" maxlength="100" name="city" type="text" />
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Contact Numbers</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Phone</label></li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 170px;"></div></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Mobile</label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <input type="text" placeholder="phone"> -->
                  <input id="id_phone" maxlength="100" name="phone" type="text" />
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 170px;">
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <!-- <input type="text" placeholder="mobile"> -->
                  <input id="id_mobile" maxlength="100" name="mobile" type="text" />
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Email Address<label style="color: red;">*</label></label></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 300px;">
                  <!-- <input type="text" placeholder="email" style="width: 300px;"> -->
                  <input id="id_email" maxlength="254" name="email" type="text" />
                </div>
              </li>
            </ul>
          </div>


          <!-- <div style="padding: 0px 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><div style="width: 400px;"><input type="checkbox"> I would like to recieve Emails and newsletter from GMT</div></li>
            </ul>
          </div> -->
          <br/>
          <label style="color: #428bca; text-align: center; display: block;">Request Information</label>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">To reach our departments<label style="color: red;">*</label></label></li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;">
                <!-- <select style="width:300px;">
                  
                  <option>Select</option>
                  
                  

                </select> -->
                <input id="id_department" maxlength="100" name="department" type="text" />
              </div></li>
            </ul>
          </div>
          <br/>

          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Subject</label></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 300px;">
                  <!-- <input type="text" placeholder="subject" style="width: 300px;"> -->
                  <input id="id_subject" maxlength="100" name="subject" type="text" />
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">How did you know about us?</label></li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 300px;">
                <!-- <select style="width: 300px;">
                  
                  <option>Select</option>
                  
                  
                </select> -->
                <input id="id_know_about_us" maxlength="100" name="know_about_us" type="text" />
              </div></li>
            </ul>
          </div>
          <br/>
          <div style="padding: 0px 20px; margin: 0px; height: 20px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label>Please enter any special requests or needs you may have in the box below.</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><!-- <textarea rows="6" style="width: 750px;"></textarea> -->
                <textarea cols="40" id="id_body" name="body" rows="10">
</textarea>
              </li>
            </ul>
          </div>
          <br/>
          <!-- <button type="button" style="width: 150px; background-color: #428bca; color: white; margin:0 auto; display:block;">SUBMIT</button> -->
          <input type="submit" name="submit" value="SUBMIT" />
        </div>
      </form>
      </div>

      
<?php include('footer.php'); ?>

