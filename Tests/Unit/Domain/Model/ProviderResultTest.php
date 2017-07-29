<?php
namespace SourceBroker\Imageopt\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ProviderResultTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SourceBroker\Imageopt\Domain\Model\ProviderResult
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SourceBroker\Imageopt\Domain\Model\ProviderResult();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

//    /**
//     * @test
//     */
//    public function getSizeBeforeReturnsInitialValueForInt()
//    {
//        self::assertSame(
//            0,
//            $this->subject->getSizeBefore()
//        );
//    }

    /**
     * @test
     */
    public function setSizeBeforeForIntSetsSizeBefore()
    {
        $this->subject->setSizeBefore(12);

        self::assertAttributeEquals(
            12,
            'sizeBefore',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSizeAfterReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSizeAfter()
        );
    }

    /**
     * @test
     */
    public function setSizeAfterForStringSetsSizeAfter()
    {
        $this->subject->setSizeAfter('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sizeAfter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getExecutedSuccessfullyReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getExecutedSuccessfully()
        );
    }

    /**
     * @test
     */
    public function setExecutedSuccessfullyForBoolSetsExecutedSuccessfully()
    {
        $this->subject->setExecutedSuccessfully(true);

        self::assertAttributeEquals(
            true,
            'executedSuccessfully',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWinnerReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getWinner()
        );
    }

    /**
     * @test
     */
    public function setWinnerForBoolSetsWinner()
    {
        $this->subject->setWinner(true);

        self::assertAttributeEquals(
            true,
            'winner',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getExecutorsResultsReturnsInitialValueForExecutorResult()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getExecutorsResults()
        );
    }

    /**
     * @test
     */
    public function setExecutorsResultsForObjectStorageContainingExecutorResultSetsExecutorsResults()
    {
        $executorsResult = new \SourceBroker\Imageopt\Domain\Model\ExecutorResult();
        $objectStorageHoldingExactlyOneExecutorsResults = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneExecutorsResults->attach($executorsResult);
        $this->subject->setExecutorsResults($objectStorageHoldingExactlyOneExecutorsResults);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneExecutorsResults,
            'executorsResults',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addExecutorsResultToObjectStorageHoldingExecutorsResults()
    {
        $executorsResult = new \SourceBroker\Imageopt\Domain\Model\ExecutorResult();
        $executorsResultsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $executorsResultsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($executorsResult));
        $this->inject($this->subject, 'executorsResults', $executorsResultsObjectStorageMock);

        $this->subject->addExecutorsResult($executorsResult);
    }

    /**
     * @test
     */
    public function removeExecutorsResultFromObjectStorageHoldingExecutorsResults()
    {
        $executorsResult = new \SourceBroker\Imageopt\Domain\Model\ExecutorResult();
        $executorsResultsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $executorsResultsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($executorsResult));
        $this->inject($this->subject, 'executorsResults', $executorsResultsObjectStorageMock);

        $this->subject->removeExecutorsResult($executorsResult);
    }
}
