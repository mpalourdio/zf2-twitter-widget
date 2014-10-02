<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace ZfTwitterWidget\View;

use TwitterWidgets\Options\WidgetOptions;
use TwitterWidgets\Timeline\TimelineBuilderInterface;
use Zend\View\Helper\AbstractHelper;

class TwViewHelper extends AbstractHelper
{
    protected $widgetOptions;
    protected $timeline;

    /**
     * @param WidgetOptions            $widgetOptions
     * @param TimelineBuilderInterface $timeline
     */
    public function __construct(WidgetOptions $widgetOptions, TimelineBuilderInterface $timeline)
    {
        $this->widgetOptions = $widgetOptions;
        $this->timeline      = $timeline;
    }

    /**
     * @param  array $options
     * @param  bool  $addJs
     * @return string
     */
    public function __invoke($options, $addJs = true)
    {
        $this->widgetOptions->setFromArray($options);

        return $this->timeline->renderWidget($addJs);
    }
}
