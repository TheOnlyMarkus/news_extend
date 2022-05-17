<?php

namespace Webx\NewsExtend\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class NewsTest extends UnitTestCase
{
    /**
     * @var \Webx\NewsExtend\Domain\Model\News|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Webx\NewsExtend\Domain\Model\News::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTeaserImagesReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getTeaserImages()
        );
    }

    /**
     * @test
     */
    public function setTeaserImagesForFileReferenceSetsTeaserImages(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setTeaserImages($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('teaserImages'));
    }
}
