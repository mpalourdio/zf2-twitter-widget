<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
use TwitterWidgets\Options\WidgetOptions;
use TwitterWidgets\Timeline\TimelineBuilder;
use ZfTwitterWidget\Factory\TimelineBuilderFactory;
use ZfTwitterWidget\Factory\WidgetOptionsFactory;
use ZfTwitterWidget\View\TwViewHelperFactory;

return [
    'service_manager' => [
        'factories' => [
            WidgetOptions::class   => WidgetOptionsFactory::class,
            TimelineBuilder::class => TimelineBuilderFactory::class,
        ]
    ],
    'view_helpers'    => [
        'factories' => [
            'tw' => TwViewHelperFactory::class,
        ]
    ],
];
