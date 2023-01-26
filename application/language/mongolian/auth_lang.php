<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'Форм хамгаалалтын шалгуурыг хангасангүй.';

// Login
$lang['login_heading']         = 'Нэвтрэх';
$lang['login_subheading']      = 'Нэвтрэхэд мейл хаяг болон нууц ашиглана уу.';
$lang['login_identity_label']  = 'Хэрэглэгчийн мейл хаяг';
$lang['login_password_label']  = 'Нууц үг';
$lang['login_remember_label']  = 'Намайг сана';
$lang['login_remember_label1']  = 'тийм';
$lang['login_remember_label0']  = 'үгүй';
$lang['login_submit_btn']      = 'Нэвтрэх';
$lang['login_forgot_password'] = 'Нууц үгээ мартсан уу?';

// Index
$lang['index_heading']           = 'Хэрэглэгчид';
$lang['index_subheading']        = 'Хэрэглэгчдийн жагсаалт.';
$lang['index_fname_th']          = 'Нэр';
$lang['index_lname_th']          = 'Овог';
$lang['index_email_th']          = 'И-мейл';
$lang['index_groups_th']         = 'Бүлэг';
$lang['index_status_th']         = 'Төлөв';
$lang['index_action_th']         = 'Үйлдэл';
$lang['index_active_link']       = 'Идэвхитэй';
$lang['index_inactive_link']     = 'Идэвхигүй';
$lang['index_create_user_link']  = 'Шинэ хэрэглэгч нэмэх';
$lang['index_create_group_link'] = 'Шинэ бүлэг нэмэх';

// Deactivate User
$lang['deactivate_heading']                  = 'Идэвхигүй болгох';
$lang['deactivate_subheading']               = 'Энэхүү хэрэглэгчийг идэвхигүй болгох уу ? \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Тийм:';
$lang['deactivate_confirm_n_label']          = 'Үгүй:';
$lang['deactivate_submit_btn']               = 'Хадгалах';
$lang['deactivate_validation_confirm_label'] = 'Баталгаажуулах';
$lang['deactivate_validation_user_id_label'] = 'хэрэглэгчийн дугаар';

// Create User
$lang['create_user_heading']                           = 'Хэрэглэгч нэмэх';
$lang['create_user_subheading']                        = 'Хэрэглэгчийн талаарх мэдээллийг оруулна уу.';
$lang['create_user_fname_label']                       = 'Нэр:';
$lang['create_user_lname_label']                       = 'Овог:';
$lang['create_user_company_label']                     = 'Ажлын газар:';
$lang['create_user_email_label']                       = 'И-мейл:';
$lang['create_user_phone_label']                       = 'Утас:';
$lang['create_user_password_label']                    = 'Нууц үг:';
$lang['create_user_password_confirm_label']            = 'Нууц үгээ давтана уу:';
$lang['create_user_submit_btn']                        = 'Хэрэглэгч үүсгэх';
$lang['create_user_validation_fname_label']            = 'Нэр';
$lang['create_user_validation_lname_label']            = 'Овог';
$lang['create_user_validation_email_label']            = 'И-мейл';
$lang['create_user_validation_phone1_label']           = 'Утасны эхний хэсэг';
$lang['create_user_validation_phone2_label']           = 'Утасны дараах хэсэг';
$lang['create_user_validation_phone3_label']           = 'Утасны сүүлийн хэсэг';
$lang['create_user_validation_company_label']          = 'Ажлын газар';
$lang['create_user_validation_password_label']         = 'Нууц үг';
$lang['create_user_validation_password_confirm_label'] = 'Нууц үгээ давтана уу';

// Edit User
$lang['edit_user_heading']                           = 'Хэрэглэгчийн засах';
$lang['edit_user_subheading']                        = 'Хэрэглэгчийн мэдээллийг оруулна уу.';
$lang['edit_user_fname_label']                       = 'Нэр:';
$lang['edit_user_lname_label']                       = 'Овог:';
$lang['edit_user_company_label']                     = 'Ажлын газар:';
$lang['edit_user_email_label']                       = 'И-мейл:';
$lang['edit_user_phone_label']                       = 'Утас:';
$lang['edit_user_password_label']                    = 'Нууц үг: (солих тохиолдолд)';
$lang['edit_user_password_confirm_label']            = 'Нууц үгээ давтана уу: (солих тохиолдолд)';
$lang['edit_user_groups_heading']                    = 'Бүлэгийн гишүүн';
$lang['edit_user_submit_btn']                        = 'Хэрэглэгчийг хадгалах';
$lang['edit_user_validation_fname_label']            = 'Нэр';
$lang['edit_user_validation_lname_label']            = 'Овог';
$lang['edit_user_validation_email_label']            = 'И-мейл';
$lang['edit_user_validation_phone1_label']           = 'Утасны эхний хэсэг';
$lang['edit_user_validation_phone2_label']           = 'Утасны дараах хэсэг';
$lang['edit_user_validation_phone3_label']           = 'Утасны сүүлийн хэсэг';
$lang['edit_user_validation_company_label']          = 'Ажлын газар';
$lang['edit_user_validation_groups_label']           = 'Бүлэг';
$lang['edit_user_validation_password_label']         = 'Нууц үг';
$lang['edit_user_validation_password_confirm_label'] = 'Нууц үгээ давтана уу';

// Create Group
$lang['create_group_title']                  = 'Бүлэг үүсгэх';
$lang['create_group_heading']                = 'Бүлэг үүсгэх';
$lang['create_group_subheading']             = 'Бүлгийн талаарх мэдээллийг оруулна уу.';
$lang['create_group_name_label']             = 'Бүлгийн нэх:';
$lang['create_group_desc_label']             = 'Тайлбар:';
$lang['create_group_submit_btn']             = 'Бүлэг үүсгэх';
$lang['create_group_validation_name_label']  = 'Бүлгийн нэх';
$lang['create_group_validation_desc_label']  = 'Тайлбар';

// Edit Group
$lang['edit_group_title']                  = 'Бүлэг засварлах';
$lang['edit_group_saved']                  = 'Бүлэг хадгалагдсан';
$lang['edit_group_heading']                = 'Бүлэг засварлах';
$lang['edit_group_subheading']             = 'Бүлгийн талаарх мэдээллийг оруулна уу.';
$lang['edit_group_name_label']             = 'Бүлгийн нэр:';
$lang['edit_group_desc_label']             = 'Тайлбар:';
$lang['edit_group_submit_btn']             = 'Бүлгийн хадгалах';
$lang['edit_group_validation_name_label']  = 'Бүлгийн нэр';
$lang['edit_group_validation_desc_label']  = 'Тайлбар';

// Change Password
$lang['change_password_heading']                               = 'Нууц үг солих';
$lang['change_password_old_password_label']                    = 'Хуучин нууц үг:';
$lang['change_password_new_password_label']                    = 'Шинэ нууц үг (багадаа %s тэмдэгтээс дээш):';
$lang['change_password_new_password_confirm_label']            = 'Шинэ нууц үгийг давтана уу:';
$lang['change_password_submit_btn']                            = 'Солих';
$lang['change_password_validation_old_password_label']         = 'Хуучин нууц үг';
$lang['change_password_validation_new_password_label']         = 'Шинэ нууц үг';
$lang['change_password_validation_new_password_confirm_label'] = 'Шинэ нууц үгийг баталгаажуулах';

// Forgot Password
$lang['forgot_password_heading']                 = 'Нууц үгээ мартсан';
$lang['forgot_password_subheading']              = 'Та хэрэглэгчийн %s оруулна уу, таньд мейл илгээх болно.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Илгээх';
$lang['forgot_password_validation_email_label']  = 'И-мейл хаяг';
$lang['forgot_password_username_identity_label'] = 'Хэрэглэгчийн нэр';
$lang['forgot_password_email_identity_label']    = 'И-мейл';
$lang['forgot_password_email_not_found']         = 'Таны и-мейл хаяг бүртгэгдээгүй байна.';

// Reset Password
$lang['reset_password_heading']                               = 'Нууц үгээ солих';
$lang['reset_password_new_password_label']                    = 'Шинэ нууц үг (багадаа %s тэмдэгтээс дээш):';
$lang['reset_password_new_password_confirm_label']            = 'Шинэ нууц үгийг давтана уу:';
$lang['reset_password_submit_btn']                            = 'Солих';
$lang['reset_password_validation_new_password_label']         = 'Шинэ нууц үг';
$lang['reset_password_validation_new_password_confirm_label'] = 'Шинэ нууц үгийг баталгаажуулах';

// Activation Email
$lang['email_activate_heading']    = '%s хэрэглэгчийн идэвхижүүлэх';
$lang['email_activate_subheading'] = 'Энэхүү холбоос руу дарж %s .';
$lang['email_activate_link']       = 'хэрэглэгчийг идэвхижүүлнэ үү';

// Forgot Password Email
$lang['email_forgot_password_heading']    = '%s хэрэглэгчийн нууц үг солих';
$lang['email_forgot_password_subheading'] = 'Энэхүү холбоос руу дарж %s.';
$lang['email_forgot_password_link']       = 'нууц үгээ сэргээнэ үү';

// New Password Email
$lang['email_new_password_heading']    = '%s хэрэглэгчийн шинэ нууц үг';
$lang['email_new_password_subheading'] = 'Таны шинэ нууц үг: %s';

