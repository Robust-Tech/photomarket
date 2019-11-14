<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{

    private static $db;

    function __construct(){
        parent::__construct();
        self::$db = &get_instance()->db;
    }

    // Get logged in user ID
    static function get_id()
    {
        $ci = &get_instance();
        return $ci->tank_auth->get_user_id();
    }

    // Get logged in user ID
    static function logged_in()
    {
        $ci = &get_instance();
        $logged_in = ($ci->tank_auth->is_logged_in()) ? TRUE : FALSE;
        if(!$logged_in) redirect('login');
        return ;
    }

    // Get user information
    static function view_user($id)
    {
        return self::$db->where('id',$id)->get('users')->row();
    }

    /**
     * Check user if admin
     */
    static function is_admin() {
        $ci = &get_instance();
        return ($ci->tank_auth->user_role($ci->tank_auth->get_role_id()) == 'admin') ? TRUE : FALSE;
    } 
    
    static function is_superadmin() {
        $ci = &get_instance();
        return ($ci->tank_auth->user_role($ci->tank_auth->get_role_id()) == 'superadmin') ? TRUE : FALSE;
    }

    /**
     * Check user if client
     */
    static function is_client() {
        $ci = &get_instance();
        return ($ci->tank_auth->user_role($ci->tank_auth->get_role_id()) == 'client') ? TRUE : FALSE;
    }

    /**
     * Check user if staff
     */
    static function is_contributor() {
        $ci = &get_instance();
        return ($ci->tank_auth->user_role($ci->tank_auth->get_role_id()) == 'author') ? TRUE : FALSE;
    }

    /**
     * Get user login information
     *
     * @return User data array
     */

    static function login_info($id) {
        return self::$db->where('id',$id)->get('users')->row();
    }

    /**
     * Get admins and staff
     */

    static function team() {
        return self::$db->where('role_id !=',2) -> get('users')->result();
    }

    // Get all users
    static function all_users(){
        return self::$db->get('users')->result();
    }

    
     /**
     * Display username or full name if exists
     */
    static function displayName($user = '') {
        if(!self::check_user_exist($user)) return '[MISSING USER]';

        return (self::profile_info($user)->firstname == NULL)
            ? self::login_info($user)->username
            : self::profile_info($user)->firstname;
    }

  

    /**
     * Get user role name e.g admin,staff etc
     */

    static function login_role_name() {
        $ci = &get_instance();
        return $ci->tank_auth->user_role($ci->tank_auth->get_role_id());
    }

    /**
     * Get user role name usind ID e.g admin,staff etc
     */

    static function get_role($user) {
        $ci = &get_instance();
        $id = self::login_info($user)->role_id;
        return $ci->tank_auth->user_role($id);
    }

    // Get all admin list
    static function superadmin_list(){
        return self::$db->where(array('role_id' => 1,'activated' => 1))->get('users')->result();
    }// Get all admin list
    static function admin_list(){
        return self::$db->where(array('role_id' => 2,'activated' => 1))->get('users')->result();
    }

    // Get all user list
    static function author_list(){
        return self::$db->where(array('role_id' => 3,'activated' => 1))->get('users')->result();
    }

    // Get staff list
    static function client_list(){
        return self::$db->where(array('role_id' => 4,'activated' => 1))->get('users')->result();
    }

    // Get roles
    static function get_roles(){
        return self::$db->get('roles')->result();
    }

    /**
     * Get user profile information
     */

    static function profile_info($id) {
        return self::$db->where('user_id',$id) -> get('account_details')->row();
    }


    static function user_log($user)
    {
        return self::$db->where('user',$user)->order_by('activity_date','DESC')->get('activities')->result();
    }

    // Get user avatar URL
    static function avatar_url($user = NULL) {
        if (config_item('use_gravatar') == 'TRUE' && self::profile_info($user)->use_gravatar == 'Y') {
            $user_email = self::login_info($user)->email;
            return Applib::get_gravatar($user_email);
        } else {
            if(self::profile_info($user)->avatar == null){
              return base_url().'assets/avatar/default_avatar.jpg';  
            }
            else
            {
                 return base_url().'assets/avatar/'.self::profile_info($user)->avatar;
            }
           
        }
    }

    static function check_user_exist($user){
        return self::$db->where('id',$user)->get('users')->num_rows();
    }

    // User can view invoice
   
    // Can pay Invoice
    static function can_pay_invoice(){
        if (self::login_role_name() == 'admin') return TRUE;
        elseif(self::login_role_name() == 'staff' && self::perm_allowed(self::get_id(),'pay_invoice_offline')){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    







}

/* End of file model.php */
