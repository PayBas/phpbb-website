<?php
/**
 *
 * @package AppBundle
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author MichaelC
 *
 */

namespace AppBundle\Twig;

class GlobalsExtension extends \Twig_Extension
{
	public function getGlobals()
	{
		// @TODO Generate URLs for routes
		$pathVars = $this->getPathVars();
		$menuVars = $this->getMenuVars();

		$aboutVars 			= $this->getAboutVars();
		$developmentVars 	= $this->getDevelopmentVars();
		$modVars 			= $this->getModsVars();
		$styleVars 			= $this->getStyleVars();
		$supportVars 		= $this->getSupportVars();
		$extensionVars		= $this->getExtensionVars();

		$forumVars 	= $this->getForumVars();
		$peopleVars = $this->getPeopleVars();
		$miscVars 	= $this->getMiscVars();
		$legacyVars = $this->getLegacyVars();

		$variables = array_merge(
			$pathVars,
			$menuVars,
			$aboutVars,
			$developmentVars,
			$modVars,
			$styleVars,
			$supportVars,
			$forumVars,
			$peopleVars,
			$miscVars,
			$extensionVars,
			$legacyVars
		);

		return $variables;
	}


	public function getName()
	{
		return 'phpbb_extension_globals';
	}

	private function getPathVars()
	{
		$pathVars = array(
			'home_path'			=> '/',

			'about_path'		=> '/about/',
			'ABOUT'				=> '/about/',
			//'ABOUT_INDEX_SUB'	=> '/about/',

			'advertise_path'	=> '/about/advertise/',
			'ABOUT_ADVERTISE'	=> '/about/advertise/',

			'demo_path'			=> '/demo/',
			'DEMO'				=> '/demo/',

			'downloads_path'	=> '/downloads/',
			//'DOWNLOADS_SUB'		=> '/downloads/',
			'DOWNLOADS'			=> '/downloads/',
			'DOWNLOADS_HEADER'	=> '/downloads/?from=header',

			'cdb_path'			=> '/customise/db/',
			'CUSTOMISE'			=> '/customise/db/',

			'support_path'		=> '/support/',
			'SUPPORT'			=> '/support/',

			'development_path'	=> '/development/', // Usage = 3
			// 'DEV_INDEX_SUB'		=> '/development/',
			'DEVELOPMENT'		=> '/development/',

			'community_path'	=> '/community/',
			'COMMUNITY'			=> '/community',

			'contact_path'		=> '/about/contact/',
			'ABOUT_CONTACT'		=> '/about/contact/',

			'get_involved_path'		=> '/get-involved/', // Usage = 2
			// 'ABOUT_GETINVOLVED_SUB'	=> '/get-involved/',
			'DEV_GI_SUB'			=> '/development/get-involved/',
			'GET_INVOLVED'			=> '/get-involved/',

			'customise_path'	=> '/customise/',

			'mods_db_path'		=> '/customise/db/modifications-1',
			// 'MODS_DB_SUB'		=> '/customise/db/modifications-1',

			'mods_path'			=> '/mods/',
			'MODS'				=> '/mods/',

			'shop_path'			=> '/shop/',
			'SHOP'				=> '/shop/',

			'blog_link'			=> '//blog.phpbb.com/',
			'BLOG'				=> '//blog.phpbb.com/',

			'feeds_rss_path'	=> '/feeds/rss/',
			'FEEDS_RSS'			=> '/feeds/rss/',

			'kb_path'			=> '/support/docs/en/3.1/kb/',
			'KB'				=> '/support/docs/en/3.1/kb/',
			//'KB'				=> '/knowledgebase/',

			'showcase_path'		=> '/showcase/',
			'SHOWCASE'			=> '/showcase/',

			'documentation_path'=> '/support/docs/',
			'DOCUMENTATION'		=> '/support/docs/',

			'ideas_path'		=> '/ideas/',
			'IDEAS'				=> '/ideas/',

			'extensions_path'	=> '/extensions/',

			'styles_path'		=> '/styles/',
		);

		return $pathVars;
	}

	private function getMenuVars()
	{
		$menuVars = array(
			// 'ABOUT_FEATURES_SUB'				=> '/about/features/',
			// 'ABOUT_HISTORY_SUB'				=> '/about/history/',

			// 'ABOUT_TEAM_SUB'					=> '/about/team/',
			//'ABOUT_CONTACT_SUB'				=> '/about/contact/',
			// 'ABOUT_ADVERTISE_SUB'				=> '/about/advertise/',

			'DOWNLOADS_UPDATE_SUB'			=> '/downloads/#update',

			// 'MODS_SUB'						=> '/mods/',
			// 'DEV_WIKI_SUB'					=> '//wiki.phpbb.com/',
			// 'STYLES_SUB'						=> '/styles/',
			// 'STYLES_DEMO_SUB'					=> '/styles/demo/3.0/',

			// 'DOCUMENTATION_SUB'				=> '/support/documentation/3.0/',
			// 'KB_SUB'							=> '/kb/',
			// 'SUPPORT_IRC_SUB'					=> '/support/irc/',
			'SUPPORT_TUTORIALS_SUB'			=> '/support/tutorials/3.0/',
			// 'SUPPORT_FORUMS_SUB'				=> '/support/forums/',
			// 'SUPPORT_INTL_SUB'				=> '/support/intl/',

			'BUGS_SUB'						=> '/bugs/',
			'BUGS_PHPBB_SUB'					=> 'http://tracker.phpbb.com/',
			'SECURITY_SUB'					=> '/security/',
			'DEV_HOME_SUB'					=> '//area51.phpbb.com/',

			'ABOUT_INDEX_SUB'					=> '/about/',
			'SUPPORT_INDEX_SUB'				=> '/support/',

			'CDB_MOD_SUPPORT'					=> '/customise/db/support/modifications-1', // TODO: remove (used in support_forums.html)
			'CDB_STYLE_SUPPORT'				=> '/customise/db/support/styles-2', // TODO: remove
			'CDB_CONVERTOR_SUPPORT'			=> '/customise/db/support/converter/', // TODO: remove (used in support_forums.html)
			'CDB_TRANSLATION_SUPPORT'			=> '/customise/db/support/translation/', // TODO: remove
		);

		return $menuVars;
	}

	private function getAboutVars()
	{
		$aboutVars = array(
			'ABOUT_HISTORY'		=> '/about/history/',
			'ABOUT_LOGOS'		=> '/about/logos/',
			'ABOUT_MAP'			=> '/about/map/',
			'ABOUT_TEAM'		=> '/about/team/',
			'ABOUT_FEATURES'	=> '/about/features/',
			'ABOUT_COMPARE'		=> '/about/features/compare.php',
			'about_launch'		=> '/about/launch/',
		);

		return $aboutVars;
	}

	private function getDevelopmentVars()
	{
		$developmentVars = array(
			'BUGS'				=> '/bugs/',
			'BUGS_PHPBB'			=> 'http://tracker.phpbb.com/',
			'BUGS_WEBSITE'		=> '/bugs/website/',
			'INCIDENTS'			=> '/incidents/',
			'SECURITY'			=> 'https://tracker.phpbb.com/secure/BrowseProjects.jspa#10020',
			'SECURITY_MODS'		=> 'https://tracker.phpbb.com/browse/EXTSEC/',
			'BUGS_30X'			=> 'http://tracker.phpbb.com/',
			'BUGS_DOCS'			=> '/bugs/docs/',
			'BUGS_MODTOOLS'		=> '/bugs/modteamtools/',
			'BUGS_SUPPORTTOOLS'	=> '/bugs/supportteamtools/',
			'CODE_DOCS_30X'		=> '//area51.phpbb.com/docs/code/',
			'GIT_REPOSITORY'		=> 'https://github.com/phpbb',
			'GIT_REPOSITORY_3_0'	=> 'https://github.com/phpbb/phpbb3',
			'CODING_GUIDELINES'	=> '//area51.phpbb.com/docs/30x/coding-guidelines.html',

			'DEV_BOARD'			=> '//area51.phpbb.com/phpBB/',
			'DEV_HOME'			=> '//area51.phpbb.com/',
			'DEV_PROSILVER'		=> '/development/prosilver/',
			'DEV_QA'				=> '/development/qa/',
			//'DEV_QA_CONTACT'		=> '/community/ucp.php?i=pm&amp;mode=compose&amp;u=' . DEV_QA_CONTACT_ID),
			'DEV_QA_TOOL'			=> '/development/qa/release/new',
			'DEV_QA_30X_BUGLIST'	=> '/bugs/phpbb3/qa.php',
			'DEV_WIKI'			=> 'https://wiki.phpbb.com/',
		);

		return $developmentVars;
	}

	private function getModsVars()
	{
		$modVars = array(
			'MODS_AUTOMOD'		=> '/mods/automod/',
			'MODS_GENERATOR'		=> '/mods/utilities/generator/',
			'MODS_CHECKIST'		=> '/mods/validator/checklist.php',
			'MODS_DB'				=> '/customise/db/modifications-1',
			'MODS_FAQ'			=> '/mods/faq/',
			'MODS_VOLUNTEER'		=> '/mods/volunteer/',
			'MODS_DOCUMENTATION'	=> '/mods/documentation/',
			'MODS_MODX'			=> '/mods/modx/',
			'MODS_MODX_UPD'		=> '/mods/modx/update/',
			'MODS_VALIDATOR'		=> '/mods/validator/',
			'MODS_GLOSSARY'		=> '/mods/glossary/',
			'MODS_MISSION'		=> '/mods/mission/',
			'MODS_MPV'			=> '/mods/mpv/',
			'MODS_JR'				=> '/mods/junior-validators/',

			'MODS_DATABASE_RULES'		=> '/mods/rules-and-policies/',
			'MODS_DEVELOPMENT_RULES'	=> '/mods/rules-and-policies/development/',
			'MODS_WRITERS_RULES'		=> '/mods/rules-and-policies/writers/',
			'MODS_AUTOMOD_SVN'		=> 'https://github.com/phpbb/automod',
			'MODS_UMIL'				=> '/mods/umil/',
			'MODS_TRACKER'			=> '/bugs/modteamtools/',
			'MODS_TEAM_OVERVIEW'		=> '/mods/team-overview/',
			'MODS_TEAM_OVERVIEW_JR'	=> '/mods/team-overview/?p=jr',

			'MODS_TEAM_OVERVIEW_MODERATOR'	=> '/mods/team-overview/?p=moderator',
			'MODS_TEAM_OVERVIEW_VALIDATOR'	=> '/mods/team-overview/?p=validator',

			'MODS_AUTHOR_INTRO'					=> '/mods/author-introduction/',
			'MODS_RULES_AND_POLICIES' 			=> '/mods/rules-and-policies/',
			'MODS_RULES_MOD_DEVELOPMENT_FORUM'	=> '/mods/rules-and-policies/development/',
			'MODS_RULES_MOD_WRITERS_FORUM'		=> '/mods/rules-and-policies/writers/',

			// Tools pages
			'MODS_UMIL_CREATOR'			=> '/mods/umil/create.php',

			'MODS_MODX_TOOLS'				=> '/mods/modx-tools/',
			'MODS_MODX_GENERATOR'			=> '/mods/modx-tools/generator/',
			// 'MODS_MODX_CONVERTOR'		=> '/mods/modx-tools/convertor/',
			'MODS_MODX_CREATOR'			=> '/mods/modx-tools/creator/',
			'MODS_MODX_CREATOR_OFFLINE'	=> '/mods/modx-tools/creator/download/',
			'MODS_QUICKINSTALL'			=> '/mods/quickinstall/',

			// MODs finding
			'MODS_REQ_MOD_TOPIC'		=> '/community/viewtopic.php?t=587938',
			'MODS_DB_SEARCH'			=> '/customise/db/search/',

			// MODs faq
			'MODS_KB'					=> '/support/docs/en/3.0/kb/modifications/',
			'MODS_KB_20X'				=> '/support/docs/en/3.0/kb/modifications/',
			//'MODS_DB_MYLIST'			=> '/customise/db/author/' . $user->data['username_clean'] . '/contributions/',
			//'MODS_DB_CREATE'			=> '/customise/db/author/' . $user->data['username_clean'] . '/create/',

			'MODS_POLICY'			=> '/mods/rules-and-policies/',
			'MODS_3_POLICY'		=> '/mods/rules-and-policies/db/general/',
			'MODS_POLICY_DENY'	=> '/mods/rules-and-policies/db/insta-deny/',
			'MODS_POLICY_REPACK'	=> '/mods/rules-and-policies/db/repack/',

			'MODS_CONVENTION'				=> '/mods/convention/',
			'MODS_CONVENTION_JULY_2006'	=> '/mods/convention/2006-07/',
			'MODS_CONVENTION_JULY_2007'	=> '/mods/convention/2007-07/',
			'MODS_CONVENTION_AUGUST_2008'	=> '/mods/convention/2008-08/',

			'MODX_FEATURES'			=> '/mods/modx/features/',
			'MODX_FAQ'				=> '/mods/modx/faq/',
			'MODX_UTILITIES'			=> '/mods/modx/utilities/',
			'MODX_CONVERTOR'			=> '/mods/utilities/convertor/',
			'MODX_CREATOR'			=> '/mods/modx-tools/creator/',
			'MODX_CREATOR_DOWNLOAD'	=> '/mods/modx-tools/creator/download/',
			'MODX_GENERATOR'			=> '/mods/modx-tools/generator/',
			'MODX_SPEC'				=> '/mods/modx/spec/',

			//'MODX_VERSION'			=> MODX_VERSION,

			// Bridges
			'BRIDGES_DB'				=> '/customise/db/bridges-24',
			'BRIDGES_POLICIES'	=> '/mods/bridges/',

			// installing mods
			'MODS_FINDING'		=> '/mods/finding/',
			'MODS_OPENING'		=> '/mods/opening/',
			'MODS_INSTALLING'		=> '/mods/installing/',
			'MODS_SUPPORT'		=> '/mods/support/',

			// writing mods
			'MODS_INTRODUCTION'	=> '/mods/introduction/index.php',
			'MODS_GUIDELINES'		=> '//area51.phpbb.com/docs/30x/coding-guidelines.html', // Links to phpBB SVN, but the MOD team may use their own guidelines later.
			'MODS_TECHNIQUES'		=> '/mods/documentation/',
			'MODS_APPLICATIONS'	=> '/mods/utilities/',
			'MODS_CREATING'		=> '/mods/modx/',
			'MODS_PACKAGING'		=> '/mods/packaging/',
			'MODS_CHECKLIST'		=> '/mods/validator/checklist.php',
		);

		return $modVars;
	}

	private function getStyleVars()
	{
		$styleVars = array(
			// To be removed
			'STYLES'							=> '/styles/',
			'STYLES_DB'							=> '/customise/db/styles-2',

			// Main pages
			'styles_create'						=> '/styles/create/',
			'styles_changes'					=> '/styles/changes/',
			'styles_installing'					=> '/styles/installing/',

			// Rules
			'styles_rules'						=> '/styles/rules-and-policies/',
			'styles_rules_submit'				=> '/styles/rules-and-policies/#a-submission-policy',
			'styles_rules_submit_31x'			=> '/styles/rules-and-policies/submission-policy/3.1/',
			'styles_rules_submit_30x'			=> '/styles/rules-and-policies/submission-policy/3.0/',
			'styles_rules_dev'					=> '/styles/rules-and-policies/development-rules/',
			'styles_rules_feedback_31x'			=> '/community/viewforum.php?f=74&p=12931323', // TODO: create topic
			'styles_rules_feedback_30x'			=> '/community/viewtopic.php?f=74&p=12931323', // TODO: move topic to 3.0 styles?

			// Other
			'styles_support'					=> '/styles/support/',
			'styles_team_overview'				=> '/styles/team-overview/',
			'styles_junior_validators'			=> '/styles/junior-validators/',
			'styles_demo'						=> '/styles/demo/',

			// Demo pages (handled by Titania)
			'styles_demo_31x'					=> '/customise/db/style/prosilver/demo/3.1', // TODO: needs to be up and running
			'styles_demo_30x'					=> '/customise/db/style/prosilver/demo/3.0',

			// Styles CDB
			'styles_db_path'					=> '/customise/db/styles-2',
			'styles_gdk_31x_commercial_fonts'	=> '/customise/db/style/prosilver_gdk_31x_commercial_fonts/',
			'styles_gdk_31x_free_fonts'			=> '/customise/db/style/prosilver_gdk_31x_free_fonts/',
			'styles_gdk_30x_commercial_fonts'	=> '/customise/db/style/prosilver_gdk_commercial_fonts/',
			'styles_gdk_30x_free_fonts'			=> '/customise/db/style/prosilver_gdk_free_fonts/',
			'styles_gdk_20x'					=> '/customise/db/style/phpbb_subsilver_gdk/',

			// Documentation resources
			'styles_wiki'						=> 'https://wiki.phpbb.com/Category:Styles',
			'styles_kb'							=> '/support/docs/en/3.1/kb/styles/',
			'styles_kb_31x'						=> '/support/docs/en/3.1/kb/styles/',
			'styles_kb_30x'						=> '/support/docs/en/3.0/kb/styles/',
			'styles_kb_30x_install'				=> '/support/docs/en/3.0/kb/article/how-to-install-styles-on-phpbb3/',
			'styles_kb_30x_create'				=> '/support/docs/en/3.0/kb/article/how-to-create-a-style-basics/',
			'styles_docs_31x'					=> '/support/docs/en/3.1/ug/adminguide/customise_styles/',
			'styles_docs_30x'					=> '/support/docs/en/3.0/ug/adminguide/styles/',

			'styles_team_members'				=> '/community/memberlist.php?mode=group&g=7332',
			'styles_jv_team_members'			=> '/community/memberlist.php?mode=group&g=228778',

			// Other
			'styles_db_my_styles'				=> '/customise/db/author/USERNAME/contributions', // TODO: this dynamic link needs the current username (used on SSP pages)
		);

		return $styleVars;
	}

	private function getSupportVars()
	{
		$supportVars = array(

			'DOCUMENTATION_3_0'	=> '/support/docs/en/3.0/ug/',
			'QUICK_START_3_0'		=> '/support/docs/en/3.0/ug/quickstart/',
			'SUPPORT_FORUMS'		=> '/support/forums/',

			'SUPPORT_IRC'				=> '/support/irc/',
			'SUPPORT_TUTORIALS'		=> '/support/tutorials/',
			'SUPPORT_TUTORIALS_2_0'	=> '/support/tutorials/2.0/',
			'SUPPORT_TUTORIALS_3_0'	=> '/support/tutorials/3.0/',
			'SUPPORT_INTL'			=> '/support/intl/',
			//'SUPPORT_INTL_CONTACT'	=> '/community/ucp.php?i=pm&amp;mode=compose&amp;u=' . INTL_CONTACT_ID,
			'SUPPORT_SRT'				=> '/support/srt/',
			'SUPPORT_SRT_FEEDBACK'	=> '/community/viewtopic.php?f=64&amp;t=1455965',
			'SUPPORT_SRT_TOPIC'		=> '/community/viewtopic.php?f=46&amp;t=543515',
			'SUPPORT_STK'				=> '/support/stk/',
			'SUPPORT_STK_INSTALL'		=> '/support/stk/index.php?mode=instal',
			'SUPPORT_STK_SCREENS'		=> '/support/stk/screenshots.php',
			'SUPPORT_CODE_CHANGES'	=> '//area51.phpbb.com/code-changes/',

			'SUPPORT_DOCS'			=> '/support/docs/',
			'SUPPORT_DOCS_UG'			=> '/support/docs/en/3.1/ug/',
			'SUPPORT_DOCS_KB'			=> '/support/docs/en/3.1/kb/',
			'SUPPORT_DOCS_FLASH'		=> '/support/docs/flash/',
		);

		return $supportVars;
	}

	private function getExtensionVars()
	{
		$extensionVars = array(
			'extensions_cdb'						=> '/customise/db/extensions-36',
			'extensions_wiki'						=> 'https://wiki.phpbb.com/Category:Extensions',

			'extensions_quickinstall'				=> '/mods/quickinstall/', //replace later
			'extensions_phpbb_cgs'					=> '//area51.phpbb.com/docs/31x/coding-guidelines.html',

			'extensions_rules'						=> '/extensions/rules-and-policies/',
			'extensions_recognised_devs'			=> '/extensions/recognised-developer/',
			'extensions_offical_exts'				=> '/extensions/official-extensions/',
			'extensions_offical_exts_team'			=> '/extensions/official-extensions/team/',
			'extensions_junior_validators'			=> '/extensions/junior-validators/',

			'extensions_epv'						=> '/extensions/epv/',
			'extensions_epv_repo'					=> 'https://github.com/phpbb/epv',
			'extensions_epv_bugs'					=> 'https://tracker.phpbb.com/browse/EXTTOOLS',
			'extensions_epv_instructions'			=> '/community/viewtopic.php?f=461&t=2239116',
			'extensions_installing'					=> '/extensions/installing/',
			'extensions_writing'					=> '/extensions/writing/',
			'extensions_team_overview'				=> '/extensions/team-overview/',
			'extensions_validation_policy'			=> '/extensions/rules-and-policies/validation-policy',
			'extensions_instadeny'					=> '/extensions/rules-and-policies/validation-policy#insta-deny',
			'extensions_repack'						=> '/extensions/rules-and-policies/validation-policy#repack',
			'extensions_rules_dev'					=> '/extensions/rules-and-policies/development-rules',
			'extensions_rules_writer'				=> '/extensions/rules-and-policies/writers-rules',

			'extensions_wiki_developing_extensions'	=> 'https://wiki.phpbb.com/Developing_Extensions',
			'extensions_wiki_helper_class'			=> 'https://wiki.phpbb.com/Controller#The_Helper_Class',
			'extensions_wiki_template_listeners'	=> 'https://wiki.phpbb.com/Add_Template_Listeners',
			'extensions_wiki_controller'			=> 'https://wiki.phpbb.com/Controller',
			'extensions_wiki_composer'				=> 'https://wiki.phpbb.com/Extension_meta_data',
			'extensions_wiki_dependency_injection'	=> 'https://wiki.phpbb.com/Dependency_Injection_Container',
			'extensions_wiki_migrations'			=> 'https://wiki.phpbb.com/Migrations',
			'extension_wiki_events_list'			=> 'https://wiki.phpbb.com/Event_List',

			'extensions_security_tracker'			=> 'https://tracker.phpbb.com/browse/EXTSEC',

			'extension_quickstart_zip'				=> '/store/quickstart_extension_1.0.0.zip',

			// Team members
			'extension_team_members'				=> '/community/memberlist.php?mode=group&g=7331',
			'extension_dev_team_members'			=> '/community/memberlist.php?mode=group&g=228787',
			'extension_jv_team_members'				=> '/community/memberlist.php?mode=group&g=228685',
		);

		return $extensionVars;
	}

	private function getForumVars()
	{
		$forumVars = array(
			'FORUM_30X_SUPPORT'	=> '/community/viewforum.php?f=46',
			'FORUM_PHPBBDISC'		=> '/community/viewforum.php?f=64',
			'FORUM_SEARCH_EVENTS'	=> '/community/search.php?keywords=%5BEVENT%5D&amp;terms=all&amp;fid%5B%5D=64&amp;sc=1&amp;sf=titleonly&amp;sr=topics&amp;sk=t&amp;sd=d&amp;st=0&amp;ch=300&amp;t=0&amp;submit=Search',

			// Styles Forum
			'FORUM_STYLES'				=> '/community/viewforum.php?f=77',
			'FORUM_STYLES_SUPPORT_30X'	=> '/community/viewforum.php?f=74',
			'FORUM_STYLES_SUPPORT_20X'	=> '/community/viewforum.php?f=23',
			'FORUM_STYLES_DEV_30X'		=> '/community/viewforum.php?f=185',
			'FORUM_STYLES_30X'			=> '/community/viewforum.php?f=80',

			'forum_styles_31x'		 => '/community/viewforum.php?f=471',
			'forum_styles_31x_support' => '/community/viewforum.php?f=481',
			'forum_styles_31x_dev'	 => '/community/viewforum.php?f=476',
			'forum_styles_30x'		 => '/community/viewforum.php?f=80',
			'forum_styles_30x_support' => '/community/viewforum.php?f=74',
			'forum_styles_30x_dev'	 => '/community/viewforum.php?f=185',
			'forum_styles_20x'		 => '/community/viewforum.php?f=77',
			'forum_styles_20x_support' => '/community/viewforum.php?f=74',
			'forum_styles_20x_dev'	 => '/community/viewforum.php?f=23',

			// Modification Forums
			'FORUM_MODS'					=> '/community/viewforum.php?f=78',
			'FORUM_MODS_OLYMPUS'				=> '/community/viewforum.php?f=81',
			'FORUM_MODS_30X'				=> '/community/viewforum.php?f=81',
			'MODS_DEVELOPMENT_FORUM_30X'	=> '/community/viewforum.php?f=70',
			'MODS_DATABASE_RELEASES_30X'	=> '/community/viewforum.php?f=69',
			'MODS_REQUESTS_FORUM_30X'		=> '/community/viewforum.php?f=72',
			'MODS_WRITERS_FORUM_30X'		=> '/community/viewforum.php?f=71',

			'forum_extensions_31x'			=> '/community/viewforum.php?f=451',
			'forum_extensions_req'			=> '/community/viewforum.php?f=496',
			'forum_extensions_31x_dev'		=> '/community/viewforum.php?f=456',
			'forum_extensions_31x_writers'	=> '/community/viewforum.php?f=461',
			'extensions_writers_discussion'		 => '/community/viewforum.php?f=461',

			'FORUM_SUPPORT'				=> '/community/viewforum.php?f=46',
			'FORUM_STYLES_CAT'			=> '/community/viewforum.php?f=80',
			'FORUM_MODS_CAT'			=> '/community/viewforum.php?f=81',

			'FORUM_EVENTS'				=> '/community/viewforum.php?f=105',
			'FORUM_GENDISC'				=> '/community/viewforum.php?f=6',

			'U_FORUM_SUPPORT_SUB'				=> '/community/viewforum.php?f=466',
			'U_FORUM_STYLES_SUB'				=> '/community/viewforum.php?f=471',
			'U_FORUM_MODS_SUB'					=> '/community/viewforum.php?f=81',
			'U_FORUM_EXT_SUB'					=> '/community/viewforum.php?f=451',
			'U_FORUM_PHPBBDISC_SUB'				=> '/community/viewforum.php?f=64',
			'U_FORUM_EVENTS_SUB'				=> '/community/viewforum.php?f=105',
			'U_FORUM_GENDISC_SUB'				=> '/community/viewforum.php?f=6',
			'U_FORUM_PRIVATE_SUB'				=> '/community/viewforum.php?f=53',
		);

		return $forumVars;
	}

	private function getPeopleVars()
	{
		$peopleVars = array(
			'SUPPORT_TL_NAME'		=> 'Noxwizard',
			'SUPPORT_TL_CONTACT'	=> '/community/memberlist.php?mode=viewprofile&u=192443',
			'SUPPORT_DOCS_NAME'		=> 'stevemaury',
			'SUPPORT_DOCS_CONTACT'	=> '/community/memberlist.php?mode=viewprofile&u=280664',
			'styles_tl_name'		=> 'Raimon',
			'styles_tl_contact'		=> '/community/memberlist.php?mode=viewprofile&u=253197',
			'WEBSITE_TL_NAME'		=> 'MichaelC',
			'WEBSITE_TL_CONTACT'	=> '/community/memberlist.php?mode=viewprofile&u=1175315',
			'ext_dev_tl_name'		=> 'VSE',
			'ext_dev_tl_contact'	=> '/community/memberlist.php?mode=viewprofile&u=868795',
			'ext_tl_name'			=> 'DavidIQ',
			'ext_tl_contact'		=> '/community/memberlist.php?mode=viewprofile&u=159755',
		);

		return $peopleVars;
	}

	private function getMiscVars()
	{
		$miscVars = array(
			'package_version'		=> '3.1.3',
			'package_release_date'	=> '2015-02-01',
			'PACKAGE_VERSION'		=> '3.1.3',
			'PACKAGE_ANNOUNCE_URL'	=> '/community/viewtopic.php?f=14&t=2293451',
			'PACKAGE_RELEASE_DATE'	=> '2015-02-01',

			'bot'					=> false, // @TODO Set this to true for bots // Usage = 1
			'is_on_team'			=> false, // @TODO Set this up to use sessions management and see if they are on the team

			'ROOT_PATH'			=> '/',
			'THEME_PATH'			=> '/theme',
			'FAVICON_PATH'		=> '/assets/images/images/favicons',
			'YEAR'				=> date('Y'),
			'ON_TEAM'				=> false,

			'HOME'				=> '/',

			'CONTACT'				=> '/contact/',

			// Old KB - Remove after the conversion
			'KB_PHPBB_TEAM'		=> '/community/memberlist.php?mode=leaders',

			'LONDONVASION_POST'	=> '/community/viewtopic.php?f=14&amp;t=1058455',
			'LONDONVASION'		=> '/londonvasion/',
			'LIBERTYVASION'		=> '/libertyvasion/',
			'CHANGELOG'			=> '/support/documents.php?mode=changelog&amp;version=3',
			'INSTALL_DOCUMENT'	=> '/support/documents.php?mode=install&amp;version=3',
			'LICENSE'				=> '/downloads/license/',
			'OFFICIAL_TOOLS'				=> '/customise/db/official_tools-23',

			'SHOWCASE_SUGGEST'		=> '/showcase/suggest/',

			'languages_path'				=> '/languages/',
			'LANGUAGES_SUB'					=> '/languages/',

			'ABOUT_ADMIN'			=> '/about/team/adm/',
			'ABOUT_ADMIN_USERS'	=> '/about/team/adm/users.php',
			'ABOUT_ADMIN_TEAMS'	=> '/about/team/adm/teams.php',
			'ABOUT_ADMIN_LOG'		=> '/about/team/adm/log.php',

			// about history
			'NO_PHPBB2_2'				=> '/community/viewtopic.php?t=256072',
			'PHPBBCOM_NEW_WEBSITE'	=> '/community/viewtopic.php?t=543015',
			'FIRST_RC_30X'			=> '/community/viewtopic.php?t=615945',

			// URLS to mailing list
			'LISTS_SUBSCRIBE'		=> 'http://lists.phpbb.com/mailman/subscribe/phpbb-announce', // Usage = 1

			// Languages
			'LANGUAGES_HOWTO'	=>	'/community/viewtopic.php?f=66&amp;t=1858645',

			'COMMUNITY'			=> '/community/',
			'RULES'				=> '/rules/',
			'MODS_RULES'			=> '/mods/rules/',
			'GOOGLECSE'			=> '/search/',
			'community_search'	=> '/community/search.php',
			'ADVERTISE'			=> '/about/advertise/',
			'LANGUAGES_30X'		=> '/languages/',
			'LANGUAGES_20X'		=> '/languages/?type=20x',

			'HOSTING'					=> '/hosting/',
			'HOSTING_FROM_DOWNLOADS'	=> '/hosting/?from=downloads',

			// retired 2.0.x
			'RETIRED_2X'			=> '/community/viewtopic.php?f=14&amp;t=1385785',

			// URLs to news feeds
			'FEEDS_DEFAULT'		=> '/feeds/',
			'FEEDS_ATOM'			=> '/feeds/atom/',

			// Social Media sites
			'FACEBOOK'			=> 'http://www.facebook.com/phpBB',
			'TWITTER'				=> 'http://www.twitter.com/phpbb',
			// phpBB Demo
			'DEMO_30X'			=> 'http://try-phpbb.com/30x',
			'demo_31x'			=> 'http://try-phpbb.com/31x',
			'latest_demo'		=> 'http://try-phpbb.com/31x',

			'MANAGEMENT_TEAM'	=> '/community/memberlist.php?mode=group&g=13330',
		);

		return $miscVars;
	}

	public function getLegacyVars()
	{
		$legacyVars = array(
			'U_ABOUT'							=> '/about/',
			'U_ABOUT_FEATURES_SUB'				=> '/about/features/',
			'U_ABOUT_HISTORY_SUB'				=> '/about/history/',
			'U_ABOUT_GETINVOLVED_SUB'			=> '/get-involved/',
			'U_ABOUT_TEAM_SUB'					=> '/about/team/',
			'U_ABOUT_CONTACT_SUB'				=> '/about/contact/',
			'U_ABOUT_ADVERTISE_SUB'				=> '/about/advertise/',
			'U_ABOUT_LAUNCH_SUB'				=> '/about/launch/',

			'U_DOWNLOADS_HEADER'				=> '/downloads/?from=header',
			'U_DOWNLOADS_SUB'					=> '/downloads/',
			'U_DOWNLOADS_UPDATE_SUB'			=> '/downloads/#update',
			'U_STYLES_DB_SUB'					=> '/customise/db/styles-2',
			'U_LANGUAGES_SUB'					=> '/languages/',

			'U_CUSTOMISE'						=> '/customise/',
			'U_CDB_SUB'							=> '/customise/db/',
			'U_EXT_SUB'							=> '/extensions/',
			'U_EXT_DB_SUB'						=> '/customise/db/extensions-36',
			'U_MODS_SUB'						=> '/mods/',
			'U_MODS_DB_SUB'						=> '/customise/db/modifications-1',
			'U_STYLES_SUB'						=> '/styles/',
			'U_STYLES_DEMO_SUB'					=> '/styles/demo/3.0/',

			'U_SUPPORT_DOCS_SUB'				=> '/support/docs/',
			'U_SUPPORT_KB_SUB'					=> '/support/docs/en/3.1/kb/',
			'U_SUPPORT_IRC_SUB'					=> '/support/irc/',
			'U_SUPPORT_TUTORIALS_SUB'			=> '/support/tutorials/3.0/',
			'U_SUPPORT_FORUMS_SUB'				=> '/support/forums/',
			'U_SUPPORT_INTL_SUB'				=> '/support/intl/',

			'U_DEVELOPMENT'						=> '/development/',
			'U_DEV_WIKI_SUB'					=> 'https://wiki.phpbb.com/',
			'U_DEV_GI_SUB'						=> '/development/get-involved/',
			'U_BUGS_SUB'						=> '/bugs/',
			'U_BUGS_PHPBB_SUB'					=> 'http://tracker.phpbb.com/',
			'U_SECURITY_SUB'					=> '/security/',
			'U_DEV_HOME_SUB'					=> '//area51.phpbb.com/',

			'U_IDEAS'							=> '/ideas',

			'U_FORUM_INDEX_SUB'					=> '/community/',
			'U_ABOUT_INDEX_SUB'					=> '/about/',
			'U_CUSTOMISE_INDEX_SUB'				=> '/customise/',
			'U_SUPPORT_INDEX_SUB'				=> '/support/',
			'U_DEV_INDEX_SUB'					=> '/development/',

			'U_CDB_MOD_SUPPORT'					=> '/customise/db/support/modifications-1', // TODO: remove (used in support_forums.html)
			'U_CDB_STYLE_SUPPORT'				=> '/customise/db/support/styles-2', // TODO: remove
			'U_CDB_CONVERTOR_SUPPORT'			=> '/customise/db/support/converter/', // TODO: remove (used in support_forums.html)
			'U_CDB_TRANSLATION_SUPPORT'			=> '/customise/db/support/translation/', // TODO: remove

			'U_DEMO'							=> '/demo/',
			'U_SHOWCASE'						=> '/showcase/',
			'U_DOWNLOADS'						=> '/downloads/',
			'U_OFFICIAL_TOOLS'					=> '/customise/db/official_tools-23',
			'U_SUPPORT'							=> '/support/',
			'U_BLOG'							=> '//blog.phpbb.com/',
			'U_COMMUNITY'						=> '/community/',
			'U_DEV_BOARD'						=> '//area51.phpbb.com/phpBB/',
			'U_HOSTING'							=> '/hosting/',
		);

		return $legacyVars;
	}
}
