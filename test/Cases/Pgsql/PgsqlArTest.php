<?php

namespace Swoft\Db\Test\Cases\Pgsql;

/**
 * SyncMysqlArTest
 */
class PgsqlArTest extends AbstractDbTestCase
{
    public function testSave()
    {
        $this->arSave();
    }

    public function testCoSave()
    {
        go(function () {
            $this->arSave();
        });
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testDelete(int $id)
    {
        $this->arDelete($id);
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testCoDelete(int $id)
    {
        go(function () use ($id) {
            $this->arDelete($id);
        });
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testDeleteById(int $id)
    {
        $this->arDeleteById($id);
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testCoDeleteById(int $id)
    {
        go(function () use ($id) {
            $this->arDeleteById($id);
        });
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testDeleteByIds(array $ids)
    {
        $this->arDeleteByIds($ids);
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testCoDeleteByIds(array $ids)
    {
        go(function () use ($ids) {
            $this->arDeleteByIds($ids);
        });
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testUpdate(int $id)
    {
        $this->arUpdate($id);
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testCoUpdate(int $id)
    {
        go(function () use ($id) {
            $this->arUpdate($id);
        });
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testFindById(int $id)
    {
        $this->arFindById($id);
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testCoFindById(int $id)
    {
        go(function () use ($id) {
            $this->arFindById($id);
        });
    }

    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testFindByIdClass(int $id)
    {
        $this->arFindByIdClass($id);
    }


    /**
     * @dataProvider pgsqlProvider
     * @param int $id
     */
    public function testCoFindByIdClass(int $id)
    {
        go(function () use ($id) {
            $this->arFindByIdClass($id);
        });
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testFindByIds(array $ids)
    {
        $this->arFindByIds($ids);
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testCoFindByIds(array $ids)
    {
        go(function () use ($ids) {
            $this->arFindByIds($ids);
        });
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testFindByIdsByClass(array $ids)
    {
        $this->arFindByIdsByClass($ids);
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testCoFindByIdsByClass(array $ids)
    {
        go(function () use ($ids) {
            $this->arFindByIdsByClass($ids);
        });
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testQuery(array $ids)
    {
        $this->arQuery($ids);
    }

    /**
     * @dataProvider pgsqlProviders
     * @param array $ids
     */
    public function testCoQuery(array $ids)
    {
        go(function () use ($ids) {
            $this->arQuery($ids);
        });
    }
}