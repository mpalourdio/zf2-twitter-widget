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
use ZfTwitterWidgetTests\Util\ServiceManagerFactory;

class TwViewHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testTwViewHelper()
    {
        $viewHelper = new TwViewHelper(
            ServiceManagerFactory::getServiceManager()->get(WidgetOptions::class),
            ServiceManagerFactory::getServiceManager()->get(TimelineBuilder::class)
        );

        $this->assertGreaterThan(0, strpos($viewHelper->__invoke([]), 'class="twitter-timeline"'));
    }
}
