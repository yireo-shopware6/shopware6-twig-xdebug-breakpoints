<?php declare(strict_types=1);

namespace Yireo\TwigXdebugBreakpoints\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class BreakpointExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('xdebug_breakpoint', function (
                Environment $environment = null,
                $context = null,
                $arguments = null
            ) {
                xdebug_break();
            }, ['needs_context' => true, 'needs_environment' => true])
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'xdebug_breakpoint';
    }
}
