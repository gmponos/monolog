<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog;

/**
 * Used for testing purposes.
 *
 * It records all records and gives you access to them for verification.
 * 
 * @author George Mponos <gmponos@gmail.com>
 */
final class TestLogger extends \Psr\Log\Test\TestLogger implements ResettableInterface
{
}
