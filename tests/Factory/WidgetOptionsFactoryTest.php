<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace ZfTwitterWidgetTests\Factory;

use PHPUnit\Framework\TestCase;
use TwitterWidgets\Options\WidgetOptions;
use ZfTwitterWidget\Factory\WidgetOptionsFactory;
use ZfTwitterWidgetTests\Util\ServiceManagerFactory;

class WidgetOptionsFactoryTest extends TestCase
{
    public function testFactoryReturnsInstance()
    {
        $factory = new WidgetOptionsFactory();
        $result  = $factory->createService(ServiceManagerFactory::getServiceManager());

        $this->assertInstanceOf(WidgetOptions::class, $result);
    }
}
