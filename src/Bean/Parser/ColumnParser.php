<?php

namespace Swoft\Db\Bean\Parser;

use Swoft\Bean\Parser\AbstractParserInterface;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Collector\EntityCollector;

/**
 * Column注解解析
 *
 * @uses      ColumnParser
 * @version   2017年09月05日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ColumnParser extends AbstractParserInterface
{
    /**
     * Column注解解析
     *
     * @param string $className
     * @param Column $objectAnnotation
     * @param string $propertyName
     * @param string $methodName
     * @param string|null $propertyValue
     * @return mixed
     */
    public function parser(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    ) {
        EntityCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);
        return null;
    }
}
