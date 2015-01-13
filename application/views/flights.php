<?php include('header.php'); ?>
      

<div class="panel panel-default" style="margin: 5px 0px; border-color: #428bca; border-width: 2px; width: 970px;">
        <div class="panel-heading" style="text-align: center; background-color: white; border-color: #428bca; border-width: 1px; padding-bottom: 0px;">
          <label style="font-size: 1.2em;">FLIGHT FORM<br/><small>All fields marked with <label style="color: red;">*</label> are required.</small></label>
        </div>
        <div class="panel-body" style="background-color: #eee; padding-left:60px;">
          <label style="color: #428bca; text-align: center; display: block; margin-left:-20px;">FIND A FLIGHT</label>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="padding: 0px; margin: 0px;"><label style="width: 220px;">Flight Type</label></li>
              <li style="padding: 0px; margin: 0px;"><label style="width: 162px;"><input type="checkbox"> Round-trip</label></li>
              <li style="padding: 0px; margin: 0px;"><label style="width: 162px;"><input type="checkbox"> One-way</label></li>
              <li style="padding: 0px; margin: 0px;"><label style="width: 162px;"><input type="checkbox"> Multi destination</label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">From</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>City or Airport</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>


          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px; ">To</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>City or Airport</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px; ">Departure Date</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>DD/MM/YYYY</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 50px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Anytime</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Return Date</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>DD/MM/YYYY</option>
                    <option>Cairo</option>
                    <option>Baranquilla</option>
                  </select>
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 50px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Anytime</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">My dates are flexible!</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <input type="checkbox"> (-/+ 3days)
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 220px;">Passengers</label></li>

              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Adult(16-65)</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Child(2-12)</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 150px;">Infant(0-2)</label></li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">

              <li style="margin: 0px; padding: 0px;"><div style="width: 220px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 100px;">
                  <select style="width: 100px;">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 35px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 100px;">
                  <select style="width: 100px;">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 35px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 100px;">
                  <select style="width: 100px;">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <br/>
          <label style="color: #428bca; text-align: center; display: block; margin-left:-20px;">ADDITIONAL OPTIONS</label>
          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Refundable Flights</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Show all fares</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Preferred Airlines</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Airlines</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Airlines</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>Airlines</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>

          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px;">Maximum Price</label></li>
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px; ">Cabin Class</label></li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px; width: 970px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 100px; height:20px;">
                  <input style="width: 100px; height:20px;" type="text">
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 50px; margin: 0px;">
                  <label style="width: 40px; font-size: 11px; color:#428bca">EGP</label>
                </div>
              </li>
              <li style="margin: 0px; padding: 0px;"><div style="width: 120px;"></div></li>
              <li style="margin: 0px; padding: 0px;">
                <div style="width: 150px;">
                  <select style="width: 150px;">
                    <option>No Preference</option>
                    <option>Cairo</option>
                    <option>Barranquilla</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <div style="padding: 0px 20px; margin: 0px;">
            <ul class="list-inline" style="margin: 0px; padding: 0px;">
              <li style="margin: 0px; padding: 0px;"><label style="width: 300px; "><input type="checkbox"> Direct Flights Only</label></li>
            </ul>
          </div>
          <br/>
          <button type="button" style="width: 150px; background-color: #428bca; color: white; margin:0 auto; display:block;">SUBMIT</button>
          <br/>
        </div>
      </div>
      

     <?php include('footer.php'); ?>