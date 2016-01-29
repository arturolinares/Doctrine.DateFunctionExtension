<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class WeekdayTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new Weekday('weekday');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result                        = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('DATEPART(weekday, {DATE EXPRESSION})-1', $result);
    }
}
