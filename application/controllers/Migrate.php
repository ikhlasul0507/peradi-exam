<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->writeLine();
		echo "<b>..............Time Migrate " . date("d-m-Y h:m:s") . "</b></br>";
		$this->writeLine();
		$this->addnewtable();
		$this->writeLine();
		$this->insertDataTable();
		$this->writeLine();
		$this->alterTable();
		$this->writeLine();
		echo "<h4>Congratulations your migrate successfully 100%</h4>";
		$this->writeLine();
		// redirect("L_a");
	}

	public function writeLine()
	{
		echo ".....................................................................................................................................</br>";
	}

	public function addnewtable()
	{
		//=================================================================================================
		$title = "Table structure for table `m_course`";
		$query = "CREATE TABLE IF NOT EXISTS `m_course` (
				  `id_course` int(11) NOT NULL AUTO_INCREMENT,
				  `id_users` int(11) NOT NULL,
				  `uuid` varchar(40) NOT NULL,
				  `course_name` varchar(250) NOT NULL,
				  `course_description` longtext NOT NULL,
				  `course_status` char(1) NOT NULL,
				  `course_nominal` int(30) NOT NULL,
				  `course_banner` varchar(500) NOT NULL,
				  `course_type` enum('C','T') NOT NULL,
				  `course_duration` int(30) NOT NULL, 
				  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_course)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `m_questions`";
		$query = "CREATE TABLE IF NOT EXISTS `m_questions` (
				    `id_questions` int(11) NOT NULL AUTO_INCREMENT,
				    `id_course` int(11)  NOT  NULL,
				    `id_users` int(11) NOT NULL,
				    `question_description` longtext NOT NULL,
				    `bobot` int (11),
					`option_a` longtext ,
					`option_b` longtext ,
					`option_c` longtext ,
					`option_d` longtext ,
					`option_e` longtext ,
					`answer` char (1),
					`discussion` longtext ,
				    `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_questions)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `users`";
		$query = "CREATE TABLE IF NOT EXISTS `users` (
				  `id_users` int(11) unsigned NOT NULL AUTO_INCREMENT,
				  `ip_address` varchar(45) NOT NULL,
				  `username` varchar(100) DEFAULT NULL,
				  `password` varchar(255) NOT NULL,
				  `email` varchar(254) DEFAULT NULL,
				  `isAdmin` char(1) NOT NULL,
				  `created_on` int(11) unsigned NOT NULL,
				  `last_login` varchar(50) DEFAULT NULL,
				  `active` tinyint(1) unsigned DEFAULT NULL,
				  `first_name` varchar(50) DEFAULT NULL,
				  `last_name` varchar(50) DEFAULT NULL,
				  `company` varchar(100) DEFAULT NULL,
				  `phone` varchar(20) DEFAULT NULL,
				  `list_packages` text DEFAULT NULL,
				  PRIMARY KEY (`id_users`),
				  UNIQUE KEY `uc_email` (`email`) USING BTREE
				) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `course_access`";
		$query = "CREATE TABLE IF NOT EXISTS `course_access` (
				  `id_course_access` int(11) NOT NULL AUTO_INCREMENT,
				  `id_course` int(11) NOT NULL,
				  `id_users` int(11) NOT NULL,
				  `course_name` varchar(250) NOT NULL,
				  `course_description` text NOT NULL,
				  `course_access_status` char(1) NOT NULL,
				  `course_activated` datetime NOT NULL,
				  `course_expired` datetime NOT NULL,
				  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_course_access)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `list_answers`";
		$query = "CREATE TABLE IF NOT EXISTS `list_answers` (
				  `id_list_answers` int(11) NOT NULL AUTO_INCREMENT,
				  `uuid_list_answers` varchar(40) NOT NULL,
				  `id_course` int(11) NOT NULL,
				  `uuid_course` varchar(40) NOT NULL,
				  `id_users` int(11) NOT NULL,
				  `list_answers` longtext,
				  `good_answers` int(11) NOT NULL,
				  `wrong_answers` int(11) NOT NULL,
				  `value_answers` int(11) NOT NULL,
				  `start_time` datetime NOT NULL,
				  `end_time` datetime NOT NULL,
				  `status_answers` enum('D','E') NOT NULL,
				  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_list_answers)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `m_packages`";
		$query = "CREATE TABLE IF NOT EXISTS `m_packages` (
				  `id_package` int(11) NOT NULL AUTO_INCREMENT,
				  `id_users` int(11) NOT NULL,
				  `uuid` varchar(40) NOT NULL,
				  `package_name` varchar(250) NOT NULL,
				  `package_description` longtext NOT NULL,
				  `package_status` char(1) NOT NULL,
				  `package_nominal` int(30) NOT NULL,
				  `package_banner` varchar(500) NOT NULL,
				  `package_type` enum('C','T') NOT NULL,
				  `package_includes` longtext, 
				  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_package)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$title = "Table structure for table `login_access`";
		$query = "CREATE TABLE IF NOT EXISTS `login_access` (
				  `id_login_access` int(11) NOT NULL AUTO_INCREMENT,
				  `id_users` int(11) NOT NULL,
				  `ip_address` varchar(250) NOT NULL,
				  `browser_name` longtext NOT NULL,
				  `login_status` char(1) NOT NULL,
				  `login_time_first` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (id_login_access)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		if ($this->db->query($query)) {
			echo "||............[Migrate successfully " . $title . "]</br>";
		} else {
			echo "||............[Migrate failed " . $title . "]</br>";
		}
		//=================================================================================================
	}


	public function insertDataTable()
	{
		//=================================================================================================
		// $title = "Dumping data for table `calsaw`";
		// $query = "INSERT IGNORE  INTO `calsaw` (`ipk`, `penghasilan`, `tanggungan`, `prestasi`, `lokasi`) VALUES
		// 			(3.92, 2, 2, 4, 100),
		// 			(3.95, 3, 2, 3, 89),
		// 			(3.4, 4, 3, 2, 70),
		// 			(4, 3, 4, 4, 120),
		// 			(3.2, 1, 2, 1, 140)";
		// if ($this->db->query($query)) {
		// 	echo "||............[Migrate successfully " . $title . "]</br>";
		// } else {
		// 	echo "||............[Migrate failed " . $title . "]</br>";
		// }
		//=================================================================================================
	}


	public function alterTable()
	{
		//=================================================================================================
		// $title = "Indexes for table `tbl_admin`";
		// $this->db->query("ALTER TABLE `tbl_admin`
		// 		  DROP PRIMARY KEY");
		// $query = "ALTER TABLE `tbl_admin`
		// 		  ADD PRIMARY KEY (`id_a`),
		// 		  ADD UNIQUE KEY `email` (`email`)";
		// if($this->db->query($query)){
		// 	echo "||............[Migrate successfully ".$title."]</br>";
		// }else{
		// 	echo "||............[Migrate failed ".$title."]</br>";
		// }

		//=================================================================================================
		$column = "id_user_master";
		$table_name = "users";
		$title = "Add Column " . $column . " to table " . $table_name;
		$query = "SELECT COUNT(*) as count FROM information_schema.columns WHERE table_schema=DATABASE() AND table_name= '" . $table_name . "' AND column_name = '" . $column . "'";
		$check = $this->db->query($query)->first_row('array');
		if ($check['count'] == '0') {
			$queryAlter = "ALTER TABLE $table_name
			ADD $column int(5);";
			if ($this->db->query($queryAlter)) {
				echo "||............[Migrate successfully " . $title . "]</br>";
			} else {
				echo "||............[Migrate failed " . $title . "]</br>";
			}
		} else {
			echo "||............[Migrate successfully " . $title . "]</br>";
		}
		//=================================================================================================
		//=================================================================================================
		$column = "question_type";
		$table_name = "m_questions";
		$title = "Add Column " . $column . " to table " . $table_name;
		$query = "SELECT COUNT(*) as count FROM information_schema.columns WHERE table_schema=DATABASE() AND table_name= '" . $table_name . "' AND column_name = '" . $column . "'";
		$check = $this->db->query($query)->first_row('array');
		if ($check['count'] == '0') {
			$queryAlter = "ALTER TABLE $table_name
			ADD $column CHAR(1) DEFAULT 'C';";
			if ($this->db->query($queryAlter)) {
				echo "||............[Migrate successfully " . $title . "]</br>";
			} else {
				echo "||............[Migrate failed " . $title . "]</br>";
			}
		} else {
			echo "||............[Migrate successfully " . $title . "]</br>";
		}
		//=================================================================================================
	}
}
