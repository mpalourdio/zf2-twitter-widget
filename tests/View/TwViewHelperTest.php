<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace ZfTwitterWidgetTests\View;

use TwitterWidgets\Options\WidgetOptions;
use TwitterWidgets\Timeline\TimelineBuilder;
use ZfTwitterWidget\View\TwViewHelper;

class TwViewHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testTwViewHelper()
    {
        $widgetOption = $this
            ->getMockBuilder(WidgetOptions::class)
            ->disableOriginalConstructor()
            ->getMock();

        $timelineBuilder = $this
            ->getMockBuilder(TimelineBuilder::class)
            ->disableOriginalConstructor()
            ->setMethods(['filterAttr', 'getSingleWidgetJs'])
            ->getMock();

        $timelineBuilder
            ->expects($this->once())
            ->method('filterAttr')
            ->willReturn([]);

        $timelineBuilder
            ->expects($this->once())
            ->method('getSingleWidgetJs')
            ->willReturn('achievement unlocked!');

        $viewHelper = new TwViewHelper(
            $widgetOption,
            $timelineBuilder
        );

        $this->assertGreaterThan(0, strpos($viewHelper([]), 'achievement unlocked!'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWrongTypeThrowsException()
    {
        $widgetOption = $this
            ->getMockBuilder(WidgetOptions::class)
            ->disableOriginalConstructor()
            ->getMock();

        $timelineBuilder = $this
            ->getMockBuilder(TimelineBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        $viewHelper = new TwViewHelper($widgetOption, $timelineBuilder);
        $options    = new \stdClass();

        $viewHelper->__invoke($options);
    }
}
