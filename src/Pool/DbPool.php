<?php

namespace Swoft\Db\Pool;

use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use Swoft\Db\Pool\Config\DbPoolConfig;
use Swoft\Pool\ConnectPoolInterface;

/**
 * 数据库连接池
 *
 * @Pool()
 * @uses      DbPool
 * @version   2017年09月01日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class DbPool extends ConnectPoolInterface
{
    const MYSQL = 'Mysql';

    /**
     * @Inject()
     *
     * @var DbPoolConfig
     */
    protected $poolConfig;

    /**
     * 数据库驱动
     *
     * @var string
     */
    private $driver = self::MYSQL;

    /**
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function createConnect()
    {
        if (App::isWorkerStatus()) {
            $connectClassName = "Swoft\Db\\Drivers\\" . $this->driver . "\\" . $this->driver . 'Connect';
        } else {
            $connectClassName = "Swoft\Db\\Drivers\\" . $this->driver . "\\Sync" . $this->driver . 'Connect';
        }
        if (!class_exists($connectClassName)) {
            throw new \InvalidArgumentException('暂时不支持该驱动数据库，driver=' . $this->driver);
        }
        return new $connectClassName($this);
    }

    public function reConnect($client)
    {
    }

    /**
     * 返回数据库驱动
     *
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }
}
