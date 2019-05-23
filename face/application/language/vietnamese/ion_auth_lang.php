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
$lang['welcome_dashboard'] = 'Tổng Hợp';
$lang['login_title'] = 'Đăng Nhập';
$lang['remember_me'] = 'Ghi nhớ';
$lang['device_health'] = 'Tình Trạng Thiết Bị';
$lang['connection_status'] = 'Trạng Thái Kết Nối';
$lang['dashboard'] = 'Tổng Hợp';
$lang['device_management'] = 'Quản Lý Thiết Bị';
$lang['gateway'] = 'Gateway';
$lang['xbee_network'] = 'Mạng XBee';
$lang['data_service'] = 'Dịch Vụ Dữ Liệu';
$lang['error'] = 'Lỗi';
$lang['info'] = 'Thông Tin';
$lang['warning'] = 'Khuyến Cáo';
$lang['could_not_connect_cloud'] = 'Không thể kết nối máy chủ đám mây';
$lang['loading_data_please_wait'] = 'đang tải dữ liệu, vui lòng đợi..';
$lang['location_not_yet_updated'] = 'Vị trí chưa cập nhật';
$lang['cloud_account'] = 'Tài Khoản Đám Mây';
$lang['device_management'] = 'Quản lý thiết bị';
$lang['control_center'] = 'Trung tâm điều khiển';
$lang['schedule_list'] = 'Lịch trình';
$lang['gateway_list'] = 'Danh sách gateway';
$lang['groups'] = 'Danh sách nhóm';
$lang['group'] = 'Nhóm';
$lang['users'] = 'Người dùng';
$lang['profile_page'] = 'Trang hồ sơ';
$lang['logout'] = 'Đăng xuất';
$lang['total_gateway'] = 'Tổng số  gateway: ';
$lang['connected'] = 'Đã kết nối';
$lang['disconnected'] = 'Ngắt kết nối';
$lang['unknown'] = 'Không xác định';
$lang['new_gateway'] = 'Kết nối Gateway mới';
$lang['select_gateway'] = 'Chọn Gateway:';
$lang['new_xbee'] = 'Kết nối XBee mới';
$lang['selected_xbee'] = 'XBee đã chọn:';
$lang['auto'] = 'Tự động';
$lang['manual'] = 'Thủ công';
$lang['schedule'] = 'Lịch trình';
$lang['on_off'] = 'Bật/Tắt';

$lang['day_of_week'] = 'Ngày';
$lang['time'] = 'Thời gian';
$lang['action'] = 'Hành động';
$lang['value'] = 'Giá trị';
$lang['sunday'] = 'Chủ nhật';
$lang['monday'] = 'Thứ hai';
$lang['tuesday'] = 'Thứ ba';
$lang['wednesday'] = 'Thứ tư';
$lang['thursday'] = 'Thứ năm';
$lang['friday'] = 'Thứ Sáu';
$lang['saturday'] = 'Thứ Bảy';
$lang['all'] = 'Tất Cả';
$lang['switch_off'] = 'Tắt';
$lang['set_dim'] = 'Bật/Dim';
$lang['off'] = 'Tắt';
$lang['on'] = 'Bật';
$lang['power_analysis']= 'Thống kê Năng Lượng';


$lang['status']= 'Trạng Thái';
$lang['ip_addr']= 'Địa chỉ IP';
$lang['addr_16bit']= 'Địa chỉ 16 bit';
$lang['addr_64bit']= 'Địa chỉ 64 bit';
$lang['firmware_ver']= 'Phiên bản firmware';
$lang['hardware_ver']= 'Phiên bản hardware';
$lang['protocol']= 'Giao thức';
$lang['time_last_update']= 'Cập nhật lần cuối';
$lang['description']= 'Mô tả';


$lang['xbee_addr']= 'Địa chỉ Xbee';
$lang['power']= 'Công suất';
$lang['on_off']= 'Bật/Tắt';
$lang['dim']= 'Giá trị dim';


$lang['select_gateway2']= '-- Chọn Gateway --';
$lang['select_xbee']= '-- Chọn xBee --';
$lang['select_district']= '-- Chọn quận/huyện --';
$lang['select_street']= '-- Chọn đường --';
$lang['select_province']= '-- Chọn tỉnh/thành phố --';
$lang['filter']= 'Lọc';
$lang['province']= 'Tỉnh';
$lang['district']= 'Quận/Huyện';
$lang['street']= 'Đường';
$lang['total']= 'Tổng';
$lang['control_mode']= 'Chế độ điều khiển';
$lang['review_schedule']= 'Xem lại lịch đã thêm';


$lang['gateway_64bit_addr']= 'Địa chỉ Gateway';
$lang['xbee_address']= 'Địa chỉ xBee';
$lang['day_of_week']= 'Ngày';
$lang['action_type']= 'Loại hành động';
$lang['action_value']= 'Giá trị';
$lang['action_time']= 'Thời gian';
$lang['delete_schedule_confirm']= 'Xác nhận xoá lịch trình này?';
$lang['schedule_overview']= 'Tổng quan lịch trình';
$lang['export_csv']= 'Xuất file CSV';

$lang['energy_consumption_calculator']= 'Tính toán điện năng tiêu thụ';
$lang['energy_consumption']= 'Điện năng tiêu thụ';
$lang['begin_time']= 'Ngày giờ bắt đầu';
$lang['end_time']= 'Ngày giờ kết thúc';
$lang['error_checking']= 'Kiểm tra báo lỗi';
$lang['choose_date']= 'Chọn ngày';
$lang['detail']= 'Chi tiết';
$lang['no_error_found']= 'Không tìm thấy lỗi!';

$lang['led_open_circuit']= 'Đèn bị hở';
$lang['lef_short_circuit']= 'Đèn bị chập';
$lang['over_voltage']= 'Điện thế cao';
$lang['under_voltage']= 'Điện thế thấp';
$lang['clock_error']= 'Đồng hồ hỏng';
$lang['power_sensor_error']= 'Đo công suất hỏng';
$lang['relay_stuck']= 'Rơ-le bị dính';
$lang['location_error']= 'Tọa độ sai';
$lang['over_temperature']= 'Quá nóng';
$lang['light_sensor_error']= 'Sensor ánh sáng hỏng';
$lang['reboot_required']= 'Cần reboot';


$lang['note']= 'Chú ý';
$lang['removed']= 'Đã xoá';
$lang['error_occured']= 'Đã xảy ra lỗi';
$lang['deleted']= 'Đã xoá';
$lang['delete']= 'Xoá';
$lang['gateway_offline']= 'Không thể kết nối đến gateway';
$lang['xbee_update_position']= 'xBee cần cập nhật vị trí';
$lang['no_gateway']= 'Bạn chưa chọn Gateway';
$lang['no_xbee']= 'Bạn chưa chọn xBee';
$lang['no_schedule']= 'Bạn chưa chọn lịch trình';
$lang['no_time']= 'Bạn chưa chọn thời gian';

$lang['create_group']= 'Tạo nhóm mới';
$lang['group_name']= 'Tên nhóm';
$lang['edit_group']= 'Cập nhật nhóm';

$lang['create_user']= 'Tạo User';
$lang['edit_user']= 'Cập nhật user';
$lang['see_all_user']= 'Xem Tất Cả User';
$lang['name']= 'Tên';
$lang['last_login']= 'Lần đăng nhập cuối';

$lang['first_name']= 'Họ';
$lang['last_name']= 'Tên';
$lang['company']= 'Công ty';
$lang['phone']= 'Số điện thoại';
$lang['password']= 'Mật khẩu';
$lang['confirm_password']= 'Xác nhận mật khẩu';

$lang['save_profile']= 'Cập nhật hồ sơ';

$lang['initialise_gateway']= 'Khởi tạo gateway mới';
$lang['edit_gateway']= 'Cập nhật Gateway';
$lang['gateway_name']= 'Tên Gateway';

$lang['update_xbee']= 'Cập nhật XBee';

$lang['longitude']= 'Kinh độ';
$lang['latitude']= 'Vĩ độ';

$lang['vietnamese']= 'Tiếng Việt';
$lang['english']= 'English';

$lang['remove_from_group']= 'Xóa khỏi nhóm hiện tại';

$lang['range_day']= 'Tự chọn';
$lang['week']= 'Tuần';
$lang['month']= 'Tháng';
$lang['year']= 'Năm';
