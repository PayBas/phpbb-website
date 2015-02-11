<?php
/**
 *
 * @package AppBundle
 * @copyright (c) 2014 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author PayBas
 *
 */

namespace AppBundle\Tests\Controller;

use AppBundle\Tests\Controller;

class StylesControllerTest extends BootstrapTestSuite
{
	public function testStylesMain()
	{
		$objs	= $this->setupTest('/styles/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles') !== false, 'Title contains Styles');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("The default style for phpBB 3.1.x is prosilver")')->count() > 0, 'Styles Home Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesSupport()
	{
		$objs	= $this->setupTest('/styles/support/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Support') !== false, 'Title contains Styles Support');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("Where can I find styles?")')->count() > 0, 'Styles Support Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesInstalling()
	{
		$objs	= $this->setupTest('/styles/installing/');
		$crawler = $objs['crawler'];

		// Title Check
		$expectedTitle = array('Installing', 'Using Styles');

		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[0]) !== false, 'Title contains Installing');
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[1]) !== false, 'Title contains Using Styles');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("the process of installing and using styles")')->count() > 0, 'Styles Installing Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesCreate()
	{
		$objs	= $this->setupTest('/styles/create/');
		$crawler = $objs['crawler'];

		// Title Check
		$expectedTitle = array('Creating', 'Modifying Styles');

		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[0]) !== false, 'Title contains Creating');
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[1]) !== false, 'Title contains Modifying Styles');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("creating your own style for phpBB 3.1.x")')->count() > 0, 'Styles Create Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesTeamOverview()
	{
		$objs	= $this->setupTest('/styles/team-overview/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Team Overview') !== false, 'Styles Team Overview');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("The Styles Team oversees all activities on phpBB.com")')->count() > 0, 'Styles Team Overview Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesJuniorValidators()
	{
		$objs	= $this->setupTest('/styles/junior-validators/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Junior Validators') !== false, 'Title contains Junior Validators');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("The Junior Style Validators Team is composed of community members")')->count() > 0, 'Junior Validators Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesRulesPolicies()
	{
		$objs	= $this->setupTest('/styles/rules-and-policies/');
		$crawler = $objs['crawler'];

		// Title Check
		$expectedTitle = array('Styles Rules', 'Policies');

		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[0]) !== false, 'Title contains Styles Rules');
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), $expectedTitle[1]) !== false, 'Title contains Policies');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("phpBB.com Styles Rules, Policies and Guidelines")')->count() > 0, 'Styles Rules and Policies Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesSubmissionPolicy31x()
	{
		$objs	= $this->setupTest('/styles/rules-and-policies/submission-policy/3.1/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Submission Policy (3.1.x)') !== false, 'Title contains Styles Submission Policy (3.1.x)');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("this Styles Submission Policy page is dedicated to styles for phpBB 3.1.x")')->count() > 0, 'Submission Policy 3.1.x Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesSubmissionPolicy30x()
	{
		$objs	= $this->setupTest('/styles/rules-and-policies/submission-policy/3.0/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Submission Policy (3.0.x)') !== false, 'Title contains Styles Submission Policy (3.0.x)');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("this Styles Submission Policy page is dedicated to styles for phpBB 3.0.x")')->count() > 0, 'Submission Policy 3.0.x Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesDemo()
	{
		$objs	= $this->setupTest('/styles/demo/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Demo') !== false, 'Title contains Styles Demo');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("Here are live demos for the phpBB board styles")')->count() > 0, 'Styles Demo Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}

	public function testStylesDemoNotReady()
	{
		$objs	= $this->setupTest('/styles/demo/3.1/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Styles Demo') !== false, 'Title contains Styles Demo');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("accepting styles")')->count() > 0, 'Styles Demo Content Check');
		$this->assertTrue($crawler->filter('html:contains("3.1.x Styles Forums")')->count() > 0, 'Styles Sidebar Check');

		// Standard All Page Checks
		$this->globalTests();
	}
}
