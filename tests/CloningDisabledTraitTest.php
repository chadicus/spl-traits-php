<?php
namespace ChadicusTest\Spl\Traits;

/**
 * @coversDefaultClass Chadicus\Spl\Traits\CloningDisabledTrait
 */
class CloningDisabledTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Verify basic behavior of _clone().
     *
     * @test
     * @covers ::__clone
     * @expectedException \BadMethodCallException
     *
     * @return void
     */
    public function magicClone()
    {
        $object = $this->getObjectForTrait('\\Chadicus\\Spl\\Traits\\CloningDisabledTrait');
        $clone = clone $object;
    }
}
