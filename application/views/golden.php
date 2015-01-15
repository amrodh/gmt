<!DOCTYPE html>
<html>
<head>


	<link href="<?= base_url(); ?>application/static/css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="<?= base_url(); ?>application/static/js/jquery-1.10.2.js"></script>
	<script src="<?= base_url(); ?>application/static/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="http://malsup.github.io/jquery.blockUI.js"></script>
	<script src="<?= base_url(); ?>application/static/js/airports.js"></script> 

 <script>
$(function() {
$("#tabs").tabs();
$( "#air_dep_port" ).autocomplete({ source:data});
$( "#air_arr_port" ).autocomplete({ source:data});

$( "#hotel_city_port" ).autocomplete({source:data});
$( "#car_city_port" ).autocomplete({ source:data });
$( "#car_city_ret" ).autocomplete({source:data});

	
$("#flight_dep_calendar").datepicker({dateFormat: 'dd/mm/yy' ,
    maxDate:'+12m',minDate:'0d', 
     rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus',
    onClose: function(date) { 
    if ($('#flight_arr_calendar').val()<date) $('#return_date').val(date);
    var data=date.split("/"); 
    $('#flight_arr_calendar').datepicker('option', 'minDate', new Date(data[2],data[1]-1,data[0]));
    }
    });

$('#cal_search').change(function(){
     cb = $(this);
     cb.val(cb.prop('checked'));
 });
	
$("#flight_arr_calendar").datepicker({dateFormat: 'dd/mm/yy' , 
    maxDate:'+12m',minDate:'0d',rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus'});

$("#flight_dep_calendar").datepicker("setDate", "7");
$("#flight_arr_calendar").datepicker("setDate", "14");	


$("#hotel_dep_calendar").datepicker({dateFormat: 'dd/mm/yy' ,
    maxDate:'+12m',minDate:'0d', 
     rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus',
    onClose: function(date) { 
    if ($('#hotel_arr_calendar').val()<date) $('#return_date').val(date);
    var data=date.split("/"); 
    $('#hotel_arr_calendar').datepicker('option', 'minDate', new Date(data[2],data[1]-1,data[0]));
    }
    });

	
	$("#car_dep_calendar").datepicker({dateFormat: 'dd/mm/yy' ,
    maxDate:'+12m',minDate:'0d', 
     rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus',
    onClose: function(date) { 
    if ($('#car_arr_calendar').val()<date) $('#return_date').val(date);
    var data=date.split("/"); 
    $('#car_arr_calendar').datepicker('option', 'minDate', new Date(data[2],data[1]-1,data[0]));
    }
    });

	
$("#car_arr_calendar").datepicker({dateFormat: 'dd/mm/yy' , 
    maxDate:'+12m',minDate:'0d',rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus'});

$("#car_dep_calendar").datepicker("setDate", "7");
$("#car_arr_calendar").datepicker("setDate", "14");	

	
$("#hotel_arr_calendar").datepicker({dateFormat: 'dd/mm/yy' , 
    maxDate:'+12m',minDate:'0d',rangeSelect: false, numberOfMonths: 2, 
    showOn: 'focus'});
	
$("#hotel_dep_calendar").datepicker("setDate", "7");
$("#hotel_arr_calendar").datepicker("setDate", "14");	
	
$("#flight_search_button").button();
$("#hotel_search_button").button();
$("#car_search_button").button();


	jQuery('#flight_search_button').click(function(){
		
	var flight_type=jQuery('#flight_type').val();
	var from_str=jQuery('#air_dep_port').val().substring(1,4);
	var to_str=jQuery('#air_arr_port').val().substring(1,4);
	var s_dep_date=jQuery('#flight_dep_calendar').val();
	//s_dep_date= s_dep_date.replace('/','%2F');
	var s_arr_date=jQuery('#flight_arr_calendar').val();
	//s_arr_date=s_arr_date.replace('/','%2F');
	s_dep_time=jQuery('#dep_time').val();
	s_arr_time=jQuery('#arr_time').val();
	var cal_search=jQuery('#cal_search').val();
	//var $cb=$(this); $cb.val( ($cb.prop('checked')+'').toUpperCase() ); 
	var adt=jQuery('#adult').val();
	var chd=jQuery('#child').val();
	var inf=jQuery('#infant').val();
	
	jQuery.blockUI({ message: '<h1 style=\"padding:20px;font-size:20px;\">Plase wait...<br><br>We are searching your flights</h1>' });
	window.location.replace("https://staging.epower.amadeus.com/goldenmarriott/#FlightType="+flight_type+
	"&From="+from_str+"&QFrom=A&To="+to_str+"&QTo=A&DepartureDate="+s_dep_date+"&DepartureTime="+s_dep_time+"&ReturnDate="+s_arr_date+"&ReturnTime="+s_arr_time+"&AdtCount="+adt+"&ChdCount="+chd+"&InfCount="+inf+"&IsCalendarSearch="+cal_search+"&Culture=en-GB&Method=Search");
	
	});

	
	jQuery('#hotel_search_button').click(function(){

	var h_from=jQuery('#hotel_city_port').val().substring(1,4);
	
	
	var h_dep_date=jQuery('#hotel_dep_calendar').val();
	h_dep_date= h_dep_date.replace('/','%2F');
	h_dep_date= h_dep_date.replace('/','%2F');
	var h_arr_date=jQuery('#hotel_arr_calendar').val();
	h_arr_date=h_arr_date.replace('/','%2F');
	h_arr_date=h_arr_date.replace('/','%2F');
	
	var h_occ=jQuery('#hotel_occupancy').val();
	var h_cat=jQuery('#hotel_category').val();
	var h_loc=jQuery('#hotel_location').val();
		
	jQuery.blockUI({ message: '<h1 style=\"padding:20px;font-size:20px;\">Proszę czekać...<br><br>Trwa wyszukiwanie hotelu</h1>' });
	window.location.replace("https://staging.epower.amadeus.com/goldenmarriott/portals/goldenmarriott/hotelsearch.aspx?IsExternalAccess=true&Culture=en-GB&External_HotelSearchTypeByProvider=AmadeusAndExtProviders&External_HotelSearch_City="+h_from+"&External_HotelSearch_CheckInDate="+h_dep_date+"&External_HotelSearch_CheckOutDate="+h_arr_date+"&External_HotelSearch_Occupancy="+h_occ+"&External_HotelSearch_Category="+h_cat+"&External_HotelSearch_AreaLocation="+h_loc+"&Affcode=smoothness");

	
	});
	

		jQuery('#car_search_button').click(function(){
		
	
		
	var c_from=jQuery('#car_city_port').val().substring(1,4);
	var c_to=jQuery('#car_city_ret').val().substring(1,4);

	if (c_to=="") c_to=c_from;
	
	var c_dep_date=jQuery('#car_dep_calendar').val();
	c_dep_date= c_dep_date.replace('/','%2F');
	c_dep_date= c_dep_date.replace('/','%2F');
	var c_arr_date=jQuery('#car_arr_calendar').val();
	c_arr_date=c_arr_date.replace('/','%2F');
	c_arr_date=c_arr_date.replace('/','%2F');
	var c_dep_time=jQuery('#car_dep_time').val();
	var c_arr_time=jQuery('#car_arr_time').val();
	

	//var c_v_type=jQuery('#car_vehicle_type option:selected').val();
	//var c_v_class=jQuery('#car_vehicle_class option:selected').val();
//"&External_CarSearch_VehicleType="+c_v_type+"&External_CarSearch_VehicleClassType="+c_v_class+"	
		
		
	jQuery.blockUI({ message: '<h1 style=\"padding:20px;font-size:20px;\">Proszę czekać...<br><br>Trwa wyszukiwanie auta</h1>' });
	window.location.replace("https://staging.epower.amadeus.com/goldenmarriott/portals/goldenmarriott/carSearch.aspx?IsExternalAccess=true&External_CarSearch_PickUpLocation="+c_from+"&External_CarSearch_DropOffLocation="+c_to+"&External_CarSearch_PickupDate="+c_dep_date+"&External_CarSearch_PickupTime="+c_dep_time+"&External_CarSearch_DropOffDate="+c_arr_date+"&External_CarSearch_DropOffTime="+c_arr_time+"&External_CarSearch_VehicleType=&External_CarSearch_VehicleClassType=&External_CarSearch_TransmissiomType=&External_CarSearch_HasAirCondition=&External_CarSearch_MileageChargeType=&Affcode=smoothness");
// 							
	
	});
	
		
});
function addTimeOptionList(p_Type)
{
var prefixStr='<option selected value="00:01">NoPreference</option>'+
			'<option value="MORNING">Morning</option>'+
			'<option value="AFTERNOON">AFTERNOON</option>'+
			'<option value="EVENING">EVENING</option>';
var selectedItem="";
if(p_Type=="c")
{prefixStr="";
selectedItem=" selected";
}
 
var returnStr = prefixStr+
			'<option value="00:00">00:00</option>'+
			'<option value="01:00">01:00</option>'+
			'<option value="02:00">02:00</option>'+
			'<option value="03:00">03:00</option>'+
			'<option value="04:00">04:00</option>'+
			'<option value="05:00">05:00</option>'+
			'<option value="06:00">06:00</option>'+
			'<option value="07:00">07:00</option>'+
			'<option value="08:00">08:00</option>'+
			'<option value="09:00" '+ selectedItem + '>09:00</option>'+
			'<option value="10:00">10:00</option>'+
			'<option value="11:00">11:00</option>'+
			'<option value="12:00">12:00</option>'+
			'<option value="13:00">13:00</option>'+
			'<option value="14:00">14:00</option>'+
			'<option value="15:00">15:00</option>'+
			'<option value="16:00">16:00</option>'+
			'<option value="17:00">17:00</option>'+
			'<option value="18:00">18:00</option>'+
			'<option value="19:00">19:00</option>'+
			'<option value="20:00">20:00</option>'+
			'<option value="21:00">21:00</option>'+
			'<option value="22:00">22:00</option>'+
			'<option value="23:00">23:00</option>'
			document.write(returnStr)
}
</script>

<style>
#tabs {width:293px;
	height:325px;}

#tabs{
	font-size:55%;
}

</style>

</head>
<body>

<div id="tabs">
<ul>
<li><a href="#tabs-1">Flight Search</a></li>
<li><a href="#tabs-2">Hotel Search</a></li>
<li><a href="#tabs-3">Car Search</a></li>

</ul>

<div id="tabs-1">

<div id="flight_booking">
<h1>Book your trip</h1>
<table width="100%" class="booking_table">
<tr><td colspan="3">
<input type="radio" id="flight_type" value="roundtrip" checked>Round Trip &nbsp;&nbsp;
<input type="radio" id="flight_type" value="OneWay">One Way <br/><br />
</td></tr>
<tr><td>From<br>
<input type="text" class="text_medium" id="air_dep_port">
   <div class="ac_results custom1" style="display: none;">
      <ul style="overflow: auto; max-height: 180px;">
      </ul>
   </div>

</td><td>Departure Date<br><input type="text" class="text_medium" id="flight_dep_calendar"></td>
<!--<td>Departure Time<br><input type="text" class="text_short"></td></tr>-->
</tr><tr><td></td><td>Departure Time<br><select id="dep_time"><script>addTimeOptionList('f')</script></select></td></tr>
<tr><td>To<br><input type="text" class="text_medium" id="air_arr_port"></td>
<td>Return Date<br><input type="text" class="text_medium" id="flight_arr_calendar"></td>
<!--<td>Return Time<br><input type="text" class="text_short"></td></tr>-->
</tr><tr><td></td><td>Return Time <br><select id="arr_time"><script>addTimeOptionList('f')</script></select></td></tr>
   
<tr><td>Traveller<br/>
<select class="small_select" id="adult">
<option value="1">1 adult</option>
<option value="2">2 adult</option>
<option value="3">3 adult</option>
<option value="4">4 adult</option>
<option value="5">5 adult</option>
<option value="6">6 adult</option>
<option value="7">7 adult</option>
<option value="8">8 adult</option>
<option value="9">9 adult</option>
</select>

</td><td>(2-18 years)<br/>
<select  class="small_select" id="child">
<option value="0">0 child</option>
<option value="1">1 child</option>
<option value="2">2 children</option>
<option value="3">3 children</option>
<option value="4">4 children</option>
<option value="5">5 children</option>
<option value="6">6 children</option>
<option value="7">7 children</option>
<option value="8">8 children</option>
<option value="9">9 children</option>
</select>
</td>
</tr><td></td>
<td>(0-2 year)<br/>
<select  class="small_select" id="infant">
<option value="0">0 infant</option>
<option value="1">1 infant</option>
<option value="2">2 infants</option>
<option value="3">3 infants</option>
<option value="4">4 infants</option>
<option value="5">5 infants</option>
<option value="6">6 infants</option>
<option value="7">7 infants</option>
<option value="8">8 infants</option>
<option value="8">9 infants</option>
</select>
</td></tr>


<tr><td><a href="https://staging.epower.amadeus.com/goldenmarriott/Portals/goldenmarriott/FlightFareSearch.aspx?Affcode=smoothness">Advance Search</a></td><td>My dates are flexible!<br><input type="checkbox" id="cal_search" value="FALSE"/> (+/1 3days)</td>
<td class="submit_tr"><br /><button id="flight_search_button">Search Flights</button></br>


</td></tr>
</table>
</div>


</div>
<div id="tabs-2">

<div id="hotel_booking">
<h1>Hotel Reservation</h1>
<table width="100%" class="booking_table">
<tr><td colspan="3"></td></tr>
<tr><td>City<br>
<input type="text" class="text_medium" id="hotel_city_port">
   <div class="ac_results custom1" style="display: none;">
      <ul style="overflow: auto; max-height: 180px;">
      </ul>
   </div>

</td><td>Check-in Date<br>
<input type="text" class="text_medium" id="hotel_dep_calendar">
</td>
</tr><tr><td>Room Type<br>
    <select name="hotel_occupancy">
        <option value="1" selected="selected">Single</option>
        <option value="2">Double</option>
    </select>
</td></tr>


<tr><td>Hotel Rating<br>
   <select name="hotel_category">
    <option value="" selected="selected">Any</option>
    <option value="F">First Class</option>
    <option value="L">Luxury</option>
    <option value="S">Standard</option>
    <option value="T">Budget</option>
   </select>

</td><td>Check-out<br><input type="text" class="text_medium" id="hotel_arr_calendar">
</td>
</tr><tr>
<td>Location<br>
 <select name="hotel_location">
    <option value="" selected="selected">Select</option>
    <option value="A">Airport</option>
    <option value="D">City Center</option>
    <option value="E">East</option>
    <option value="N">North </option>
    <option value="R">Resort</option>
    <option value="S">South</option>
    <option value="W">West</option>
 </select>
</td></tr>

<tr><td colspan="2" class="submit_tr"><a href="https://staging.epower.amadeus.com/goldenmarriott/Portals/goldenmarriott/hotelsearch.aspx?Affcode=smoothness">Advance Search</a></td>
<td class="submit_tr"><button id="hotel_search_button">Search Hotels</button></td>
</tr>
</table>
</div>

</div>
<div id="tabs-3">

<div id="car_booking">
<h1>Book a car</h1>
<table width="100%" class="booking_table">
<tr><td colspan="3">
</td></tr>
<tr><td>Pick-up Location<br>
<input type="text" class="text_medium" id="car_city_port">
   <div class="ac_results custom1" style="display: none;">
      <ul style="overflow: auto; max-height: 180px;">
      </ul>
   </div>

</td><td>Pick-up Date<br>
<input type="text" class="text_medium" id="car_dep_calendar">
</td>
</tr><tr><td></td>
<td>Pick-up Time<br>
			<select id="car_dep_time">
			<option selected value="">Any</option>
			<option value="00:00">00:00</option>
			<option value="01:00">01:00</option>
			<option value="02:00">02:00</option>
			<option value="03:00">03:00</option>
			<option value="04:00">04:00</option>
			<option value="05:00">05:00</option>
			<option value="06:00">06:00</option>
			<option value="07:00">07:00</option>
			<option value="08:00">08:00</option>
			<option value="09:00">09:00</option>
			<option value="10:00">10:00</option>
			<option value="11:00">11:00</option>
			<option value="12:00">12:00</option>
			<option value="13:00">13:00</option>
			<option value="14:00">14:00</option>
			<option value="15:00">15:00</option>
			<option value="16:00">16:00</option>
			<option value="17:00">17:00</option>
			<option value="18:00">18:00</option>
			<option value="19:00">19:00</option>
			<option value="20:00">20:00</option>
			<option value="21:00">21:00</option>
			<option value="22:00">22:00</option>
			<option value="23:00">23:00</option>
			</select>


</td></tr>


<tr><td>Drop-off Location<br>
<input type="text" class="text_medium" id="car_city_ret">
</td><td>Drop-off Date<br>
<input type="text" class="text_medium" id="car_arr_calendar">
</td>
</tr><tr><td></td>
<td>Drop-off Time<br />
<select id="car_arr_time">
			<option selected value="">Any</option>
			<option value="00:00">00:00</option>
			<option value="01:00">01:00</option>
			<option value="02:00">02:00</option>
			<option value="03:00">03:00</option>
			<option value="04:00">04:00</option>
			<option value="05:00">05:00</option>
			<option value="06:00">06:00</option>
			<option value="07:00">07:00</option>
			<option value="08:00">08:00</option>
			<option value="09:00">09:00</option>
			<option value="10:00">10:00</option>
			<option value="11:00">11:00</option>
			<option value="12:00">12:00</option>
			<option value="13:00">13:00</option>
			<option value="14:00">14:00</option>
			<option value="15:00">15:00</option>
			<option value="16:00">16:00</option>
			<option value="17:00">17:00</option>
			<option value="18:00">18:00</option>
			<option value="19:00">19:00</option>
			<option value="20:00">20:00</option>
			<option value="21:00">21:00</option>
			<option value="22:00">22:00</option>
			<option value="23:00">23:00</option>
			</select>


</td></tr>

<tr><td>Vehicle Type<br>
<select name="car_vehicle_type">
                            <option value="" selected="selected">Select</option>
                            <option value="J">ALL Terrain</option>
                            <option value="T">Convertible</option>
                            <option value="D">Four Door Car</option>
                            <option value="F">Four Wheel Drive</option>

                            <option value="L">Limousine</option>
                            <option value="P">PickUp</option>
                            <option value="R">Recreational</option>
                            <option value="X">Special</option>
                            <option value="S">Sport</option>
                            <option value="K">Truck</option>

                            <option value="B">Two Door Car</option>
                            <option value="C">Two Or Four Door Car</option>
                            <option value="V">Van</option>
                            <option value="W">Wagon</option>
                        </select>
</td><td colspan="2">Vehicle Class <br />
						<select name="car_vehicle_class">
                            <option value="" selected="selected">Select</option>
                            <option value="C">Compact</option>
                            <option value="E">Economy</option>
                            <option value="F">FullSize</option>

                            <option value="I">Intermediate</option>
                            <option value="L">Luxury</option>
                            <option value="M">Mini</option>
                            <option value="P">Premium</option>
                            <option value="X">Special</option>
                            <option value="S">Standard</option>

                        </select></td></tr>
<tr><td colspan="2" class="submit_tr"><a href="https://staging.epower.amadeus.com/goldenmarriott/Portals/goldenmarriott/carsearch.aspx?Affcode=smoothness">More Options</a></td><td><button id="car_search_button">Search cars</button>

</td></tr>
</table>
</div>

</div>
</div>


</body>
</html>