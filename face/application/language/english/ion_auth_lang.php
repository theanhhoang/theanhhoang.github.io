<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Account Successfully Created';
$lang['account_creation_unsuccessful'] 	 	 = 'Unable to Create Account';
$lang['account_creation_duplicate_email'] 	 = 'Email Already Used or Invalid';
$lang['account_creation_duplicate_username'] = 'Username Already Used or Invalid';
$lang['account_creation_missing_default_group'] = 'Default group is not set';
$lang['account_creation_invalid_default_group'] = 'Invalid default group name set';


// Password
$lang['password_change_successful'] 	 	 = 'Password Successfully Changed';
$lang['password_change_unsuccessful'] 	  	 = 'Unable to Change Password';
$lang['forgot_password_successful'] 	 	 = 'Password Reset Email Sent';
$lang['forgot_password_unsuccessful'] 	 	 = 'Unable to Reset Password';

// Activation
$lang['activate_successful'] 		  	     = 'Account Activated';
$lang['activate_unsuccessful'] 		 	     = 'Unable to Activate Account';
$lang['deactivate_successful'] 		  	     = 'Account De-Activated';
$lang['deactivate_unsuccessful'] 	  	     = 'Unable to De-Activate Account';
$lang['activation_email_successful'] 	  	 = 'Activation Email Sent';
$lang['activation_email_unsuccessful']   	 = 'Unable to Send Activation Email';

// Login / Logout
$lang['login_successful'] 		  	         = 'Logged In Successfully';
$lang['login_unsuccessful'] 		  	     = 'Incorrect Login';
$lang['login_unsuccessful_not_active'] 		 = 'Account is inactive';
$lang['login_timeout']                       = 'Temporarily Locked Out.  Try again later.';
$lang['logout_successful'] 		 	         = 'Logged Out Successfully';

// Account Changes
$lang['update_successful'] 		 	         = 'Account Information Successfully Updated';
$lang['update_unsuccessful'] 		 	     = 'Unable to Update Account Information';
$lang['delete_successful']               = 'User Deleted';
$lang['delete_unsuccessful']           = 'Unable to Delete User';

// Groups
$lang['group_creation_successful']  = 'Group created Successfully';
$lang['group_already_exists']       = 'Group name already taken';
$lang['group_update_successful']    = 'Group details updated';
$lang['group_delete_successful']    = 'Group deleted';
$lang['group_delete_unsuccessful'] 	= 'Unable to delete group';
$lang['group_name_required'] 		= 'Group name is a required field';

// Activation Email
$lang['email_activation_subject']            = 'Account Activation';
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Forgotten Password Verification';
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';

// New Password Email
$lang['email_new_password_subject']          = 'New Password';
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';


//custom language
$lang['welcome_dashboard'] = 'Dashboard';
$lang['login_title'] = 'Sign In';
$lang['remember_me'] = 'Remember me';
$lang['device_health'] = 'Device Health';
$lang['connection_status'] = 'Connection Status';
$lang['dashboard'] = 'Dashboard';
$lang['device_management'] = 'Device Management';
$lang['gateway'] = 'Gateway';
$lang['xbee_network'] = 'XBee Network';
$lang['data_service'] = 'Data Service';
$lang['error'] = 'Error';
$lang['info'] = 'Info';
$lang['warning'] = 'Warning';
$lang['could_not_connect_cloud'] = 'Could not connect cloud';
$lang['loading_data_please_wait'] = 'Please wait...';
$lang['location_not_yet_updated'] = 'Location not yet updated';
$lang['cloud_account'] = 'Cloud Account';
$lang['device_management'] = 'Device Management';
$lang['control_center'] = 'Control Center';
$lang['schedule_list'] = 'Schedule List';
$lang['gateway_list'] = 'Gateway List';
$lang['groups'] = 'Groups';
$lang['group'] = 'Group';
$lang['users'] = 'Users';
$lang['profile_page'] = 'Profile Page';
$lang['logout'] = 'Logout';
$lang['total_gateway'] = 'Total gateway(s): ';
$lang['connected'] = 'Connected';
$lang['disconnected'] = 'Disconnected';
$lang['unknown'] = 'Unknown';
$lang['new_gateway'] = 'Connect New Gateway';
$lang['select_gateway'] = 'Select Gateway:';
$lang['new_xbee'] = 'Add XBee';
$lang['selected_xbee'] = 'Selected XBee(s):';
$lang['auto'] = 'Auto';
$lang['manual'] = 'Manual';
$lang['schedule'] = 'Schedule';
$lang['on_off'] = 'Turn On/Off';

$lang['day_of_week'] = 'Day of Week';
$lang['time'] = 'Time';
$lang['action'] = 'Action';
$lang['value'] = 'Value';
$lang['sunday'] = 'Sunday';
$lang['monday'] = 'Monday';
$lang['tuesday'] = 'Tuesday';
$lang['wednesday'] = 'Wednesday';
$lang['thursday'] = 'Thursday';
$lang['friday'] = 'Friday';
$lang['saturday'] = 'Saturday';
$lang['all'] = 'All';
$lang['switch_off'] = 'Switch Off';
$lang['set_dim'] = 'Switch On/Dim';
$lang['off'] = 'Off';
$lang['on'] = 'On';
$lang['power_analysis']= 'Power Analysis' ;


$lang['status']= 'Status';
$lang['ip_addr']= 'IP Address';
$lang['addr_16bit']= '16 bit address';
$lang['addr_64bit']= '64 bit address';
$lang['firmware_ver']= 'Firmware version';
$lang['hardware_ver']= 'Hardware version';
$lang['protocol']= 'Protocol';
$lang['time_last_update']= 'Last Update';
$lang['description']= 'Description';


$lang['xbee_addr']= 'Xbee address';
$lang['power']= 'Power';
$lang['on_off']= 'On/Off';
$lang['dim']= 'Dim value';

$lang['select_gateway2']= '-- Select a gateway --';
$lang['select_xbee']= 'Select xBee';
$lang['select_district']= '-- Select a district --';
$lang['select_street']= '-- Select a street --';
$lang['select_province']= '-- Select a province --';
$lang['filter']= 'Filter';
$lang['province']= 'Province';
$lang['district']= 'District';
$lang['street']= 'Street';
$lang['total']= 'Total';
$lang['control_mode']= 'Control Mode';
$lang['review_schedule']= 'Review Schedule(s)';

$lang['gateway_64bit_addr']= 'Gateway address';
$lang['xbee_address']= 'xBee address';
$lang['day_of_week']= 'Day of week';
$lang['action_type']= 'Action type';
$lang['action_value']= 'Action value';
$lang['action_time']= 'Action time';
$lang['delete_schedule_confirm']= 'Are you really want to delete this schedule action?';
$lang['schedule_overview']= 'Schedule Overview';
$lang['export_csv']= 'Export to CSV';

$lang['energy_consumption_calculator']= 'Energy Consumption Calculator';
$lang['energy_consumption']= 'Energy Consumption';
$lang['begin_time']= 'Begin Time';
$lang['end_time']= 'End Time';
$lang['error_checking']= 'Error Checking';
$lang['choose_date']= 'Choose Date';
$lang['detail']= 'Detail';
$lang['no_error_found']= 'No error found!';


$lang['led_open_circuit']= 'LED open circuit';
$lang['lef_short_circuit']= 'LED short circuit';
$lang['over_voltage']= 'Over voltage';
$lang['under_voltage']= 'Under voltage';
$lang['clock_error']= 'Clock error';
$lang['power_sensor_error']= 'Power sensor error';
$lang['relay_stuck']= 'Relay stuck';
$lang['location_error']= 'Location error';
$lang['over_temperature']= 'Over temperature';
$lang['light_sensor_error']= 'Light sensor error';
$lang['reboot_required']= 'Reboot required';

$lang['note']= 'Note';
$lang['removed']= 'Removed';
$lang['error_occured']= 'Error Occurred';
$lang['deleted']= 'Deleted';
$lang['delete']= 'Delete';
$lang['gateway_offline']= 'Gateway might be offline';
$lang['xbee_update_position']= 'Below xBee(s) need(s) to update position';
$lang['no_gateway']= 'No gateway selected';
$lang['no_xbee']= 'No xBee selected';
$lang['no_schedule']= 'No schedule';
$lang['no_time']= 'No time selected';

$lang['create_group']= 'Create Group';
$lang['group_name']= 'Group name';
$lang['edit_group']= 'Edit Group';

$lang['create_user']= 'Create User';
$lang['edit_user']= 'Edit User';
$lang['see_all_user']= 'See all User';
$lang['name']= 'Name';
$lang['last_login']= 'Last Login';

$lang['first_name']= 'First Name';
$lang['last_name']= 'Last Name';
$lang['company']= 'Company';
$lang['phone']= 'Phone number';
$lang['password']= 'Password';
$lang['confirm_password']= 'Confirm Password';

$lang['save_profile']= 'Save Profile';

$lang['initialise_gateway']= 'Initialise New Gateway';
$lang['edit_gateway']= 'Edit Gateway';
$lang['gateway_name']= 'Gateway Name';

$lang['update_xbee']= 'Update XBee';

$lang['longitude']= 'Longitude';
$lang['latitude']= 'Latitude';


$lang['english']= 'English';
$lang['vietnamese']= 'Tiếng Việt';

$lang['remove_from_group']= 'Remove from current group';

$lang['range_day']= 'Range of days';
$lang['week']= 'Week';
$lang['month']= 'Month';
$lang['year']= 'Year';
