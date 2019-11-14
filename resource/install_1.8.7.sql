# Dump of table account_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `account_details`;

CREATE TABLE `account_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'en_US',
  `address` varchar(64) COLLATE utf8_unicode_ci DEFAULT '-',
  `phone` varchar(32) COLLATE utf8_unicode_ci DEFAULT '-',
  `mobile` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(40) COLLATE utf8_unicode_ci DEFAULT 'english',
  `avatar` mediumtext COLLATE utf8_unicode_ci,
  `use_gravatar` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

# Dump of table api_access
# ------------------------------------------------------------

DROP TABLE IF EXISTS `api_access`;

CREATE TABLE `api_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL DEFAULT '',
  `controller` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table api_keys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `api_keys`;

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `api_key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text COLLATE utf8_unicode_ci,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table api_limits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `api_limits`;

CREATE TABLE `api_limits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table api_logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `api_logs`;

CREATE TABLE `api_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `api_key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` tinyint(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table blog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(30) NOT NULL,
  `featured_img` char(200) NOT NULL,
  `title` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


# Dump of table captcha
# ------------------------------------------------------------

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table blog_meta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_meta`;
CREATE TABLE IF NOT EXISTS `blog_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `key` char(50) NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


# Dump of table companies
# ------------------------------------------------------------




# Dump of table config
# ------------------------------------------------------------

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `config_key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`config_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;

INSERT INTO `config` (`config_key`, `value`)
VALUES
	('captcha_login','FALSE'),
	('company_address','4146 Golden Woods'),
	('company_city','Sydney'),
	('company_country','Australia'),
	('company_domain',''),
	('company_email',''),
	('company_fax',''),
	('company_legal_name',''),
	('company_logo','logo.png'),
	('company_mobile','(123) 456 00000'),
	('company_name',''),
	('company_phone','(123) 456 78900'),
	('company_phone_2',''),
	('company_registration',''),
	('company_state','Sample State'),
	('company_vat',''),
	('company_zip_code','20300'),
	('contact_person','John Doe'),
	('cron_key','34WI2L12L87I1A65M90M9A42N41D08A26I'),
	('currency_decimals','2'),
	('currency_position','before'),
	('date_format','%d-%m-%Y'),
	('date_php_format','d-m-Y'),
	('date_picker_format','dd-mm-yyyy'),
	('decimal_separator','.'),
	('default_currency','ZAR'),
	('default_currency_symbol','R'),
	('default_language','english'),
	('disable_emails','FALSE'),
	('email_account_details','TRUE'),
	('installed','TRUE'),
	('last_check','1472718040'),
	('last_seen_activities','1469792851'),
	('locale','en_US'),
	('login_bg','bg_login.jpg'),
	('login_title','Project Management'),
	('logo_or_icon','logo_title'),
	('mailbox','INBOX'),
	('mail_encryption','tls'),
	('mail_flags','/novalidate-cert'),
	('mail_imap','TRUE'),
	('mail_imap_host','imap.gmail.com'),
	('mail_password',''),
	('mail_port','993'),
	('mail_search','UNSEEN'),
	('mail_ssl','TRUE'),
	('mail_username',''),
	('remote_login_expires','72'),
	('reset_key','34WI2L12L87I1A65M90M9A42N41D08A26I'),
	('rows_per_table','25'),
	('settings','email'),
	('site_appleicon','logo_favicon.png'),
	('site_author','William M.'),
	('site_desc','Freelancer Office is a Web based PHP project management system for Freelancers - buy it on codecanyon'),
	('site_favicon','logo_favicon.png'),
	('site_icon','fa-flask'),
	('slack_channel',''),
	('slack_notification','FALSE'),
	('slack_username',''),
	('slack_webhook',''),
	('smtp_encryption',''),
	('smtp_host','in-v3.mailjet.com'),
	('smtp_pass',''),
	('smtp_port','587'),
	('smtp_user',''),
	('stop_timer_logout','FALSE'),
	('stripe_private_key',''),
	('stripe_public_key',''),
	('support_email',''),
	('support_email_name',''),
	('swap_to_from','TRUE'),
	('system_font','roboto'),
	('tax_decimals','2'),
	('theme_color','dark'),
	('thousand_separator',','),
	('ticket_default_department','1'),
	('ticket_start_no','1'),
	('webmaster_email',''),
	('website_name',''),
	('xrates_app_id',''),
	('xrates_check','2016-08-12');

/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `value`)
VALUES
	(1,'Afghanistan'),
	(2,'Aringland Islands'),
	(3,'Albania'),
	(4,'Algeria'),
	(5,'American Samoa'),
	(6,'Andorra'),
	(7,'Angola'),
	(8,'Anguilla'),
	(9,'Antarctica'),
	(10,'Antigua and Barbuda'),
	(11,'Argentina'),
	(12,'Armenia'),
	(13,'Aruba'),
	(14,'Australia'),
	(15,'Austria'),
	(16,'Azerbaijan'),
	(17,'Bahamas'),
	(18,'Bahrain'),
	(19,'Bangladesh'),
	(20,'Barbados'),
	(21,'Belarus'),
	(22,'Belgium'),
	(23,'Belize'),
	(24,'Benin'),
	(25,'Bermuda'),
	(26,'Bhutan'),
	(27,'Bolivia'),
	(28,'Bosnia and Herzegovina'),
	(29,'Botswana'),
	(30,'Bouvet Island'),
	(31,'Brazil'),
	(32,'British Indian Ocean territory'),
	(33,'Brunei Darussalam'),
	(34,'Bulgaria'),
	(35,'Burkina Faso'),
	(36,'Burundi'),
	(37,'Cambodia'),
	(38,'Cameroon'),
	(39,'Canada'),
	(40,'Cape Verde'),
	(41,'Cayman Islands'),
	(42,'Central African Republic'),
	(43,'Chad'),
	(44,'Chile'),
	(45,'China'),
	(46,'Christmas Island'),
	(47,'Cocos (Keeling) Islands'),
	(48,'Colombia'),
	(49,'Comoros'),
	(50,'Congo'),
	(51,'Congo'),
	(52,' Democratic Republic'),
	(53,'Cook Islands'),
	(54,'Costa Rica'),
	(55,'Ivory Coast (Ivory Coast)'),
	(56,'Croatia (Hrvatska)'),
	(57,'Cuba'),
	(58,'Cyprus'),
	(59,'Czech Republic'),
	(60,'Denmark'),
	(61,'Djibouti'),
	(62,'Dominica'),
	(63,'Dominican Republic'),
	(64,'East Timor'),
	(65,'Ecuador'),
	(66,'Egypt'),
	(67,'El Salvador'),
	(68,'Equatorial Guinea'),
	(69,'Eritrea'),
	(70,'Estonia'),
	(71,'Ethiopia'),
	(72,'Falkland Islands'),
	(73,'Faroe Islands'),
	(74,'Fiji'),
	(75,'Finland'),
	(76,'France'),
	(77,'French Guiana'),
	(78,'French Polynesia'),
	(79,'French Southern Territories'),
	(80,'Gabon'),
	(81,'Gambia'),
	(82,'Georgia'),
	(83,'Germany'),
	(84,'Ghana'),
	(85,'Gibraltar'),
	(86,'Greece'),
	(87,'Greenland'),
	(88,'Grenada'),
	(89,'Guadeloupe'),
	(90,'Guam'),
	(91,'Guatemala'),
	(92,'Guinea'),
	(93,'Guinea-Bissau'),
	(94,'Guyana'),
	(95,'Haiti'),
	(96,'Heard and McDonald Islands'),
	(97,'Honduras'),
	(98,'Hong Kong'),
	(99,'Hungary'),
	(100,'Iceland'),
	(101,'India'),
	(102,'Indonesia'),
	(103,'Iran'),
	(104,'Iraq'),
	(105,'Ireland'),
	(106,'Israel'),
	(107,'Italy'),
	(108,'Jamaica'),
	(109,'Japan'),
	(110,'Jordan'),
	(111,'Kazakhstan'),
	(112,'Kenya'),
	(113,'Kiribati'),
	(114,'Korea (north)'),
	(115,'Korea (south)'),
	(116,'Kuwait'),
	(117,'Kyrgyzstan'),
	(118,'Lao People\'s Democratic Republic'),
	(119,'Latvia'),
	(120,'Lebanon'),
	(121,'Lesotho'),
	(122,'Liberia'),
	(123,'Libyan Arab Jamahiriya'),
	(124,'Liechtenstein'),
	(125,'Lithuania'),
	(126,'Luxembourg'),
	(127,'Macao'),
	(128,'Macedonia'),
	(129,'Madagascar'),
	(130,'Malawi'),
	(131,'Malaysia'),
	(132,'Maldives'),
	(133,'Mali'),
	(134,'Malta'),
	(135,'Marshall Islands'),
	(136,'Martinique'),
	(137,'Mauritania'),
	(138,'Mauritius'),
	(139,'Mayotte'),
	(140,'Mexico'),
	(141,'Micronesia'),
	(142,'Moldova'),
	(143,'Monaco'),
	(144,'Mongolia'),
	(145,'Montserrat'),
	(146,'Morocco'),
	(147,'Mozambique'),
	(148,'Myanmar'),
	(149,'Namibia'),
	(150,'Nauru'),
	(151,'Nepal'),
	(152,'Netherlands'),
	(153,'Netherlands Antilles'),
	(154,'New Caledonia'),
	(155,'New Zealand'),
	(156,'Nicaragua'),
	(157,'Niger'),
	(158,'Nigeria'),
	(159,'Niue'),
	(160,'Norfolk Island'),
	(161,'Northern Mariana Islands'),
	(162,'Norway'),
	(163,'Oman'),
	(164,'Pakistan'),
	(165,'Palau'),
	(166,'Palestinian Territories'),
	(167,'Panama'),
	(168,'Papua New Guinea'),
	(169,'Paraguay'),
	(170,'Peru'),
	(171,'Philippines'),
	(172,'Pitcairn'),
	(173,'Poland'),
	(174,'Portugal'),
	(175,'Puerto Rico'),
	(176,'Qatar'),
	(177,'Runion'),
	(178,'Romania'),
	(179,'Russian Federation'),
	(180,'Rwanda'),
	(181,'Saint Helena'),
	(182,'Saint Kitts and Nevis'),
	(183,'Saint Lucia'),
	(184,'Saint Pierre and Miquelon'),
	(185,'Saint Vincent and the Grenadines'),
	(186,'Samoa'),
	(187,'San Marino'),
	(188,'Sao Tome and Principe'),
	(189,'Saudi Arabia'),
	(190,'Senegal'),
	(191,'Serbia and Montenegro'),
	(192,'Seychelles'),
	(193,'Sierra Leone'),
	(194,'Singapore'),
	(195,'Slovakia'),
	(196,'Slovenia'),
	(197,'Solomon Islands'),
	(198,'Somalia'),
	(199,'South Africa'),
	(200,'South Georgia and the South Sandwich Islands'),
	(201,'Spain'),
	(202,'Sri Lanka'),
	(203,'Sudan'),
	(204,'Suriname'),
	(205,'Svalbard and Jan Mayen Islands'),
	(206,'Swaziland'),
	(207,'Sweden'),
	(208,'Switzerland'),
	(209,'Syria'),
	(210,'Taiwan'),
	(211,'Tajikistan'),
	(212,'Tanzania'),
	(213,'Thailand'),
	(214,'Togo'),
	(215,'Tokelau'),
	(216,'Tonga'),
	(217,'Trinidad and Tobago'),
	(218,'Tunisia'),
	(219,'Turkey'),
	(220,'Turkmenistan'),
	(221,'Turks and Caicos Islands'),
	(222,'Tuvalu'),
	(223,'Uganda'),
	(224,'Ukraine'),
	(225,'United Arab Emirates'),
	(226,'United Kingdom'),
	(227,'United States of America'),
	(228,'Uruguay'),
	(229,'Uzbekistan'),
	(230,'Vanuatu'),
	(231,'Vatican City'),
	(232,'Venezuela'),
	(233,'Vietnam'),
	(234,'Virgin Islands (British)'),
	(235,'Virgin Islands (US)'),
	(236,'Wallis and Futuna Islands'),
	(237,'Western Sahara'),
	(238,'Yemen'),
	(239,'Zaire'),
	(240,'Zambia'),
	(241,'Zimbabwe');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table currencies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `currencies`;

CREATE TABLE `currencies` (
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `symbol` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xrate` decimal(12,5) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;

INSERT INTO `currencies` (`code`, `name`, `symbol`, `xrate`)
VALUES
	('AED','United Arab Emirates Dirham','د.إ',3.67289),
	('AUD','Australian Dollar','$',1.30080),
	('BRL','Brazilian Real','R$',3.14040),
	('CAD','Canadian Dollar','$',1.29832),
	('CHF','Swiss Franc','Fr',0.97409),
	('CLP','Chilean Peso','$',648.05470),
	('CNY','Chinese Yuan','¥',6.64129),
	('CZK','Czech Koruna','Kč',24.22761),
	('DKK','Danish Krone','Kr',6.66957),
	('EUR','Euro','€',0.89650),
	('GBP','British Pound','£',0.77119),
	('HKD','Hong Kong Dollar','$',7.75631),
	('HUF','Hungarian Forint','Ft',278.03320),
	('IDR','Indonesian Rupiah','Rp',13117.60000),
	('ILS','Israeli New Shekel','₪',3.81352),
	('INR','Indian Rupee','₹',66.80453),
	('JPY','Japanese Yen','¥',101.96110),
	('KES','Kenya shillings',' KSh',101.47569),
	('KRW','Korean Won','₩',1101.70668),
	('MXN','Mexican Peso','$',18.28351),
	('MYR','Malaysian Ringgit','RM',4.01622),
	('NOK','Norwegian Krone','kr',8.24010),
	('NZD','New Zealand Dollar','$',1.38963),
	('PHP','Philippine Peso','₱',46.67836),
	('PKR','Pakistan Rupee','₨',104.58520),
	('PLN','Polish Zloty','zł',3.81973),
	('RUB','Russian Ruble','₽',64.32546),
	('SEK','Swedish Krona','kr',8.45683),
	('SGD','Singapore Dollar','$',1.34558),
	('THB','Thai Baht','฿',34.80894),
	('TRY','Turkish Lira','₺',2.95759),
	('TWD','Taiwan Dollar','$',31.37491),
	('USD','US Dollar','$',1.00000),
	('VEF','Bolívar Fuerte','Bs.',9.97100),
	('ZAR','South African Rand','R',13.38618);

/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table departments
# ------------------------------------------------------------



# Dump of table email_templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_templates`;

CREATE TABLE `email_templates` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_group` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_body` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `email_templates` WRITE;
/*!40000 ALTER TABLE `email_templates` DISABLE KEYS */;

INSERT INTO `email_templates` (`template_id`, `email_group`, `subject`, `template_body`)
VALUES
	(1,'registration','Registration successful','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Account</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br>			To open your {SITE_NAME} homepage, please follow this link:<br>			<a href=\"{SITE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>{SITE_NAME} Account</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br><br>{SITE_URL}<br><br>			Your username: {USERNAME}<br>			Your email address: {EMAIL}<br>			Your password: {PASSWORD}<br><br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(2,'forgot_password','Forgot Password','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Password</h4>\n																	<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Forgot your password, huh? No big deal.<br>To create a new password, just follow this link:<br>			<a href=\"{PASS_KEY_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Create new password</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{PASS_KEY_URL}<br><br>			You received this email, because it was requested by a {SITE_NAME} user.This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.<br><br>Thank you,<br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(3,'change_email','Change Email','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Change Email</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {NEW_EMAIL},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br>			<a href=\"{NEW_EMAIL_KEY_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Confirm Email</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{NEW_EMAIL_KEY_URL}<br><br>			Your email address: {NEW_EMAIL}<br><br>			You received this email, because it was requested by a {SITE_NAME} user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br><br>Thank you,<br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(4,'activate_account','Activate Account','                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\"> </td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\"> </td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Activate Account</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.			To verify your email address, please follow this link:<br>			<a href=\"{ACTIVATE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Complete Registration</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{ACTIVATE_URL}<br>			Please verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br><br>			Your username: {USERNAME}<br>			Your email address: {EMAIL}<br>			Your password: {PASSWORD}<br><br><br>																					Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\"> </td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\"> </td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(5,'reset_password','Reset Password','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Password</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			You have changed your password.<br>Please, keep it in your records so you don\'t forget it:<br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your new password: {NEW_PASSWORD}<br><br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(19,'message_received','Message Received','<table align=\"center\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New message received</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {RECIPIENT},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">You have received a message from <strong>{SENDER}</strong>.<br>------------------------------------------------------------------:<br><span style=\"font-style:italic;\">{MESSAGE}</span><br><br><a href=\"{SITE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Message</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	
	(27,'email_signature',NULL,'                    <p>                                        1234 Main Street, Anywhere, MA 01234, USA</p>'),
	(28,'auto_close_ticket','Ticket Auto Closed','                                        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>Ticket Closed</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {REPORTER_EMAIL},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">Ticket <strong>{SUBJECT}</strong> has been auto closed due to inactivity. <br><br>Ticket : <strong>#{TICKET_CODE}</strong><br>Status : <strong>{TICKET_STATUS}</strong><br>To see the responses or open the ticket, click on the link below:<br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(29,'project_created','Project Created','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Project Opened</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			<strong>{PROJECT_TITLE}</strong> has been opened by <span style=\"font-weight: bold;\">{CREATED_BY}</span>. You can view this project by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(30,'task_created','Task Created','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n\r\n\r\n	<tbody>\r\n\r\n\r\n		<tr>\r\n\r\n\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n\r\n\r\n				<tbody>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n\r\n\r\n							<tbody>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td width=\"560\">									<h4>Task Created</h4>\r\n\r\n\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\r\n\r\n\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			<strong>{TASK_NAME}</strong> has been created by <span style=\"font-weight: bold;\">{CREATED_BY}</span>. You can view this task by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n\r\n\r\n									</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n							</tbody>\r\n\r\n\r\n						</table>\r\n\r\n\r\n						</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n				</tbody>\r\n\r\n\r\n			</table>\r\n\r\n\r\n			</td>\r\n\r\n\r\n		</tr>\r\n\r\n\r\n	</tbody>\r\n\r\n\r\n</table>'),
	(31,'task_comment','Task Comment','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>New comment received</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new comment has been posted by <strong>{POSTED_BY}</strong> to task&nbsp;<strong>{TASK_NAME}</strong>.You can view the comment using the link below:<br><a href=\"{COMMENT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><span style=\"font-style:italic;\">{COMMENT_MESSAGE}</span><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(32,'ticket_reopened_email','Ticket [SUBJECT] reopened','                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>Ticket re-opened</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {RECIPIENT},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Ticket <b>{SUBJECT}</b> was re-opened by <b>{USER}</b>.<br>Status : Open<br>Click on the below link to see the ticket details and post replies: <br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');

/*!40000 ALTER TABLE `email_templates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table estimate_items
# ------------------------------------------------------------





# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `description` text,
  `start_date` varchar(64) DEFAULT NULL,
  `end_date` varchar(64) DEFAULT NULL,
  `project` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `color` varchar(32) DEFAULT '#38354a',
  `modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table expenses
# ------------------------------------------------------------



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) NOT NULL,
  `client_id` int(11) DEFAULT '0',
  `file_name` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ext` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `is_image` int(2) DEFAULT NULL,
  `image_width` int(5) DEFAULT NULL,
  `image_height` int(5) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table hooks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hooks`;

CREATE TABLE `hooks` (
  `module` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `parent` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hook` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) DEFAULT NULL,
  `access` int(2) NOT NULL,
  `core` int(2) DEFAULT NULL,
  `visible` int(2) DEFAULT '1',
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `last_run` datetime DEFAULT NULL,
  PRIMARY KEY (`module`,`hook`,`access`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




# Dump of table invoices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `allow_paypal` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_braintree` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'Yes',
  `braintree_merchant_ac` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allow_stripe` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_2checkout` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'Yes',
  `allow_bitcoin` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax2` decimal(10,2) DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `recurring` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `r_freq` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '31',
  `recur_start_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_end_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_frequency` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_next_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `status` enum('Unpaid','Paid') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) DEFAULT '0',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inv_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `viewed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `alert_overdue` int(11) DEFAULT '0',
  `extra_fee` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`inv_id`),
  UNIQUE KEY `reference_no` (`reference_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table items
# ------------------------------------------------------------




# Dump of table languages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;

INSERT INTO `languages` (`code`, `name`, `icon`, `active`)
VALUES
	('cs','czech','cs',1),
	('de','german','de',1),
	('el','greek','gr',1),
	('en','english','us',1),
	('es','spanish','es',1),
	('fr','french','fr',1),
	('hr','croatian','hr',0),
	('it','italian','it',1),
	('nl','dutch','nl',1),
	('no','norwegian','no',1),
	('pl','polish','pl',1),
	('pt','portuguese','pt',1),
	('pt-br','portuguese-brazilian','pt',1),
	('ro','romanian','ro',1),
	('ru','russian','ru',1),
	('sr','serbian','sr',0),
	('tr','turkish','tr',1);

/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;




# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `media_name` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `media_url` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

# Dump of table login_attempts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` int(11) DEFAULT NULL,
  `user_from` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `status` enum('Read','Unread') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unread',
  `attached_file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `favourite` int(11) DEFAULT '0',
  `deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


# Dump of table outgoing_emails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `outgoing_emails`;

CREATE TABLE `outgoing_emails` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sent_to` varchar(64) DEFAULT NULL,
  `sent_from` varchar(64) DEFAULT NULL,
  `subject` text,
  `message` longtext,
  `date_sent` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `delivered` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` char(50) NOT NULL,
  `show_in_menu` int(1) NOT NULL DEFAULT '1',
  `layout` int(1) NOT NULL,
  `content_from` char(10) NOT NULL DEFAULT 'Manual',
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` char(150) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sidebar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo_settings` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `editable` int(1) NOT NULL DEFAULT '1',
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sale_type` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `property_type` int(11) NOT NULL,
  `rooms` int(4) NOT NULL,
  `bathrooms` int(4) NOT NULL,
  `parking` char(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords` char(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` char(150) NOT NULL,
  `conditions` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `city` varchar(150) NOT NULL,
  `featured_img` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gallery` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `street_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `publish_time` date NOT NULL,
  `status` int(1) NOT NULL,
  `featured` int(1) NOT NULL DEFAULT '0',
  `report` int(11) NOT NULL DEFAULT '0',
  `total_view` int(10) NOT NULL DEFAULT '0',
  `search_meta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`unique_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


# Dump of table plugins
# ------------------------------------------------------------



# Dump of table priorities
# ------------------------------------------------------------





# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(64) NOT NULL,
  `default` int(11) NOT NULL,
  `permissions` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `role`, `default`, `permissions`)
VALUES
	(1,'superadmin',1,''),
	(2,'admin',2,''),
	(4,'client',4,''),
	(3,'author',3,'');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table slideshow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slideshow`;

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `Content` text NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;

INSERT INTO `status` (`id`, `status`)
VALUES
	(1,'New'),
	(2,'Sold'),
	(3,'Not Available'),
	(5,'Taken'),
	(6,'Reduced'),
	(7,'Increased');

/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table provinces
# ------------------------------------------------------------


DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table subcities
# ------------------------------------------------------------



DROP TABLE IF EXISTS `subcities`;

CREATE TABLE `subcities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postal` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table cities
# ------------------------------------------------------------




DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table sliders
# ------------------------------------------------------------


DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `order_number` text NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table tickets
# ------------------------------------------------------------



# Dump of table todo
# ------------------------------------------------------------



# Dump of table un_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `un_sessions`;

CREATE TABLE `un_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table updates
# ------------------------------------------------------------




# Dump of table user_autologin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_autologin`;

CREATE TABLE `user_autologin` (
  `key_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expires` timestamp NULL DEFAULT NULL,
  `remote` int(2) DEFAULT '0',
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
