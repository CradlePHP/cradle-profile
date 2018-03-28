<?php //-->
/**
 * This file is part of a package designed for the CradlePHP Project.
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

use PHPUnit\Framework\TestCase;

use Cradle\Http\Request;
use Cradle\Http\Response;

/**
 * Event test
 *
 * @vendor   Cradle
 * @package  Model
 * @author   John Doe <john@acme.com>
 */
class Cradle_Profile_EventsTest extends TestCase
{
    /**
     * @var Request $request
     */
    protected $request;

    /**
     * @var Request $response
     */
    protected $response;

    /**
     * @var int $id
     */
    protected static $id;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->request = new Request();
        $this->response = new Response();

        $this->request->load();
        $this->response->load();
    }

    /**
     * profile-create
     *
     * @covers Cradle\Module\System\Model\Validator::getCreateErrors
     * @covers Cradle\Module\System\Model\Validator::getOptionalErrors
     * @covers Cradle\Module\System\Model\Service\SqlService::create
     * @covers Cradle\Module\System\Utility\Service\AbstractElasticService::create
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::createDetail
     */
    public function testProfileCreate()
    {
        $this->request->setStage([
            'profile_name' => 'Test'
        ]);

        cradle()->trigger('profile-create', $this->request, $this->response);

        $this->assertEquals('Test', $this->response->getResults('profile_name'));
        self::$id = $this->response->getResults('profile_id');
        $this->assertTrue(is_numeric(self::$id));
    }

    /**
     * profile-create
     *
     * @covers Cradle\Module\System\Model\Validator::getCreateErrors
     * @covers Cradle\Module\System\Model\Validator::getOptionalErrors
     * @covers Cradle\Module\System\Model\Service\SqlService::create
     * @covers Cradle\Module\System\Utility\Service\AbstractElasticService::create
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::createDetail
     */
    public function testProfileDetail()
    {
        $this->request->setStage([
            'profile_id' => 1
        ]);

        cradle()->trigger('profile-detail', $this->request, $this->response);
        $this->assertEquals(1, $this->response->getResults('profile_id'));
    }

    /**
     * profile-remove
     *
     * @covers Cradle\Module\System\Model\Service\SqlService::get
     * @covers Cradle\Module\System\Model\Service\SqlService::update
     * @covers Cradle\Module\System\Utility\Service\AbstractElasticService::remove
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::removeDetail
     */
    public function testProfileRemove()
    {
        $this->request->setStage([
            'profile_id' => self::$id
        ]);

        cradle()->trigger('profile-remove', $this->request, $this->response);
        $this->assertEquals(self::$id, $this->response->getResults('profile_id'));
    }

    /**
     * profile-restore
     *
     * @covers Cradle\Module\System\Model\Service\SqlService::get
     * @covers Cradle\Module\System\Model\Service\SqlService::update
     * @covers Cradle\Module\System\Utility\Service\AbstractElasticService::remove
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::removeDetail
     */
    public function testProfileRestore()
    {
        $this->request->setStage([
            'profile_id' => self::$id
        ]);

        cradle()->trigger('profile-restore', $this->request, $this->response);
        $this->assertEquals(self::$id, $this->response->getResults('profile_id'));
    }

    /**
     * profile-search
     *
     * @covers Cradle\Module\System\Model\Service\SqlService::search
     * @covers Cradle\Module\System\Model\Service\ElasticService::search
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::getSearch
     */
    public function testProfileSearch()
    {
        cradle()->trigger('profile-search', $this->request, $this->response);
        $this->assertEquals(1, $this->response->getResults('rows', 0, 'profile_id'));
    }

    /**
     * profile-update
     *
     * @covers Cradle\Module\System\Model\Service\SqlService::get
     * @covers Cradle\Module\System\Model\Service\SqlService::update
     * @covers Cradle\Module\System\Utility\Service\AbstractElasticService::remove
     * @covers Cradle\Module\System\Utility\Service\AbstractRedisService::removeDetail
     */
    public function testProfileUpdate()
    {
        $this->request->setStage([
            'profile_id' => self::$id,
            'profile_name' => 'New Test Name'
        ]);

        cradle()->trigger('profile-update', $this->request, $this->response);
        $this->assertEquals('New Test Name', $this->response->getResults('profile_name'));
        $this->assertEquals(self::$id, $this->response->getResults('profile_id'));
    }
}
