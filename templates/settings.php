<?php
defined('ABSPATH') or die("No script kiddies please!");
?>
<style type="text/css">
<!--
.style2 {font-size: xx-small}
-->
</style>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>
	<h2>SMEW Comic Easel &#9829; s2Member</h2>
	<br />
	<div style="background-color: #EBEBEB;-moz-border-radius:15px;border-radius:15px;padding:10px;"> Help turn your Comic Easel site into a paid subscription site with s2Member. Requires both <a href="https://wordpress.org/plugins/comic-easel/">Comic Easel</a> and <a href="https://wordpress.org/plugins/s2member/">s2Member</a> to function since this acts as a bridge between the two.<br />
  </div>
	<h2>
	  Settings	
  </h2>
	<form method="post" action="options.php">
		<?php @settings_fields('smew_ce_s2-group'); ?>
        <?php @do_settings_fields('smew_ce_s2-group'); ?>
		
		<div>
		<h3>Drip Feed</h3>
		<div>
		<label for="drip_time">Restrict a comic page for </label>
		<select class="drip_time" id="drip_time" name="drip_time">
		<option value="" <?php if(get_option('drip_time')=='NULL'){ echo 'selected="selected"'; } ?> >NOT SET</option>
		<option value="1 day" <?php if(get_option('drip_time')=='1 day'){ echo 'selected="selected"'; } ?> >1 day</option>
		<option value="3 days" <?php if(get_option('drip_time')=='3 days'){ echo 'selected="selected"'; } ?> >3 days</option>
		<option value="5 days" <?php if(get_option('drip_time')=='5 days'){ echo 'selected="selected"'; } ?> >5 days</option>
		<option value="1 week" <?php if(get_option('drip_time')=='1 week'){ echo 'selected="selected"'; } ?> >1 week</option>
		<option value="2 weeks" <?php if(get_option('drip_time')=='2 weeks'){ echo 'selected="selected"'; } ?> >2 weeks</option>
		<option value="1 month" <?php if(get_option('drip_time')=='1 month'){ echo 'selected="selected"'; } ?> >1 month</option>
		<option value="2 months" <?php if(get_option('drip_time')=='2 months'){ echo 'selected="selected"'; } ?> >2 months</option>
		<option value="3 months" <?php if(get_option('drip_time')=='3 months'){ echo 'selected="selected"'; } ?> >3 months</option>
		<option value="6 months" <?php if(get_option('drip_time')=='6 months'){ echo 'selected="selected"'; } ?> >6 months</option>
		<option value="1 year" <?php if(get_option('drip_time')=='1 year'){ echo 'selected="selected"'; } ?> >1 year</option>
		</select>
		for user with access to 
		<select class="drip_level" id="drip_level" name="drip_level">
			<option value="" <?php if(get_option('drip_level')=='NULL'){ echo 'selected="selected"'; } ?> >EVERYONE</option>
			<option value="access_s2member_level0" <?php if(get_option('drip_level')=='access_s2member_level0'){ echo 'selected="selected"'; } ?> >Member Level 0</option>
			<option value="access_s2member_level1" <?php if(get_option('drip_level')=='access_s2member_level1'){ echo 'selected="selected"'; } ?> >Member Level 1</option>
			<option value="access_s2member_level2" <?php if(get_option('drip_level')=='access_s2member_level2'){ echo 'selected="selected"'; } ?> >Member Level 2</option>
			<option value="access_s2member_level3" <?php if(get_option('drip_level')=='access_s2member_level3'){ echo 'selected="selected"'; } ?> >Member Level 3</option>
			<option value="access_s2member_level4" <?php if(get_option('drip_level')=='access_s2member_level4'){ echo 'selected="selected"'; } ?> >Member Level 4</option>
		</select>
		<br />
			<p style="margin-left: 50px;">
			<div style="background-color:#666666;-moz-border-radius:15px;border-radius:15px;padding:10px;">
			<b>-- COMING SOON --</b> <i>Currently NOT working</i><br />
			<input type="checkbox" id="drip_end_option" name="drip_end_option" value="yes" <?php if(get_option('drip_end_option')=='yes'){ echo 'checked="checked"'; } ?> disabled="disabled" />
			After the set time has elapsed, make comic page available to 
			<select class="drip_end" id="drip_end" name="drip_end" disabled="disabled">
				<option value="" <?php if(get_option('drip_end')=='NULL'){ echo 'selected="selected"'; } ?> >EVERYONE</option>
				<option value="access_s2member_level0" <?php if(get_option('drip_end')=='access_s2member_level0'){ echo 'selected="selected"'; } ?> >Member Level 0</option>
				<option value="access_s2member_level1" <?php if(get_option('drip_end')=='access_s2member_level1'){ echo 'selected="selected"'; } ?> >Member Level 1</option>
				<option value="access_s2member_level2" <?php if(get_option('drip_end')=='access_s2member_level2'){ echo 'selected="selected"'; } ?> >Member Level 2</option>
				<option value="access_s2member_level3" <?php if(get_option('drip_end')=='access_s2member_level3'){ echo 'selected="selected"'; } ?> >Member Level 3</option>
				<option value="access_s2member_level4" <?php if(get_option('drip_end')=='access_s2member_level4'){ echo 'selected="selected"'; } ?> >Member Level 4</option>
			</select>
			<br />
			<input type="checkbox" id="drip_end_image_option" name="drip_end_image_option" value="yes" <?php if(get_option('drip_end_image_option')=='yes'){ echo 'checked="checked"'; } ?> disabled="disabled" />
			Anyone not of correct membership level or above will see alternative image instead:
			<br />
			[insert media box here]
			</div>
			</p>
		</div>
		<br />
		<h3>Images Size Restrictions</h3>
		<div>
		<table><tr><td>
		<i>Image Size</i> </td><td> </td><td><i>Access level</i> </td></tr>
			<?php
			#### Loop Starts here for image sizes ####

			$SMEW_array = get_intermediate_image_sizes();
			foreach($SMEW_array as $SMEW_image_name)
				{
				$SMEW_image_size = 'image_size_'. $SMEW_image_name;
				$SMEW_restrict_image_size = 'restrict_image_size_'. $SMEW_image_name;
				if($SMEW_image_name != 'medium_large')
					{
					echo '<tr><td>';
					echo '<input type="checkbox" id="'. $SMEW_image_size .'" name="'. $SMEW_image_size .'" value="yes"';
					if(get_option($SMEW_image_size)=='yes')
						{
						echo 'checked="checked" ';
						}
					if($SMEW_image_name == 'thumbnail')
						{
						echo 'disabled="disabled" ';
						}
					elseif(($SMEW_image_name != 'medium') && ($SMEW_image_name != 'large') && ($SMEW_image_name != 'medium_large'))
						{
						echo 'disabled="disabled" ';
						}
					echo '/>'. $SMEW_image_name .'</td><td> -- </td><td>';
					echo '<select class="'. $SMEW_restrict_image_size .'" id="'. $SMEW_restrict_image_size .'" name="'. $SMEW_restrict_image_size .'"';
					if(get_option($SMEW_restrict_image_size)=='NULL')
						{
						echo 'selected="selected"';
						}
					if($SMEW_image_name == 'thumbnail')
						{
						echo 'disabled="disabled" >';
						}
					elseif(($SMEW_image_name != 'medium') && ($SMEW_image_name != 'large') && ($SMEW_image_name != 'medium_large'))
						{
						echo 'disabled="disabled" >';
						}
					else
						{
						echo '>';
						}
					echo '<option value="" >EVERYONE</option>';
						for($n = 0; $n <= $GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"]; $n++)
						{
						echo '<option value="access_s2member_level'. $n .'"';
						if(get_option($SMEW_restrict_image_size)=='access_s2member_level'. $n)
							{
							echo 'selected="selected"';
							}
						echo '>'. format_to_edit($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["level".$n."_label"]) .' (Member Level #'.$n.')</option><br />';
						}
					echo '</select>';
					if($SMEW_image_name == 'thumbnail')
						{
						echo ' *not recommended';
						}
					elseif(($SMEW_image_name != 'medium') && ($SMEW_image_name != 'large') && ($SMEW_image_name != 'medium_large'))
						{
						echo ' *custom size controls coming soon';
						}
					elseif($SMEW_image_name == 'medium_large')
						{
						echo ' *not commonly used';
						}
					}
				echo '</td></tr>';
				}
			?>
			<?php
			#### Loop ends here ####
			?>
			<tr><td>
		<input type="checkbox" id="image_size_full" name="image_size_full" value="yes" <?php if(get_option('image_size_full')=='yes'){ echo 'checked="checked"'; } ?> />full </td><td> -- 
			</td><td>
			<?php
			echo '<select class="restrict_image_size_full" id="restrict_image_size_full" name="restrict_image_size_full"';
			if(get_option('restrict_image_size_full')=='NULL')
				{
				echo 'selected="selected"';
				}
			echo '>';
			echo '<option value="" >EVERYONE</option>';
				for($n = 0; $n <= $GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"]; $n++)
				{
				echo '<option value="access_s2member_level'. $n .'"';
				if(get_option('restrict_image_size_full')=='access_s2member_level'. $n)
					{
					echo 'selected="selected"';
					}
				echo '>'. format_to_edit($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["level".$n."_label"]) .' (Member Level #'.$n.')</option><br />';
				}
			echo '</select>';
		 ?>
			</td></tr>
			</table>
			</div>
		<?php @submit_button(); ?>
		Please wipe cache after hitting 'Save Changes'.
		<br />(If a cache plugin is active.)
    </form>
</div>