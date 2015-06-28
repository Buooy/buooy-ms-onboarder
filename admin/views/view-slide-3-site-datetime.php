<h2 id="modalTitle"><img src="<?php echo $img_dir.'basic_alarm.svg'; ?>"><?php _e( 'Date & Time Settings', BMSO_TEXT_DOMAIN ); ?></h2>

<!-- Timezone -->
<div class="form-group">
	<label for="timezone_string"><?php _e( 'Timezone', BMSO_TEXT_DOMAIN ); ?></label>
	<div>
		<select id="timezone_string" name="timezone_string" aria-describedby="timezone-description">
		<optgroup label="Manual Offsets">
		<option value="UTC-12">UTC-12</option>
		<option value="UTC-11.5">UTC-11:30</option>
		<option value="UTC-11">UTC-11</option>
		<option value="UTC-10.5">UTC-10:30</option>
		<option value="UTC-10">UTC-10</option>
		<option value="UTC-9.5">UTC-9:30</option>
		<option value="UTC-9">UTC-9</option>
		<option value="UTC-8.5">UTC-8:30</option>
		<option value="UTC-8">UTC-8</option>
		<option value="UTC-7.5">UTC-7:30</option>
		<option value="UTC-7">UTC-7</option>
		<option value="UTC-6.5">UTC-6:30</option>
		<option value="UTC-6">UTC-6</option>
		<option value="UTC-5.5">UTC-5:30</option>
		<option value="UTC-5">UTC-5</option>
		<option value="UTC-4.5">UTC-4:30</option>
		<option value="UTC-4">UTC-4</option>
		<option value="UTC-3.5">UTC-3:30</option>
		<option value="UTC-3">UTC-3</option>
		<option value="UTC-2.5">UTC-2:30</option>
		<option value="UTC-2">UTC-2</option>
		<option value="UTC-1.5">UTC-1:30</option>
		<option value="UTC-1">UTC-1</option>
		<option value="UTC-0.5">UTC-0:30</option>
		<option selected="selected" value="UTC+0">UTC+0</option>
		<option value="UTC+0.5">UTC+0:30</option>
		<option value="UTC+1">UTC+1</option>
		<option value="UTC+1.5">UTC+1:30</option>
		<option value="UTC+2">UTC+2</option>
		<option value="UTC+2.5">UTC+2:30</option>
		<option value="UTC+3">UTC+3</option>
		<option value="UTC+3.5">UTC+3:30</option>
		<option value="UTC+4">UTC+4</option>
		<option value="UTC+4.5">UTC+4:30</option>
		<option value="UTC+5">UTC+5</option>
		<option value="UTC+5.5">UTC+5:30</option>
		<option value="UTC+5.75">UTC+5:45</option>
		<option value="UTC+6">UTC+6</option>
		<option value="UTC+6.5">UTC+6:30</option>
		<option value="UTC+7">UTC+7</option>
		<option value="UTC+7.5">UTC+7:30</option>
		<option value="UTC+8">UTC+8</option>
		<option value="UTC+8.5">UTC+8:30</option>
		<option value="UTC+8.75">UTC+8:45</option>
		<option value="UTC+9">UTC+9</option>
		<option value="UTC+9.5">UTC+9:30</option>
		<option value="UTC+10">UTC+10</option>
		<option value="UTC+10.5">UTC+10:30</option>
		<option value="UTC+11">UTC+11</option>
		<option value="UTC+11.5">UTC+11:30</option>
		<option value="UTC+12">UTC+12</option>
		<option value="UTC+12.75">UTC+12:45</option>
		<option value="UTC+13">UTC+13</option>
		<option value="UTC+13.75">UTC+13:45</option>
		<option value="UTC+14">UTC+14</option>
		</optgroup>
	</select>
	</div>
</div>

<hr> 

<!-- Date Format -->
<div class="form-group col-left">
	<label for="date_format"><?php _e( 'Date Format', BMSO_TEXT_DOMAIN ); ?></label>
	<fieldset><legend class="screen-reader-text"><span><?php _e( 'Date Format', BMSO_TEXT_DOMAIN ); ?></span></legend>
		<label title="F j, Y"><input type="radio" name="date_format" value="F j, Y"> June 27, 2015</label><br>
		<label title="Y-m-d"><input type="radio" name="date_format" value="Y-m-d"> 2015-06-27</label><br>
		<label title="m/d/Y"><input type="radio" name="date_format" value="m/d/Y"> 06/27/2015</label><br>
		<label title="d/m/Y"><input type="radio" name="date_format" value="d/m/Y"> 27/06/2015</label>
	</fieldset>
</div>

<!-- Time Format -->
<div class="form-group col-right">
	<label for="date_format"><?php _e( 'Time Format', BMSO_TEXT_DOMAIN ); ?></label>
	<fieldset><legend class="screen-reader-text"><span><?php _e( 'Time Format', BMSO_TEXT_DOMAIN ); ?></span></legend>
		<label title="g:i a"><input type="radio" name="time_format" value="g:i a"> 5:26 am</label><br>
		<label title="g:i A"><input type="radio" name="time_format" value="g:i A"> 5:26 AM</label><br>
		<label title="H:i"><input type="radio" name="time_format" value="H:i"> 05:26</label>
	</fieldset>
</div>