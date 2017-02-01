<?php
/*
 * This file is part of the phpunit-mock-objects package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPUnit\Framework\MockObject\Builder;

/**
 * Builder interface for matcher of method names.
 *
 * @since Interface available since Release 1.0.0
 */
interface MethodNameMatch extends ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param string|\PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the \PHPUnit\Framework\Constraint\IsEqual
     *
     * @return ParametersMatch
     */
    public function method($name);
}
