<?php
/**
 * Actions Test
 *
 * PHP version 7.1
 *
 * @category PHP
 * @package  ActionsPHP
 * @author   Matt Barber <mfmbarber@gmail.com>
 * @license  BSD Licence
 * @link     https://github.com/mattamorphic
 */
declare(strict_types=1);
namespace Mattamorphic\ActionsPHP\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Mattamorphic\ActionsPHP\Actions as Actions;

/**
 * ActionsPHPTest Class
 *
 * @category PHP
 * @package  ActionsPHP
 * @author   Matt Barber <mfmbarber@gmail.com>
 * @license  BSD Licence
 * @link     https://github.com/mattamorphic
 */
final class ActionsTest extends TestCase
{
    /**
     * Test no data throws
     *
     * @return void
     */
    public function testItThrowsOnNoData(): void
    {
        $this->expectException(\Exception::class);
        Actions::convertCSVToJson('');
    }

    /**
     * Test headers but no data throws
     *
     * @return void
     */
    public function testItThrowsOnHeadersButNoData(): void
    {
        $this->expectException(\Exception::class);
        Actions::convertCSVToJson('name,age');
    }

    /**
     * Test converting csv to json
     *
     * @return void
     */
    public function testItConvertsCSVToJson(): void
    {
        $this->assertSame(
            Actions::convertCSVToJson(
                "name,age\nmatt,31"
            ),
            '[{"name":"matt","age":"31"}]'
        );
    }
}
