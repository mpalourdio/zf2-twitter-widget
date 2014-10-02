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

use ZfTwitterWidget\View\TwViewHelper;
use ZfTwitterWidget\View\TwViewHelperFactory;
use ZfTwitterWidgetTests\Util\ServiceManagerFactory;

class TwViewHelperFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactoryReturnsInstance()
    {
        $factory = new TwViewHelperFactory();
        $result  = $factory->createService(ServiceManagerFactory::getServiceManager()->get('ViewHelperManager'));

        $this->assertInstanceOf(TwViewHelper::class, $result);
    }
}
