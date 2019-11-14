<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Model
{

	private static $db;

	function __construct(){
		parent::__construct();
		self::$db = &get_instance()->db;
	}

	// Get all countries
	static function getUserID($username) {	
		return self::$db->where('username',$username)->get('users')->row();
  	}// Get all subcities
	static function blog() {	
		return self::$db->get('blog')->result();
  	}
    // Get all countries
	static function pages() {	
		return self::$db->get('pages')->result();
  	}
    
    // Get all countries
	static function pricing() {	
		return self::$db->get('pricing')->result();
  	}
    static function categories($orderBy) {	
		return self::$db->select("*")->where('mode','checked')->order_by($orderBy)->get('categories')->result();
  	}
    
    static function slideshows() {	
		return self::$db->get('sliders')->result();
  	}
    
    // get all posts 
	static function posts() {	
		return self::$db->get('blog')->result();
  	}

	static function counter($table,$where = array()) {

		return self::$db->where($where)->get($table)->num_rows();
	}
	// Get get project categries
	static function get_category_by_id($category){
		return self::$db->where('id',$category)->get('categories')->results();
	}
    // Get category name using ID
	static function get_category_by_slug($slug){
		return self::$db->where('slug',$slug)->get('categories')->row();
	} 
	// Get project by slug
	static function get_project_by_slug($slug){
		return self::$db->select('st.*,cat.name,u.*')->from('stock as st')->where('st.slug',$slug)->join('users as u','u.id = st.user_id')->join('categories as cat','cat.id = st.cat_id')->get()->row();
	}
    
    // Get get project categries
	static function get_post_by_id($post){
		return self::$db->where('token_id',$post)->get('blog')->results();
	}
    // get images by cat id
    static function get_images_by_cat_id($post){
		return self::$db->where('cat_id',$post)->get('stock')->row();
	}
    // get posts by cat id
    static function get_post_by_cat_id($post){
		return self::$db->where('cat_id',$post)->get('blog')->row();
	}
    // Get category name using ID
	static function get_portfolio_by_id($id){
		return self::$db->where('id',$id)->get('portfolio')->row();
	}
    // Get category name using ID
	static function get_portfolio_by_user($id){
		return self::$db->where('user_id',$id)->get('stock')->result();
	} 
	// Get project by slug
	static function get_post_by_slug($slug){
		return self::$db->where('slug',$slug)->get('blog')->row();
	}
static function get_id($id,$table){
		return self::$db->where('id',$id)->get($table)->row();
	}
	static function get_by_where($table, $array = NULL, $order_by = array()){
		if(count($order_by) > 0) { self::$db->order_by($order_by['column'],$order_by['order']) ; }
    	return self::$db->where($array)->get($table)->result();
	}
	static function currencies_list()
	{
			$result = self::$db->select("*")
				->get('currencies')
				->result();
	
			$category[''] = 'Currencies';
			if (!empty($result)) {
				foreach ($result as $value) {
					$category[$value->code] = $value->name; 
				}
				return $category;
			} else {
				return $category;
			} 
		}
	
		static function category_list()
		{
			$result = self::$db->select("*")->where('mode','checked')
				->get('categories')
				->result();
	
			$category[''] = 'Categories';
			if (!empty($result)) {
				foreach ($result as $value) {
					$category[$value->id] = $value->name; 
				}
				return $category;
			} else {
				return $category;
			} 
		}
    static function country_list()
		{
			$result = self::$db->select("*")
				->get('countries')
				->result();
	
			$category[''] = 'Countries';
			if (!empty($result)) {
				foreach ($result as $value) {
					$category[$value->value] = $value->value; 
				}
				return $category;
			} else {
				return $category;
			} 
		}


	// Save any data
	static function save($table, $data){
		self::$db->insert($table,$data);
		return self::$db->insert_id();
	}
    // Get data
	static function getData($table,$limit = NULL,$orderby=''){
    	return self::$db->order_by($orderby)->get($table,$limit)->result();;
	}
	/**
	* Update records in $table matching $match.
	*
	* @return Affected rows int
	*/
static function _exist($slug,$table){
        return self::$db->where('slug',$slug)->get($table)->num_rows();
    }
	static function change($table,$id,$data = array()) {

		self::$db->where('id', $id )->update($table,$data);
		return self::$db->affected_rows();
	}
        static function update_data($table,$id,$data = array()) {

		self::$db->where('id', $id )->update($table,$data);
		return self::$db->affected_rows();
	}
	static function email_template($group = NULL,$column = NULL){
		return self::$db->where('email_group',$group)->get('email_templates')->row()->$column;
	}
	/**
	* Deletes data matching $where in $table.
	*
	* @return boolean
	*/

	static function delete($table,$where = array()) {

		return self::$db->delete($table,$where);
	}

}

/* End of file model.php */