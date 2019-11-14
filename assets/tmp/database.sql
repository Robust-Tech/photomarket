--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `config_key` varchar(255) NOT NULL,
  `value` text NOT NULL,
    PRIMARY KEY (`config_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_key`, `value`) VALUES
('allowed_files', 'gif|png|jpeg|jpg|pdf|doc|txt|docx|xls|zip|rar|xls|mp4'),
('welcome_subtitle', '0'),
('welcome_text', 'success'),
('captcha_login', 'FALSE'),
('keywords', '#11A7DB'),
('company_address', '4146 Golden Woods'),
('company_city', 'Sydney'),
('company_country', 'Australia'),
('company_domain', 'http://datavisuals.co.za/mylms/'),
('company_email', 'lesley@datavisuals.co.za'),
('company_fax', ''),
('company_legal_name', 'My School Demo'),
('company_logo', 'logo.png'),
('company_mobile', '(123) 456 00000'),
('company_name', 'My School Demo'),
('company_phone', '(123) 456 78900'),
('min_width_height_image', ''),
('site_desc', ''),
('company_state', 'Sample State'),
('limit_upload_user', ''),
('company_zip_code', '20300'),
('contact_person', 'Lesley M Mphahlele'),
('cron_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
('date_format', '%d-%m-%Y'),
('date_php_format', 'd-m-Y'),
('date_picker_format', 'dd-mm-yyyy'),
('decimal_separator', '.'),
('logo_or_icon', 'logo_title'),
('mailbox', 'INBOX'),
('mail_encryption', 'tls'),
('mail_flags', '/novalidate-cert'),
('mail_imap', 'TRUE'),
('mail_imap_host', 'imap.gmail.com'),
('mail_password', ''),
('mail_port', '993'),
('mail_search', 'UNSEEN'),
('mail_ssl', 'TRUE'),
('notify_message_received', 'TRUE'),
('pdf_engine', 'mpdf'),
('postapi_key', ''),
('postfrom_address', 'lesley@datavisuals.co.za'),
('remote_login_expires', '72'),
('reset_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
('rows_per_table', '25'),
('settings', 'email'),
('show_login_image', 'TRUE'),
('show_only_logo', 'FALSE'),
('show_time_ago', 'TRUE'),
('sidebar_theme', 'dark'),
('site_appleicon', 'icon.png'),
('site_favicon', 'icon.png'),
('site_icon', 'fa-flask'),
('slack_channel', ''),
('slack_notification', 'FALSE'),
('slack_username', ''),
('mgs_char_length', ''),
('comments_char_length', '0'),
('description', '4146 Golden Woods'),
('upload_limit', ''),
('pagination_limit', ''),
('facebook', ''),
('twitter', ''),
('instagram', ''),
('google_analytics', ''),
('linkedin', ''),
('tags_limit', 'My School Demo'),
('slack_webhook', ''),
('smtp_encryption', ''),
('smtp_host', 'in-v3.mailjet.com'),
('smtp_pass', ''),
('smtp_port', '587'),
('smtp_user', 'lesley@datavisuals.co.za'),
('stop_timer_logout', 'FALSE'),
('support_email', 'lesley@datavisuals.co.za'),
('support_email_name', 'My School Demo Support'),
('google_client_id', null),
('google_client_secret', null),
('file_size_allowed', null),
('paypal_email', null),
('paypal_currency', null),
('payment_enabled', '1'),
('swap_to_from', 'TRUE'),
('system_font', 'roboto'),
('use_alternate_emails', 'TRUE'),
('theme', 'default'),
('website_name', 'My School Demo'),
('xrates_app', ''),
('xrates_check', '2016-08-12');
--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `value` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `value`) VALUES
(1, 'Afghanistan'),
(2, 'Aringland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bosnia and Herzegovina'),
(29, 'Botswana'),
(30, 'Bouvet Island'),
(31, 'Brazil'),
(32, 'British Indian Ocean territory'),
(33, 'Brunei Darussalam'),
(34, 'Bulgaria'),
(35, 'Burkina Faso'),
(36, 'Burundi'),
(37, 'Cambodia'),
(38, 'Cameroon'),
(39, 'Canada'),
(40, 'Cape Verde'),
(41, 'Cayman Islands'),
(42, 'Central African Republic'),
(43, 'Chad'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos (Keeling) Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Congo'),
(52, ' Democratic Republic'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Ivory Coast (Ivory Coast)'),
(56, 'Croatia (Hrvatska)'),
(57, 'Cuba'),
(58, 'Cyprus'),
(59, 'Czech Republic'),
(60, 'Denmark'),
(61, 'Djibouti'),
(62, 'Dominica'),
(63, 'Dominican Republic'),
(64, 'East Timor'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Heard and McDonald Islands'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Indonesia'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Ireland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea (north)'),
(115, 'Korea (south)'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Lao People\'s Democratic Republic'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libyan Arab Jamahiriya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macao'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malawi'),
(131, 'Malaysia'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Micronesia'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Namibia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherlands'),
(153, 'Netherlands Antilles'),
(154, 'New Caledonia'),
(155, 'New Zealand'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'Northern Mariana Islands'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau'),
(166, 'Palestinian Territories'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Runion'),
(178, 'Romania'),
(179, 'Russian Federation'),
(180, 'Rwanda'),
(181, 'Saint Helena'),
(182, 'Saint Kitts and Nevis'),
(183, 'Saint Lucia'),
(184, 'Saint Pierre and Miquelon'),
(185, 'Saint Vincent and the Grenadines'),
(186, 'Samoa'),
(187, 'San Marino'),
(188, 'Sao Tome and Principe'),
(189, 'Saudi Arabia'),
(190, 'Senegal'),
(191, 'Serbia and Montenegro'),
(192, 'Seychelles'),
(193, 'Sierra Leone'),
(194, 'Singapore'),
(195, 'Slovakia'),
(196, 'Slovenia'),
(197, 'Solomon Islands'),
(198, 'Somalia'),
(199, 'South Africa'),
(200, 'South Georgia and the South Sandwich Islands'),
(201, 'Spain'),
(202, 'Sri Lanka'),
(203, 'Sudan'),
(204, 'Suriname'),
(205, 'Svalbard and Jan Mayen Islands'),
(206, 'Swaziland'),
(207, 'Sweden'),
(208, 'Switzerland'),
(209, 'Syria'),
(210, 'Taiwan'),
(211, 'Tajikistan'),
(212, 'Tanzania'),
(213, 'Thailand'),
(214, 'Togo'),
(215, 'Tokelau'),
(216, 'Tonga'),
(217, 'Trinidad and Tobago'),
(218, 'Tunisia'),
(219, 'Turkey'),
(220, 'Turkmenistan'),
(221, 'Turks and Caicos Islands'),
(222, 'Tuvalu'),
(223, 'Uganda'),
(224, 'Ukraine'),
(225, 'United Arab Emirates'),
(226, 'United Kingdom'),
(227, 'United States of America'),
(228, 'Uruguay'),
(229, 'Uzbekistan'),
(230, 'Vanuatu'),
(231, 'Vatican City'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Virgin Islands (British)'),
(235, 'Virgin Islands (US)'),
(236, 'Wallis and Futuna Islands'),
(237, 'Western Sahara'),
(238, 'Yemen'),
(239, 'Zaire'),
(240, 'Zambia'),
(241, 'Zimbabwe');
--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userid` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `email` varchar(500) NOT NULL DEFAULT '',
  `processor` varchar(255) NOT NULL,
  `hash` varchar(500) NOT NULL,
  `paymentDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','pending') NOT NULL DEFAULT 'pending',
  `token_id` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `camera` varchar(255) NOT NULL,
  `featured` enum('yes','no') NOT NULL DEFAULT 'no',
  `featured_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Table structure for table `hooks`
--

CREATE TABLE IF NOT EXISTS `hooks` (
  `module` varchar(128) NOT NULL,
  `parent` varchar(128) DEFAULT NULL,
  `hook` varchar(128) NOT NULL DEFAULT '0',
  `icon` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(10) DEFAULT NULL,
  `access` int(2) NOT NULL,
  `core` int(2) DEFAULT NULL,
  `visible` int(2) DEFAULT '1',
  `permission` varchar(255) DEFAULT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `last_run` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `payment_plans`
--
CREATE TABLE IF NOT EXISTS `pricing` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL DEFAULT '',
  `content` tinytext NOT NULL,
  `planType` int(11) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `num_of_pictures` int(11) NOT NULL,
  `sales` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `user_package`;
CREATE TABLE IF NOT EXISTS `user_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` char(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `request_date` date NOT NULL,
  `activation_date` date NOT NULL,
  `expirtion_date` date NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0=no,2=pending,1=active',
  `status` int(1) NOT NULL COMMENT '0=deleted,1=active',
  `payment_medium` char(20) NOT NULL DEFAULT 'paypal',
  `response_log` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`unique_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



--
-- Table structure for table `user_notification`
--
CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userid` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fromid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
--
-- Table structure for table `email_templates`
--

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `subjects`
--

CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_to` int(11) DEFAULT NULL,
  `user_from` int(11) DEFAULT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` enum('read','unread') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unread',
  `attached_file` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `favourite` int(11) DEFAULT '0',
  `deleted` enum('yes','no') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_emails`
--

CREATE TABLE `outgoing_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `sent_to` varchar(64) DEFAULT NULL,
  `sent_from` varchar(64) DEFAULT NULL,
  `subject` text,
  `message` longtext,
  `date_sent` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `delivered` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `settings`
--



CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `post_status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `mode` enum('on','off') NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`,  `mode`) VALUES
(1, 'Uncategorized', 'uncategorized', 'on'),
(2, 'Animals', 'animals', 'on'),
(3, 'Architecture', 'architecture', 'on'),
(4, 'Foods & Drinks', 'foods-drinks', 'on'),
(5, 'Music', 'music', 'on'),
(6, 'People', 'people', 'on'),
(7, 'Places', 'places', 'on'),
(8, 'Sports', 'sports', 'on'),
(9, 'Travel', 'travel', 'on'),
(10, 'Fashion', 'fashion', 'on'),
(11, 'Transportation / Cars', 'cars', 'on'),
(12, 'Nature / Landscapes', 'nature-landscapes', 'on'),
(13, 'Backgrounds / Textures', 'backgrounds', 'on'),
(14, 'Business / Finance', 'business', 'on'),
(15, 'Computer / Communication', 'computer', 'on'),
(16, 'Education', 'education', 'on'),
(17, 'Emotions', 'emotions', 'on'),
(18, 'Health / Medical', 'health', 'on'),
(19, 'Industry / Craft', 'industry', 'on'),
(20, 'Religion', 'religion', 'on'),
(21, 'Science / Technology', 'science-technology', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('public','private') NOT NULL DEFAULT 'public'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `collections_images`
--

CREATE TABLE `collections_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `collections_id` int(10) UNSIGNED NOT NULL,
  `images_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `class_routine`
--

CREATE TABLE `pages` (
  `id` int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`) VALUES
(1, 'Help', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'help'),
(2, 'Terms', '<h1>AFRICAN PHOTO STOCK CONTENT LICENSE AGREEMENT</h1>\r\n\r\n<h2>LAST UPDATED: August 2018</h2>\r\n\r\n<p>This is a license agreement between you and African Photo Stock that explains how you can use photos, illustrations, vectors and video clips that you license from African Photo Stock. By downloading content from African Photo Stock, you accept the terms of this agreement.</p>\r\n\r\n<ol>\r\n	<li>What types of licenses does African Photo Stock offer?</li>\r\n</ol>\r\n\r\n<p>African Photo Stock offers two types of licenses: standard and extended. Every file downloaded from African Phot Stock comes with a standard license. An extended license gives you additional rights in exchange for an additional license fee. Unless you purchase an extended license, your use of content is subject to the standard license terms.</p>\r\n\r\n<p>You can license files from African Photo Stock with credits or a subscription. African Photo Stock offers you the ability to purchase credits in preset packs to be used to download photo, illustration, vector and video files. The more credits you purchase, the more you save. African Photo Stock also offers monthly or annual subscriptions, which allow you to download a certain number of photos, illustrations or vectors per month and save even more.</p>\r\n\r\n<p>You are welcome to use watermarked content from the African Photo Stock site on a complimentary basis for test or sample (comp) use only. Watermarked content cannot be used in any final materials or any publicly available materials and may only be used for the 30 days following download.</p>\r\n\r\n<ol>\r\n	<li>How can I use licensed content?</li>\r\n</ol>\r\n\r\n<p>You may use content in any way that is not restricted (see Restricted Uses below). Subject to those restrictions and the rest of the terms of this agreement, the rights granted to you by African Photo Stock are:</p>\r\n\r\n<ul>\r\n	<li><strong>Perpetual</strong>, meaning there is no expiration or end date on your rights to use the content. The only exception to perpetual rights is for content downloaded on a subscription and not used within 30 days after the end of your subscription. Please see Section&nbsp;<a href=\"https://www.istockphoto.com/za/legal/license-agreement#termination\" target=\"_self\">8</a>&nbsp;for more information.</li>\r\n	<li><strong>Non-exclusive</strong>, meaning that you do not have exclusive rights to use the content. African Photo Stock can license the same content to other customers.</li>\r\n	<li><strong>Unlimited</strong>, meaning you can use the content in an unlimited number of projects and in any media.</li>\r\n</ul>\r\n\r\n<p>For purposes of this agreement, &quot;use&quot; means to copy, reproduce, modify, edit, synchronize, perform, display, broadcast, publish, or otherwise make use of.</p>\r\n\r\n<p><strong>Examples of how you can use licensed content include:</strong>&nbsp;websites; blog posts; social media; advertisements; marketing campaigns; corporate presentations; newspapers; magazines; books; film and television productions; web and mobile applications; product packaging.</p>\r\n\r\n<p>Please make sure you read the Restricted Uses section below for exceptions.</p>\r\n\r\n<ol>\r\n	<li>Restricted Uses.\r\n	<ul>\r\n		<li><strong>No Unlawful Use.</strong>&nbsp;You may not use content in a pornographic, defamatory or other unlawful manner.</li>\r\n		<li><strong>No Commercial Use of &quot;Editorial Use Only&quot; Content.</strong>&nbsp;You may not use content marked &quot;editorial use only&quot; for any commercial, promotional, advertorial, endorsement, advertising or merchandising purpose. This type of content is not model or property released and is intended to be used only in connection with events that are newsworthy or of general interest (for example, in a blog, textbook, newspaper or magazine article).</li>\r\n		<li><strong>No Standalone File Use.</strong>&nbsp;You may not use content in any way that allows others to download, extract, or redistribute content as a standalone file (meaning just the content file itself, separate from the project or end use).</li>\r\n		<li><strong>No Use in Trademark or Logo.</strong>&nbsp;You may not use content as part of a trademark, design mark, tradename, business name, service mark, or logo.</li>\r\n		<li><strong>No Subscription Abuse.</strong>&nbsp;You may not stockpile, download or otherwise store content not used in a project or end use within 30 days after the end of your subscription for future use.</li>\r\n		<li><strong>Sensitive Use Disclaimer Required.</strong>&nbsp;If you use content that features models or property in connection with a subject that would be unflattering or unduly controversial to a reasonable person (for example, sexually transmitted diseases), you must indicate: (1) that the content is being used for illustrative purposes only, and (2) any person depicted in the content is a model. For example, you could say: &quot;Stock photo. Posed by model.&quot; No disclaimer is required for &quot;editorial use only&quot; content that is used in an editorial manner.</li>\r\n		<li><strong>No False Representation of Authorship.</strong>&nbsp;You may not falsely represent that you are the original creator of a work that is made up largely of licensed content. For instance, you cannot create a painting based solely on licensed content and claim that you are the author.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Restricted Uses - unless extended license purchased.</strong>&nbsp;Extended licenses are only available for purchase with credits on a file by file basis.</p>\r\n\r\n<ol>\r\n	<li><strong>No Products for Resale.</strong>&nbsp;Unless you purchase an extended license, you may not use content in connection with any goods or services intended for resale or distribution&nbsp;<strong>where the primary value</strong>&nbsp;lies in the content itself including, without limitation, cards, stationery items, paper products, calendars, apparel items, posters (printed on paper, canvas, or any other media), DVDs, mobile applications or other items for resale, license or other distribution for profit. This includes &quot;on demand&quot; products (meaning products in which content is selected by a third party for customization on such product on a made-to-order basis), including, without limitation, postcards, mugs, t-shirts, posters and other items (this includes the sale of products through custom designed websites, as well as sites such as zazzle.com and cafepress.com)</li>\r\n	<li><strong>No Electronic Templates.</strong>&nbsp;Unless you purchase an extended license, you may not use content in electronic or digital templates intended for resale or other distribution (for example, website templates, business card templates, electronic greeting card templates, brochure design templates).</li>\r\n</ol>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:694px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Restriction</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Products for resale/ Electronic templates</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Standard License</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Not permitted</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Extended License</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Up to 100,000</strong>&nbsp;postcards, greeting cards or other cards, stationery, stickers and paper products;</p>\r\n\r\n			<p><strong>Up to 10,000</strong>&nbsp;posters, calendars or other similar publications, mugs or mousepads; or</p>\r\n\r\n			<p><strong>Up to 2,000</strong>&nbsp;t-shirts, sweatshirts, or other apparel, games, toys, entertainment goods like CDs or DVDs, framed or mounted artwork.</p>\r\n\r\n			<p><strong>Unlimited</strong>&nbsp;for electronic products such as mobile applications and electronic templates.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n	<li><strong>Limited print run</strong>. Unless you purchase an extended license, you may not reproduce the content more than 500,000 times in physical print form. This restriction does not apply to electronic reproduction.</li>\r\n</ol>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:694px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Restriction</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Print run</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Standard License</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>500,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:228px\">\r\n			<p><strong>Extended License</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Unlimited</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n	<li>Who, besides me, can use the licensed content?</li>\r\n</ol>\r\n\r\n<p>The rights granted to you are&nbsp;<strong>non-transferable</strong>&nbsp;and&nbsp;<strong>non-sublicensable</strong>, meaning that you cannot transfer or sublicense them to anyone else. There are two exceptions:</p>\r\n\r\n<ul>\r\n	<li><strong>Employer or client.</strong>&nbsp;If you are purchasing on behalf of your employer or client, then your employer or client can use the content. In that case, you represent and warrant that you have full legal authority to bind your employer or client to the terms of this agreement. If you do not have that authority, then your employer or client may not use the content.</li>\r\n	<li><strong>Subcontractors.</strong>&nbsp;You may allow subcontractors (for example, your printer or mailing house) or distributors to use content in any production or distribution process related to your final project or end use. These subcontractors and distributors may not use the content for any other purpose.</li>\r\n</ul>\r\n\r\n<p>Please note that seat/user restrictions apply. You may only use the content with appropriate amount of users, as explained in Section 5 below.</p>\r\n\r\n<ol>\r\n	<li>Are there any seat/user license restrictions?</li>\r\n</ol>\r\n\r\n<p>Yes. The standard license or subscription is for a single user. The seat/user restrictions refer to the raw file of content, not the end project or use.</p>\r\n\r\n<p><strong>If you licensed the content with credits</strong>, this means that you may share content within your organization but the content may only be available to one person at any one time. Unless you purchase an extended license, you may not store the content on a server (giving more than one person simultaneous access to the content).</p>\r\n\r\n<p><strong>If you licensed the content with a subscription</strong>, this means that only one person (the same person) may access, license and use the content.</p>\r\n\r\n<p><strong>If you need more than a single user to access the content:</strong></p>\r\n\r\n<ul>\r\n	<li>If you licensed the content with credits, you must purchase a multi-seat extended license with credits</li>\r\n	<li>If you licensed the content with a subscription, please contact African Photo Stock to discuss TeamShare, our multi-user subscription. If you purchase a multi-user subscription, African Photo Stock will provide you with the number of user accounts specified on your invoice.</li>\r\n</ul>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:712px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:355px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:356px\">\r\n			<p><strong>Number of Permitted Users</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:355px\">\r\n			<p><strong>Standard License - credits</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>1 user at a time.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:355px\">\r\n			<p><strong>Extended License - credits</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Unlimited users within an organization. Can save content on organization servers.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:355px\">\r\n			<p><strong>Standard License - subscription</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>1 user can access, download and use content</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:34px; width:355px\">\r\n			<p><strong>TeamShare - subscription</strong></p>\r\n			</td>\r\n			<td style=\"height:34px\">\r\n			<p>More than 1 user to access, download or use content - contact African Photo Stock for details</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n	<li>User Accounts.</li>\r\n</ol>\r\n\r\n<p>You will be responsible for tracking all activity for each user account, and you agree to: (1) maintain the security of all passwords and usernames; (2) notify African Photo Stock immediately of any unauthorized use or other breach of security; and (3) accept all responsibility for activity that occurs under each user account. African Photo Stock reserves the right to monitor downloads and user activity to ensure compliance with the terms of this agreement. If African Photo Stock determines that you are in breach of this or any other term of this agreement, it may suspend access to your account and seek further legal remedies.</p>\r\n\r\n<ol>\r\n	<li>Intellectual property rights.\r\n	<ul>\r\n		<li><strong>Who owns the content?</strong><br />\r\n		All of the licensed content is owned by either African Photo Stock or the artists who supply the content. All rights not expressly granted in this agreement are reserved by African Photo Stock and the content suppliers.</li>\r\n		<li><strong>Attribution.</strong>\r\n		<ul>\r\n			<li><strong>Do I need to include a photo credit?</strong>&nbsp;You do not need to include a photo credit for commercial use, but if you are using content for editorial purposes, you must include the following credit adjacent to the content or in visual production credits: &quot;African Photo Stock.com/Artist&#39;s Member Name.&quot;</li>\r\n			<li><strong>Do I need to include a video credit?</strong>&nbsp;Yes, if technically feasible, you must include the following credit in visual productions: &quot;African Photo Stock.com/Artist&#39;s Member Name.&quot;</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>Termination/Cancellation/Withdrawal.\r\n	<ul>\r\n		<li><strong>Termination.</strong><br />\r\n		Except in the case of subscriptions, this agreement is effective until it is terminated by either party. You can terminate this agreement by ceasing use of the content and deleting or destroying any copies. African Photo Stock may terminate this agreement at any time if you fail to comply with any of the terms, in which case you must immediately: cease using the content; delete or destroy any copies; and, if requested, confirm to African Photo Stock in writing that you have complied with these requirements.\r\n		<ul>\r\n			<li><strong>Subscription Termination.</strong>&nbsp;Unless renewed, subscription agreements terminate automatically at the end of the subscription period, with a 30 day grace period to use any content downloaded during the subscription term in a project or other end use. Content incorporated into projects or end uses prior to the expiration of the grace period may continue to be used in perpetuity in that project and in any other projects. Any content not included in a project at the end of the 30 day grace period is not considered licensed and must be deleted. Any content that is used within the 30 day grace period remains subject to the terms of this agreement. African Photo Stock may terminate any licenses before the end of the subscription period if it reasonably believes there is a violation of this agreement and/or abuse of the subscription account, in which case you must immediately: cease using the content; delete or destroy any copies; confirm to African Photo Stock in writing that you have complied with these requirements; and pay African Photo Stock any amounts which remain owing to the end of the term of your subscription as set on your invoice.</li>\r\n			<li><strong>Social Media Termination.</strong>&nbsp;If you use the content on a social media platform or other third party website and the platform or website uses (or announces that it plans to use) the content for its own purpose or in a way that is contrary to this agreement, this agreement shall immediately terminate.</li>\r\n		</ul>\r\n		</li>\r\n		<li><strong>Refunds/Cancellation.</strong>\r\n		<ul>\r\n			<li>Credit Pack Refunds -&nbsp;<strong>Refunds for credit pack purchases can be made within 14 days of your invoice date, provided that you have not used any credits from the pack.</strong></li>\r\n			<li><strong>Subscription Refunds</strong>&nbsp;- Refunds for subscriptions can be made within 14 days of your invoice date, provided you have not downloaded more than 5 images and have not made use of any downloaded content.</li>\r\n			<li><strong>File Download Refunds</strong>&nbsp;- African Photo Stock does not offer refunds or re-credits for downloaded files. File returns will only be considered based on technical issues with the file at the sole discretion of African Photo Stock.</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>All requests for refunds/cancellations must be made in writing. If the request is approved, African Photo Stock will issue a credit to your account or credit card. In the event of cancellation, your rights to use the content terminate, and you must delete or destroy any copies of the content.</p>\r\n\r\n<ol>\r\n	<li><strong>Content Withdrawal.</strong><br />\r\n	African Photo Stock may discontinue licensing any item of content at any time in its sole discretion. Upon notice from African Photo Stock, or upon your knowledge, that any content may be subject to a claim of infringement of a third party&#39;s right for which African Photo Stock may be liable, African Photo Stock may require you to immediately, and at your own expense: cease using the content, delete or destroy any copies; and ensure that your clients, distributors and/or employer do likewise. African Photo Stock will provide you with replacement content (determined by African Photo Stock in its reasonable commercial judgment) free of charge, subject to the other terms of this agreement.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Representations and Warranties.</li>\r\n</ol>\r\n\r\n<p>African Photo Stock makes the following representations and warranties:</p>\r\n\r\n<ul>\r\n	<li><strong>Warranty of Non-Infringement.</strong>&nbsp;Except with respect to content identified as &quot;editorial use only,&quot; your use of the content in accordance with this agreement and in the form delivered by African Photo Stock will not infringe on any copyright, moral right, trademark or other intellectual property right and will not violate any right of privacy or right of publicity; and all necessary model and/or property releases for use of the content in the manner authorized by this agreement have been obtained. Note that you are solely responsible for any edits made to the content (whether using an African Photo Stock editing tool or otherwise).</li>\r\n	<li><strong>&quot;Editorial Use Only&quot; Warranty Disclaimer.</strong>&nbsp;For content identified as &quot;editorial use only,&quot; African Photo Stock warrants that the content will not infringe on any copyright or moral right of the artist, but it does not grant any right or make any warranty with regard to the use of names, people, trademarks, trade dress, logos, registered, unregistered or copyrighted designs, works of art or architecture depicted or contained in the content. In such cases, you are solely responsible for determining whether release(s) is/are required in connection with your proposed use of the content identified as &quot;editorial use only,&quot; and you are solely responsible for obtaining such release(s). You acknowledge that no releases are generally obtained for content identified as &quot;editorial use only,&quot; and that some jurisdictions provide legal protection against a person&#39;s image, likeness or property being used for commercial purposes when they have not provided a release.</li>\r\n	<li><strong>Caption/Metadata Disclaimer.</strong>&nbsp;While we have made reasonable efforts to correctly categorize, keyword, caption and title the content, African Photo Stock does not warrant the accuracy of such information, or of any metadata provided with the content.</li>\r\n	<li><strong>No Other Warranties.</strong>&nbsp;Except as provided in the &quot;warranty of non-infringement&quot; section above, the content is provided &quot;as is&quot; without representation, warranty or condition of any kind, either express or implied, including, but not limited to, implied representations, warranties or conditions of merchantability, or fitness for a particular purpose. African Photo Stock does not represent or warrant that the content will meet your requirements or that its use will be uninterrupted or error free.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Indemnification/Limitation of Liability.\r\n	<ul>\r\n		<li><strong>Indemnification of African Photo Stock by you.</strong>&nbsp;You agree to defend, indemnify and hold harmless African Photo Stock and its parent, subsidiaries, affiliates, and content suppliers, and each of their respective officers, directors and employees from all damages, liabilities and expenses (including reasonable outside legal fees) arising out of or in connection with any breach or alleged breach by you (or anyone acting on your behalf) of any of the terms of this agreement.</li>\r\n		<li><strong>Indemnification of you by African Photo Stock.</strong>&nbsp;Provided that the content is only used in accordance with this agreement and you are not otherwise in breach of this agreement, and as your sole and exclusive remedy for any breach of the warranties set forth in Section 9(<a href=\"https://www.istockphoto.com/za/legal/license-agreement#non-infringe-warranty\" target=\"_self\">a</a>) above, African Photo Stock agrees, subject to the terms of this Section&nbsp;<a href=\"https://www.istockphoto.com/za/legal/license-agreement#indemnification\" target=\"_self\">10</a>, to defend, indemnify and hold harmless you, your corporate parent, subsidiaries and affiliates, and each of your respective officers, directors and employees from all damages, liabilities and expenses (including reasonable outside legal fees) arising out of or in connection with any breach or alleged breach by African Photo Stock of its warranty in Section 9(<a href=\"https://www.istockphoto.com/za/legal/license-agreement#non-infringe-warranty\" target=\"_self\">a</a>) above. This indemnification does not apply to the extent any damages, costs or losses arise out of or are a result of modifications made by you to the content or the context in which the content is used by you. This indemnification also does not apply to your continued use of content following notice from African Photo Stock, or upon your knowledge, that the content is subject to a claim of infringement of a third party&#39;s right.\r\n		<ul style=\"list-style-type:square\">\r\n			<li><strong>Extended Legal Guarantee.</strong>&nbsp;Unless you purchase an extended license, African Photo Stock&#39;s total maximum aggregate liability (meaning the total amount African Photo Stock is responsible for, whether under this agreement or any other agreement for the same content) is limited to $10,000 US dollars per item of content. This limit applies regardless of the number of times you license the same piece of content from African Photo Stock. Under an extended license, this amount is increased to $250,000 US dollars per item of content. If you need a higher indemnification amount, please contact African Photo Stock.</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:712px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:237px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:237px\">\r\n			<p><strong>Standard License</strong></p>\r\n			</td>\r\n			<td style=\"width:237px\">\r\n			<p><strong>Extended License</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:237px\">\r\n			<p><strong>Legal Guarantee Amount</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>$10,000 per item of content</p>\r\n			</td>\r\n			<td>\r\n			<p>$250,000 per item of content</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>The party seeking indemnification must promptly notify in writing the other party about the claim. The indemnifying party (the one covering the costs) has the right to assume the handling, settlement or defense of any claim or litigation, in which case the indemnified party (the one not covering the costs) has to cooperate in any way reasonably requested by the indemnifying party. The indemnifying party will not be liable for legal fees and other costs incurred prior to the other party giving notice of the claim for which indemnity is sought.</p>\r\n\r\n<p><strong>Limitation of Liability. AFRICAN PHOTO STOCK WILL NOT BE LIABLE TO YOU OR ANY OTHER PERSON OR ENTITY FOR ANY PUNITIVE, SPECIAL, INDIRECT, CONSEQUENTIAL, INCIDENTAL OR OTHER SIMILAR DAMAGES, COSTS OR LOSSES ARISING OUT OF THIS AGREEMENT, EVEN IF AFRICAN PHOTO STOCK HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, COSTS OR LOSSES. SOME JURISDICTIONS DO NOT PERMIT THE EXCLUSION OR LIMITATION OF IMPLIED WARRANTIES OR LIABILITY.</strong></p>\r\n\r\n<ol>\r\n	<li>General Provisions.\r\n	<ol>\r\n		<li><strong>Assignment.</strong>&nbsp;This agreement is personal to you and is not assignable by you without African Photo Stock&#39;s prior written consent. African Photo Stock may assign this agreement, without notice or consent, to any corporate affiliate or to any successor in interest, provided that such entity agrees to be bound by these terms.</li>\r\n		<li><strong>Audit/Certificate of Compliance.</strong>&nbsp;Upon reasonable notice, you agree to provide to African Photo Stock sample copies of projects or end uses that contain licensed content, including by providing African Photo Stock with free of charge access to any pay-walled or otherwise restricted access website or platform where content is reproduced. In addition, upon reasonable notice, African Photo Stock may, at its discretion, either through its own employees or through a third party, audit your records directly related to this agreement and your use of licensed content in order to verify compliance with the terms of this agreement. If any audit reveals an underpayment by you to African Photo Stock of five percent (5%) or more of the amount you should have paid, then in addition to paying African Photo Stock the amount of the underpayment, you also agree to reimburse African Photo Stock for the costs of conducting the audit. Where African Photo Stock reasonably believes that content is being used outside of the scope of the license granted under this agreement, you agree, at African Photo Stock&#39;s request, to provide a certificate of compliance signed by an officer of your company, in a form to be approved by African Photo Stock.</li>\r\n		<li><strong>Electronic storage.</strong>&nbsp;You agree to retain the copyright symbol, the name of African Photo Stock, the content&#39;s identification number and any other information that may be embedded in the electronic file containing the original content, and to maintain appropriate security to protect the content from unauthorized use by third parties. You may make one (1) copy of the content for back-up purposes.</li>\r\n		<li><strong>Governing Law/Arbitration.</strong>&nbsp;This agreement will be governed by the laws of the State of New York, U.S.A., without reference to its laws relating to conflicts of law. Any disputes arising from or related to this agreement shall be finally settled by binding, confidential arbitration by a single arbitrator selected using the rules and procedures for arbitrator selection under the JAMS&#39; Expedited Procedures in its Comprehensive Arbitration Rules and Procedures (&quot;JAMS&quot;) if you are in North America, or of the International Centre for Dispute Resolution (&quot;ICDR&quot;) or JAMS if you are outside of North America (the applicable rules to be at your discretion), in effect on the date of the commencement of arbitration to be held in one of the following jurisdictions (whichever is closest to you): New York, New York; London, England; Paris, France; Munich, Germany; Madrid, Spain; Milan, Italy; Sydney, Australia; Tokyo, Japan; or Singapore. The arbitration proceedings shall be conducted in English and all documentation shall be presented and filed in English. The decision of the arbitrator shall be final and binding on the parties, and judgment may be entered on the arbitration award and enforced by any court of competent jurisdiction. The United Nations Convention on Contracts for the International Sale of Goods does not govern this agreement. The prevailing party shall be entitled to recover its reasonable legal costs relating to that aspect of its claim or defense on which it prevails, and any opposing costs awards shall be offset. Notwithstanding the foregoing, African Photo Stock shall have the right to commence and prosecute any legal or equitable action or proceeding before any court of competent jurisdiction to obtain injunctive or other relief against you in the event that, in the opinion of African Photo Stock, such action is necessary or desirable to protect its intellectual property rights. The parties agree that, notwithstanding any otherwise applicable statute(s) of limitation, any arbitration proceeding shall be commenced within two years of the acts, events or occurrences giving rise to the claim.</li>\r\n		<li><strong>Severability.</strong>&nbsp;If one or more of the provisions in this agreement is found to be invalid, illegal or unenforceable in any respect, the validity, legality and enforceability of the remaining provisions should not be affected. Such provisions should be revised only to the extent necessary to make them enforceable.</li>\r\n		<li><strong>Waiver.</strong>&nbsp;No action of either party, other than express written waiver, may be construed as a waiver of any provision of this agreement.</li>\r\n		<li><strong>Entire Agreement.</strong>&nbsp;No terms of conditions of this agreement may be added or deleted unless made in writing and accepted in writing by both parties, or issued electronically by African Photo Stock and accepted in writing by you. In the event of any inconsistency between the terms of this agreement and the terms contained on any purchase order sent by you, the terms of this agreement will apply.</li>\r\n		<li><strong>Notice.</strong>&nbsp;All notices required to be sent to African Photo Stock under this agreement should be sent via email to legalnotice@African Photo Stock.com. All notices to you will be sent via email to the email set out in your account.</li>\r\n		<li><strong>Taxes.</strong>&nbsp;You agree to pay and be responsible for any and all sales taxes, use taxes, value added taxes and duties imposed by any jurisdiction as a result of the license granted to you, or of your use of the licensed content.</li>\r\n		<li><strong>Interest on Overdue Invoices.</strong>&nbsp;If you fail to pay an invoice in full within the time specified, African Photo Stock may add a service charge of 1.5% per month, or such lesser amount as is allowed by law, on any unpaid balance until payment is received.</li>\r\n		<li><strong>Fees and Renewal.</strong>&nbsp;If your subscription is set to AUTOMATICALLY RENEW, you authorize African Photo Stock to charge the applicable subscription fees at the then applicable rate and taxes for the subscription to your credit card on file at the expiration of the term. You may change your auto-renewal preferences in your African Photo Stock account. Your subscription may only be cancelled as set out in Section 8(<a href=\"https://www.istockphoto.com/za/legal/license-agreement#refunds\" target=\"_self\">b</a>). African Photo Stock may deactivate your subscription without prior notice if African Photo Stock is unable to process payment through the credit card provided by you.</li>\r\n		<li><strong>Licensing Entity.</strong>&nbsp;The licensing entity under this agreement is determined based on your billing address in accordance with the chart found&nbsp;<a href=\"https://www.gettyimages.com/licensing-entities\" target=\"_blank\">here</a>.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 'terms-of-service'),
(3, 'Privacy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'privacy'),
(4, 'Advertise', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'advertising'),
(5, 'About', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'about'),
(7, 'Support', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'support');

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `role` varchar(64) NOT NULL,
  `default` int(11) NOT NULL,
  `description` text,
  `permissions` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `default`, `description`, `permissions`) VALUES
(1, 'superadmin', 1, NULL, ''),
(2, 'admin', 2, NULL, ''),
(3, 'author', 3, NULL, ''),
(4, 'client', 4, NULL, '');

DROP TABLE IF EXISTS `un_sessions`;

CREATE TABLE `un_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
	(1,'registration','Registration successful','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Account</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br>			To open your {SITE_NAME} homepage, please follow this link:<br>			<a href=\"{SITE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>{SITE_NAME} Account</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br><br>{SITE_URL}<br><br>			Your username: {USERNAME}<br>			Your email address: {EMAIL}<br>			Your password: {PASSWORD}<br><br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(2,'forgot_password','Forgot Password','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Password</h4>\n																	<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Forgot your password, huh? No big deal.<br>To create a new password, just follow this link:<br>			<a href=\"{PASS_KEY_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Create new password</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{PASS_KEY_URL}<br><br>			You received this email, because it was requested by a {SITE_NAME} user.This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.<br><br>Thank you,<br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(3,'change_email','Change Email','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Change Email</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {NEW_EMAIL},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br>			<a href=\"{NEW_EMAIL_KEY_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Confirm Email</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{NEW_EMAIL_KEY_URL}<br><br>			Your email address: {NEW_EMAIL}<br><br>			You received this email, because it was requested by a {SITE_NAME} user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br><br>Thank you,<br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(4,'activate_account','Activate Account','                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\"> </td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\"> </td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Activate Account</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.			To verify your email address, please follow this link:<br>			<a href=\"{ACTIVATE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>Complete Registration</strong></a><br><br>			Link doesn\'t work? Copy the following link to your browser address bar:<br>			{ACTIVATE_URL}<br>			Please verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br><br>			Your username: {USERNAME}<br>			Your email address: {EMAIL}<br>			Your password: {PASSWORD}<br><br><br>																					Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\"> </td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\"> </td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(5,'reset_password','Reset Password','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Password</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USERNAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			You have changed your password.<br>Please, keep it in your records so you don\'t forget it:<br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your new password: {NEW_PASSWORD}<br><br><br>										Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(6,'bug_assigned','Bug : {TITLE} assigned','                                        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\"> </td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\"> </td>								</tr>								<tr>									<td width=\"560\">									<h4>Bug assigned</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new bug <strong>{ISSUE_TITLE} </strong> has been assigned to you by <strong>{ASSIGNED_BY}</strong> in project <strong>{PROJECT_TITLE}</strong>.<br>You can view this bug by logging in to the portal using the link below:<br><a href=\"{SITE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\"> </td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\"> </td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(7,'bug_status','Bug status changed','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>								<tr>									<td width=\"560\">									<h4>Bug status changed</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi There,</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Bug <strong>{ISSUE_TITLE}</strong> has been marked as <strong>{STATUS}</strong> by <strong>{MARKED_BY}</strong>.<br>You can view this bug by logging in to the portal using the link below:<br><a href=\"{BUG_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(8,'bug_comment','New Comment','                                                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>New comment received</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi There,</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new comment has been posted by <strong>{POSTED_BY}</strong> to bug <strong>{ISSUE_TITLE}</strong>.<br>You can view the comment using the link below:<br><a href=\"{COMMENT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br>\r\n<span style=\"font-style:italic;\">{COMMENT_MESSAGE}</span>\r\n<br><br>\r\nBest Regards,<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(9,'bug_file','New bug file','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Upload</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi There,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new file has been uploaded by <strong>{UPLOADED_BY}</strong> to issue <strong>{ISSUE_TITLE}</strong>.<br>You can view the bug using the link below.:<br><a href=\"{BUG_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(10,'bug_reported','Bug : {TITLE}','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\"> </td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\"> </td>								</tr>								<tr>									<td width=\"560\">									<h4>New bug reported</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi There,</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new bug <strong>{ISSUE_TITLE}</strong> has been reported by <strong>{ADDED_BY}</strong>.<br>You can view the Bug using the Dashboard Page:<br><a href=\"{BUG_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\"> </td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\"> </td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(11,'project_file','New Project File','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New Upload</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new file has been uploaded by <strong>{UPLOADED_BY}</strong> to project <strong>{PROJECT_TITLE}</strong>.<br>You can view the Project using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(12,'project_complete','Project Completed','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Project Completed</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {CLIENT_NAME},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Project : <strong>{PROJECT_TITLE}</strong> - <strong>{PROJECT_CODE}</strong> has been completed.<br>You can view the project by logging into your portal Account:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br>Project Overview:<br>Hours Logged # : <strong>{PROJECT_HOURS}</strong> hours<br>Project Cost : <strong>{PROJECT_COST}</strong><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(13,'project_comment','New Comment','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n\n	<tbody>\n\n		<tr>\n\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n				<tbody>\n\n					<tr>\n\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n\n					</tr>\n\n					<tr>\n\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n\n					</tr>\n\n					<tr>\n\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n\n							<tbody>\n\n								<tr>\n\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n\n								</tr>\n\n								<tr>\n\n									<td width=\"560\">\n									<h4>New comment received</h4>\n\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">\n			A new comment has been posted by <strong>{POSTED_BY}</strong> to project <strong>{PROJECT_TITLE}</strong>.\n\nYou can view the comment using the link below:<br>\n<a href=\"{COMMENT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a>\n<br><br>\n<span style=\"font-style:italic;\">{COMMENT_MESSAGE}</span>\n<br><br>\n\n									Best Regards,\n									<br>									\n									{SITE_NAME}</p>\n\n									</td>\n\n								</tr>\n\n								<tr>\n\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n\n								</tr>\n\n							</tbody>\n\n						</table>\n\n						</td>\n\n					</tr>\n\n					<tr>\n\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n\n					</tr>\n\n					<tr>\n\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n\n					</tr>\n\n				</tbody>\n\n			</table>\n\n			</td>\n\n		</tr>\n\n	</tbody>\n\n</table>'),
	(14,'task_assigned','Task assigned','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Task Assigned</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new task <strong>{TASK_NAME}</strong> has been assigned to you by <strong>{ASSIGNED_BY}</strong> in project <strong>{PROJECT_TITLE}</strong>.You can view this task by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(15,'project_assigned','Project assigned','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>								<tr>									<td width=\"560\">									<h4>Project Assigned</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new project <strong>{PROJECT_TITLE}</strong> has been assigned to you by <strong>{ASSIGNED_BY}</strong>.<br>You can view this project by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(16,'payment_email','Payment Received','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n\r\n	<tbody>\r\n\r\n		<tr>\r\n\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n\r\n				<tbody>\r\n\r\n					<tr>\r\n\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n\r\n					</tr>\r\n\r\n					<tr>\r\n\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n\r\n					</tr>\r\n\r\n					<tr>\r\n\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n\r\n							<tbody>\r\n\r\n								<tr>\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n								</tr>\r\n\r\n								<tr>\r\n\r\n									<td width=\"560\">									<h4>Invoice {REF} Payment</h4>\r\n\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Dear Customer,</p>\r\n\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">								We have received your payment of {INVOICE_CURRENCY}{PAID_AMOUNT}.<br>								Thank you for your Payment and business. We look forward to working with you again.<br>								--------------------------<br>																		<br><br>																		Best Regards,<br>																		{SITE_NAME}</p>\r\n\r\n									</td>\r\n\r\n								</tr>\r\n\r\n								<tr>\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n								</tr>\r\n\r\n							</tbody>\r\n\r\n						</table>\r\n\r\n						</td>\r\n\r\n					</tr>\r\n\r\n					<tr>\r\n\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n\r\n					</tr>\r\n\r\n					<tr>\r\n\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n\r\n					</tr>\r\n\r\n				</tbody>\r\n\r\n			</table>\r\n\r\n			</td>\r\n\r\n		</tr>\r\n\r\n	</tbody>\r\n\r\n</table>'),
	(17,'invoice_message','New Invoice','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Invoice {REF}</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello {CLIENT},</p>\n									<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">Here is the invoice of {CURRENCY}{AMOUNT}<br>									You can login to see the status of your invoice by using this link:<br>									<a href=\"{INVOICE_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Invoice</strong></a><br>									<br>									Best Regards,<br>									{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(18,'invoice_reminder','Invoice Reminder','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Invoice {REF} Reminder</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello {CLIENT},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">									This is a friendly reminder to pay your invoice of {CURRENCY}{AMOUNT}<br>									You can view the invoice online at:<br>																		<a href=\"{INVOICE_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Invoice</strong>									</a><br><br>																		Best Regards,<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(19,'message_received','Message Received','<table align=\"center\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>New message received</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {RECIPIENT},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">You have received a message from <strong>{SENDER}</strong>.<br>------------------------------------------------------------------:<br><span style=\"font-style:italic;\">{MESSAGE}</span><br><br><a href=\"{SITE_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Message</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(20,'estimate_email','New Estimate','                    <table style=\"margin-left:20px; \" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px; \">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Estimate {ESTIMATE_REF} Created</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {CLIENT},</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">Thanks for your business inquiry.<br>The estimate <strong>{ESTIMATE_REF}</strong> is attached with this email.<br><br>Estimate Overview:<br>Estimate # : <strong>{ESTIMATE_REF}</strong><br>Amount: <strong>{CURRENCY}{AMOUNT}</strong><br>\nCreated: <strong>{CREATED_DATE}</strong><br>\nDue Date: <strong>{DUE_DATE}</strong><br>\nYou can view the estimate online at:<br><a href=\"{ESTIMATE_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Estimate</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(21,'ticket_staff_email','Ticket [SUBJECT]','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>New Ticket</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {USER_EMAIL},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">Ticket <strong>{SUBJECT}</strong> has been opened.<br>You may view the ticket by clicking on the following link:<br>Client Email : {REPORTER_EMAIL}<br><br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(22,'ticket_client_email','Ticket [SUBJECT]','                                                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>Ticket Opened</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {CLIENT_EMAIL},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Your ticket has been opened with us.<br>Ticket <strong>{SUBJECT}</strong><br>Status : Open<br>Click on the below link to see the ticket details and post replies: <br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(23,'ticket_reply_email','Ticket [SUBJECT] response','                                                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>								<tr>									<td width=\"560\">									<h4>Ticket Response</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi There,</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">A new response has been added to Ticket <strong>{SUBJECT}</strong><br><br>Ticket : <strong>#{TICKET_CODE}</strong><br>Status : <strong>{TICKET_STATUS}</strong><br><span style=\"font-style:italic;\">{TICKET_REPLY}</span><br><br>\r\nTo see the response and post additional comments, click on the link below:<br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br>								Best Regards,<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(24,'ticket_closed_email','Ticket [SUBJECT] closed','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">	<tbody>		<tr>			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">				<tbody>					<tr>						<td height=\"50\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>					</tr>					<tr>						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">							<tbody>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>								<tr>									<td width=\"560\">									<h4>Ticket Closed</h4>									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {REPORTER_EMAIL},</p>								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Ticket <strong>{SUBJECT}</strong> has been closed by <strong>{STAFF_USERNAME}</strong><br>Ticket : <strong>#{TICKET_CODE}</strong><br>Status : <strong>{TICKET_STATUS}</strong><br>To see the responses or open the ticket, click on the link below:<br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>									</td>								</tr>								<tr>									<td height=\"10\" width=\"560\">&nbsp;</td>								</tr>							</tbody>						</table>						</td>					</tr>					<tr>						<td height=\"10\" width=\"600\">&nbsp;</td>					</tr>					<tr>						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>					</tr>				</tbody>			</table>			</td>		</tr>	</tbody></table>'),
	(25,'project_updated','Project updated','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Project Updated</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			<strong>{PROJECT_TITLE}</strong> has been updated by <strong>{ASSIGNED_BY}</strong>.You can view this project by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(26,'task_updated','Task updated','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n\n	<tbody>\n\n		<tr>\n\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n				<tbody>\n\n					<tr>\n\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n\n					</tr>\n\n					<tr>\n\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n\n					</tr>\n\n					<tr>\n\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n\n							<tbody>\n\n								<tr>\n\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n\n								</tr>\n\n								<tr>\n\n									<td width=\"560\">\n									<h4>Task Updated</h4>\n\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">\n			<strong>{TASK_NAME}</strong> in <strong>{PROJECT_TITLE}</strong> has been updated by <strong>{ASSIGNED_BY}</strong>.<br>\n\nYou can view this project by logging in to the portal using the link below:<br>\n<a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a>\n<br><br><br>\n\n									Best Regards,\n									<br>									\n									{SITE_NAME}</p>\n\n									</td>\n\n								</tr>\n\n								<tr>\n\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n\n								</tr>\n\n							</tbody>\n\n						</table>\n\n						</td>\n\n					</tr>\n\n					<tr>\n\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n\n					</tr>\n\n					<tr>\n\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n\n					</tr>\n\n				</tbody>\n\n			</table>\n\n			</td>\n\n		</tr>\n\n	</tbody>\n\n</table>'),
	(27,'email_signature',NULL,'                    <p>                                        1234 Main Street, Anywhere, MA 01234, USA</p>'),
	(28,'auto_close_ticket','Ticket Auto Closed','                                        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>Ticket Closed</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {REPORTER_EMAIL},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">Ticket <strong>{SUBJECT}</strong> has been auto closed due to inactivity. <br><br>Ticket : <strong>#{TICKET_CODE}</strong><br>Status : <strong>{TICKET_STATUS}</strong><br>To see the responses or open the ticket, click on the link below:<br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\"> </td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\"> </td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(29,'project_created','Project Created','                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\n	<tbody>\n		<tr>\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n				<tbody>\n					<tr>\n						<td height=\"50\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\n					</tr>\n					<tr>\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\n							<tbody>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n								<tr>\n									<td width=\"560\">									<h4>Project Opened</h4>\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			<strong>{PROJECT_TITLE}</strong> has been opened by <span style=\"font-weight: bold;\">{CREATED_BY}</span>. You can view this project by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\n									</td>\n								</tr>\n								<tr>\n									<td height=\"10\" width=\"560\">&nbsp;</td>\n								</tr>\n							</tbody>\n						</table>\n						</td>\n					</tr>\n					<tr>\n						<td height=\"10\" width=\"600\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>'),
	(30,'task_created','Task Created','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n\r\n\r\n	<tbody>\r\n\r\n\r\n		<tr>\r\n\r\n\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n\r\n\r\n				<tbody>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n\r\n\r\n							<tbody>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td width=\"560\">									<h4>Task Created</h4>\r\n\r\n\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\r\n\r\n\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			<strong>{TASK_NAME}</strong> has been created by <span style=\"font-weight: bold;\">{CREATED_BY}</span>. You can view this task by logging in to the portal using the link below:<br><a href=\"{PROJECT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n\r\n\r\n									</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n								<tr>\r\n\r\n\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n\r\n\r\n								</tr>\r\n\r\n\r\n							</tbody>\r\n\r\n\r\n						</table>\r\n\r\n\r\n						</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n					<tr>\r\n\r\n\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n\r\n\r\n					</tr>\r\n\r\n\r\n				</tbody>\r\n\r\n\r\n			</table>\r\n\r\n\r\n			</td>\r\n\r\n\r\n		</tr>\r\n\r\n\r\n	</tbody>\r\n\r\n\r\n</table>'),
	(31,'task_comment','Task Comment','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>New comment received</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hello,</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			A new comment has been posted by <strong>{POSTED_BY}</strong> to task&nbsp;<strong>{TASK_NAME}</strong>.You can view the comment using the link below:<br><a href=\"{COMMENT_URL}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Dashboard</strong></a><br><br><span style=\"font-style:italic;\">{COMMENT_MESSAGE}</span><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
	(32,'ticket_reopened_email','Ticket [SUBJECT] reopened','                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td height=\"50\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"90\" style=\"color:#999999\" width=\"600\">{INVOICE_LOGO}</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor=\"whitesmoke\" height=\"200\" style=\"background:whitesmoke; border:1px solid #e0e0e0; font-family:Helvetica,Arial,sans-serif\" valign=\"top\" width=\"600\">						<table align=\"center\" style=\"margin-left:15px;\">\r\n							<tbody>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td width=\"560\">									<h4>Ticket re-opened</h4>\r\n									<p style=\"font-size:12px; font-family:Helvetica,Arial,sans-serif\">Hi {RECIPIENT},</p>\r\n								<p style=\"font-size:12px; line-height:20px; font-family:Helvetica,Arial,sans-serif\">			Ticket <b>{SUBJECT}</b> was re-opened by <b>{USER}</b>.<br>Status : Open<br>Click on the below link to see the ticket details and post replies: <br><a href=\"{TICKET_LINK}\" style=\"color: #11A7DB; text-decoration: none;\"><strong>View Ticket</strong></a><br><br><br>									Best Regards,									<br>																		{SITE_NAME}</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td height=\"10\" width=\"560\">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"10\" width=\"600\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td align=\"right\"><span style=\"font-size:10px; color:#999999; font-family:Helvetica,Arial,sans-serif\">{SIGNATURE}</span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');



DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `avatar` mediumtext,
  `use_gravatar` enum('yes','no') DEFAULT 'yes',
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) DEFAULT NULL,
  `new_password_key` varchar(50) DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) DEFAULT NULL,
  `new_email_key` varchar(50) DEFAULT NULL,
  `last_ip` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `account_details`;

CREATE TABLE `account_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `avatar` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `linkedin` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_id` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
`profile_views` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;