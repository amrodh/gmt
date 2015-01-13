<?php include('header.php'); ?>
  <div style="height: 620px; width: 970px;">
      <div class="panel panel-default" id="search_panel" style="border-color: #428bca; border-width: 1px; width: 310px; height: 345px; float: left; margin: 4px 0px 0px 0px;">
        <div class="panel-body" style="background-color: white;  height: 100%; padding: 0px;">
          <div id="content">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs" style="font-size: 0.9em; padding-bottom: 0px; margin-bottom: 0px;">
              <li class="active" style="width: 85px; height: 25px; "><a href="#holidays" data-toggle="tab" style="height: 25px;  padding-bottom:0px; padding-top:5px; padding-right:15px; padding-left:15px; margin-bottom:0px; ">Holidays</a></li> <!-- background-color:#B6C2FE if selected -->
              <li style="width: 65px; height: 25px;"><a href="#flights" data-toggle="tab" style="height: 25px; padding: 5px 12px;">Flights</a></li>
              <li style="width: 65px; height: 25px;"><a href="#hotels" data-toggle="tab" style="height: 25px; padding: 5px 12px;">Hotels</a></li>
              <li style="width: 93px; height: 25px;"><a href="#cars" data-toggle="tab" style="height: 25px; padding: 5px 30px;">Cars</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content"  style="margin-top:0px; padding: 0px 13px;">
              <div class="tab-pane active" id="holidays">
                <div id="pane-header" style="padding-top:5px; padding-bottom:5px; margin-left:-13px; width:307px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-image: -webkit-gradient(  linear,  left bottom,  left top,  color-stop(0.12, #F2F3F7),  color-stop(1, #B2BFFF));background-image: -o-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -moz-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -webkit-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -ms-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: linear-gradient(to top, #F2F3F7 12%, #B2BFFF 100%);">
                  <span style="padding-left:15px; font-size:18px;"><img src="/static/img/plane.png" style="width:30px; height 30px;  border: 2px solid grey;  border-radius:5px;"/> <img src="/static/img/bed.png" style="width:30px; height 30px;  border: 2px solid grey; border-radius:5px; margin-right:5px;"/> Holiday Search</span>
                </div>
                <form role="form">
                  <div class="form-group" style="padding: 0px; margin: 0px;">
                    <label style="padding: 0px 0px 0px 5px; margin: 0px;">I Am</label>
                    <select id="select01" class="form-control" style="width: 280px; height: 20px; padding: 0px; margin: 0px;">
                      <option>Mr.</option>
                      <option>Ms.</option>
                      <option>Mrs.</option>
                    </select>
                  </div>
                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">Country</label></li>
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">City</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Egypt</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <div style="width: 120px;" style="padding: 0px; margin: 0px;">
                          <select id="select03" class="form-control" style="height: 20px;  padding: 0px; margin: 0px;">
                            <option>Cairo</option>
                            <option>Alex</option>
                            <option>Ismailia</option>
                            <option>Suez</option>
                            <option>Port Said</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">Travel Date</label></li>
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">Nights</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <input type="text" class="form-control" placeholder="DD/MM/YYYY" style="height: 20px; width:100px; margin: 0px;">
                        </div>
                      </li>
                      <li>
                        <div style="width: 120px; margin: 0px;">
                          <select id="select03" class="form-control" style="height: 20px; width:60px;  padding: 0px;margin: 0px;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <br/>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="margin: 0px;"><label style="width: 120px;">Interests</label></li>
                      <li style="margin: 0px;"><label style="width: 120px;">Holiday Type</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Egypt</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <select id="select03" class="form-control" style="height: 20px; width:155px; padding: 0px; margin: 0px;">
                            <option>Exotic</option>
                            <option>Adventure</option>
                            <option>Honeymoon</option>
                            <option>Chill</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="form-group" style="margin-top: 5px; margin-bottom: 0px;">
                    <label style="padding: 0px 0px 0px 4px; margin: 0px;">Budget (L.E.)</label>
                    <input type="text" class="form-control" placeholder=""  style="height: 20px; width: 120px;">
                  </div>
                  <button type="button" style="float: right; height: 25px; width: 80px; padding-top:3px">SEARCH</button>
                </form>
              </div>
              <div class="tab-pane" id="flights">
                <div id="pane-header" style="padding-top:5px; padding-bottom:5px; margin-left:-13px; width:307px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-image: -webkit-gradient(  linear,  left bottom,  left top,  color-stop(0.12, #F2F3F7),  color-stop(1, #B2BFFF));background-image: -o-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -moz-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -webkit-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -ms-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: linear-gradient(to top, #F2F3F7 12%, #B2BFFF 100%);">
                  <span style="padding-left:15px; font-size:18px;"><img src="/static/img/plane.png" style="width:30px; height 30px;  border: 2px solid grey;  border-radius:5px;"/> <img src="/static/img/bed.png" style="width:30px; height 30px;  border: 2px solid grey; border-radius:5px; margin-right:5px;"/> Flight Search</span>
                </div>
                <form role="form">
                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">From</label></li>
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">To</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Egypt</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <div style="width: 120px;" style="padding: 0px; margin: 0px;">
                          <select id="select03" class="form-control" style="height: 20px;  padding: 0px; margin: 0px;">
                            <option>Cairo</option>
                            <option>Alex</option>
                            <option>Ismailia</option>
                            <option>Suez</option>
                            <option>Port Said</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">Departure Date</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <input type="text" class="form-control" placeholder="DD/MM/YYYY" style="height: 20px; width:100px; margin: 0px;">
                        </div>
                      </li>

                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 120px; padding: 0px; margin: 0px;">Return Date</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 120px; padding: 0px; margin: 0px;">
                          <input type="text" class="form-control" placeholder="DD/MM/YYYY" style="height: 20px; width:100px; margin: 0px;">
                        </div>
                      </li>

                    </ul>
                  </div>
                  <br/>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="margin: 0px;"><label style="width: 58px; font-size:11px;">Adult(12-65)</label></li>
                      <li style="margin: 0px;"><label style="width: 51px;font-size:11px;">Child(2-12)</label></li>
                      <li style="margin: 0px;"><label style="width: 53px;font-size:11px;">Infant(0-2)</label></li>
                      <li style="margin: 0px;"><label style="width: 53px;font-size:11px;">Senior(65+)</label></li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 40px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </li>
                      <li style="width:30px;"></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 40px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </li>
                      <li style="width:18px;"></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 40px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </li>
                      <li style="width:18px;"></li>

                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 40px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </li>

                    </ul>
                  </div>
                  <br/>
                  <a href="register.html" style="float: left;">More Search Options</a>
                  <button type="button" style="float: right; height: 25px; width: 80px; padding-top:3px">SEARCH</button>

                </form>
              </div>
              <div class="tab-pane" id="hotels">
                <div id="pane-header" style="padding-top:5px; padding-bottom:5px; margin-left:-13px; width:307px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-image: -webkit-gradient(  linear,  left bottom,  left top,  color-stop(0.12, #F2F3F7),  color-stop(1, #B2BFFF));background-image: -o-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -moz-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -webkit-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -ms-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: linear-gradient(to top, #F2F3F7 12%, #B2BFFF 100%);">
                  <!-- <span class="glyphicon glyphicon-plane" style="border-width:1px; border-color:black;">
                  <span class="glyphicon glyphicon-header"></span>
                  <span>Holiday Search</span> -->
                  <span style="padding-left:15px; font-size:18px;"><img src="/static/plane.png" style="width:30px; height 30px;  border: 2px solid grey;  border-radius:5px;"/> <img src="/static/img/bed.png" style="width:30px; height 30px;  border: 2px solid grey; border-radius:5px; margin-right:5px;"/> Hotel Search</span>

                </div>
                <form role="form">

                  <div style="padding: 0px; margin: 5px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">City</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Cairo</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Check-in Date</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>DD/MM/YYYY</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Check-out Date</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>DD/MM/YYYY</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <br/>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Area</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 100px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>City Center</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <br/>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Category</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 90px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1 Star</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Occupancy</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 100px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>single</option>
                            <option>double</option>
                            <option>triple</option>
                            <option>duplex</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <ul class="list-inline">
                    <li style="width: 190px;"><a href="register.html">More Search Options</a></li>
                    <li style="padding-left: 6px; margin-top:20px; padding-top:0px;">
                      <button type="button" style="height: 25px; width: 80px; padding-top:3px">SEARCH</button>
                    </li>
                  </ul>
                </form>
              </div>
              <div class="tab-pane" id="cars">
                <div id="pane-header" style="padding-top:5px; padding-bottom:5px; margin-left:-13px; width:307px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-image: -webkit-gradient(  linear,  left bottom,  left top,  color-stop(0.12, #F2F3F7),  color-stop(1, #B2BFFF));background-image: -o-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -moz-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -webkit-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: -ms-linear-gradient(top, #F2F3F7 12%, #B2BFFF 100%);background-image: linear-gradient(to top, #F2F3F7 12%, #B2BFFF 100%);">
                  <!-- <span class="glyphicon glyphicon-plane" style="border-width:1px; border-color:black;">
                  <span class="glyphicon glyphicon-header"></span>
                  <span>Holiday Search</span> -->
                  <span style="padding-left:15px; font-size:18px;"><img src="/static/img/plane.png" style="width:30px; height 30px;  border: 2px solid grey;  border-radius:5px;"/> <img src="/static/img/car.png" style="width:30px; height 30px;  border: 2px solid grey; border-radius:5px; margin-right:5px;"/> Car Search</span>

                </div>
                <form role="form">

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Pick-up Location</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Cairo</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Drop-off Location</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>Cairo</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Pick-up Date</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>DD/MM/YYYY</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Drop-off Date</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 180px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>DD/MM/YYYY</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Vehicle Type</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 100px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>City Center</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div style="padding: 0px; margin: 2px 0px 0px 0px;">
                    <ul class="list-inline" style="padding: 0px; margin: 0px;">
                      <li><label style="width: 60px; padding: 0px; margin: 0px; font-size:12px;">Vehicle Class Type</label></li>
                      <li style="padding: 0px; margin: 0px;">
                        <div style="width: 90px; padding: 0px; margin: 0px;">
                          <select id="select02" class="form-control" style="height: 20px; padding: 0px; margin: 0px;">
                            <option>1 Star</option>
                            <option>Colombia</option>
                            <option>France</option>
                            <option>China</option>
                            <option>Panama</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>

                <a href="register.html" style="float: left; margin-top: 10px;">More Search Options</a>
                <button type="button" style="float: right; height: 25px; width: 80px; padding-top:3px">SEARCH</button>

              </form>
            </div>
          </div>
          </div>
        </div>
      </div>


      <div class="panel panel-default" id="search_panel" style="border: 0px; width: 518px; height: 350px; float: left; margin: 0px 5px; padding: 0px;">
       <!--  <div class="panel-body" style="background-color: #eee; height: 270px; width: 100%; padding: 0px;">
          <div id="content" style="width: 100%; height:100%;">
            <div id="carousel-wrapper" style="width: 100%; height:100%;">
            <img id="shadow" src="img/gui/carousel_shadow.png" />
              <div id="carousel">
              </div>
            </div>
          </div>
        </div> -->
        <a href="<?= base_url(); ?>visit-egypt" title="" style="text-decoration:none;color:white;">
          <div class="panel-body" style="background-color: #eee;  height: 98%;margin-top:0%; padding: 5px;background-image: url('<?= base_url(); ?>application/static/images/egypt.jpg');background-size:100% 100%;">
          <div id="content">
            <!-- <img src="<?= base_url(); ?>application/static/images/egypt.jpg" class="box_icons"> -->
             <h3 style="height:30px;color: white;font-weight:bold;margin:0px;padding:1%;text-align: center;font-family: 'MyriadPro', Verdana, Tahoma;background:rgba(0, 0, 0, .6)">VISIT EGYPT</h3>
          </div>
        </div>
        </a>
        <!-- <div id="carousel" class="flexslider" style="margin: 5px; width: 100%; height: 80px;">
          <div id="thumbs-wrapper">
            <div id="thumbs" style="height:65px;">
                
                
                
              <a href="#s1" class="selected"><img src="images/slider1.jpg" /></a>
              <a href="#s2" style="width:64px;height:64px;"><img src="images/slider2.jpg" /></a>
              <a href="#s3" style="width:64px;height:64px;"><img src="images/slider3.jpg" /></a>
              <a href="#s4" style="width:64px;height:64px;"><img src="images/slider4.jpg" /></a>
              <a href="#s5" style="width:64px;height:64px;"><img src="images/slider1.jpg" /></a>
              <a href="#s6" style="width:64px;height:64px;"><img src="images/slider2.jpg" /></a>
              <a href="#s7" style="width:64px;height:64px;"><img src="images/slider3.jpg" /></a>
            </div>

          </div>
        </div> -->
      </div>

      <div class="panel panel-default" id="search_panel" style="border: 0px; width:13.6%;  height: 600px; float: right;">
        <div class="panel-body" style="height: 100%; padding: 10px 10px; background-color: #777;">
          <div id="content">
            
            
            
          </div>
        </div>
      </div>

      <div class="panel panel-default" id="search_panel" style="border: 0px; width: 310px;  height: 250px; float: left; margin-right: 5px;">
        <a href="<?= base_url(); ?>hajj" title="" style="text-decoration:none;color:white;">
          <div class="panel-body" style="background-color: #eee;  height: 100%; padding: 5px;background-image: url('<?= base_url(); ?>application/static/images/makka.jpg');background-size:100% 100%;">
          <div id="content">
            <!-- <img src="<?= base_url(); ?>application/static/images/egypt.jpg" class="box_icons"> -->
             <h3 style="height:30px;color: white;font-weight:bold;margin:0px;padding:1%;text-align: center;font-family: 'MyriadPro', Verdana, Tahoma;background:rgba(0, 0, 0, .6)">HAJJ & OMRAH</h3>
          </div>
        </div>
        </a>
      </div>

      <div class="panel panel-default" id="search_panel" style="border: 0px; width: 518px;  height: 250px; float: left; margin-right: 5px;">
        <a href="<?= base_url(); ?>international" title="" style="text-decoration:none;color:white;">
          <div class="panel-body" style="background-color: #eee;  height: 100%; padding: 5px;background-image: url('<?= base_url(); ?>application/static/images/international.jpg');background-size:100% 100%;">
          <div id="content">
           <!--  <img src="/static/img/globe.png" class="box_icons" style="width: 26px;height:24px;margin-top:-1px;"> -->
            <h3 style="height:30px;padding-top:2%;color: white;font-weight:bold;margin:0px;padding:1%;text-align: center;font-family: 'MyriadPro', Verdana, Tahoma;background:rgba(0, 0, 0, .6)">INTERNATIONAL TRAVEL</h3>
            
          </div>
        </div>
        </a>
        
      </div>
  </div>
  
  <?php include('footer.php'); ?>

     