# Yireo Twig XDebug Breakpoints
**Shopware 6 plugin to add XDebug breakpoints to Twig templates**

Using XDebug with PHPStorm is great. You can easily add breakpoints wherever. Unfortunately, when setting breakpoints in Twig templates, PHPStorm is unable to trace this back to an actual PHP script, so that the breakpoint is never set. The solution is to call upon the `xdebug_break()` function manually. This Shopware 6 extension adds a Twig function `xdebug_breakpoint` that yet again calls upon the native `xdebug_break()`. Happy debugging.

## Usage in Twig
```twig
{{ xdebug_breakpoint(_self)) }}
```
Or:
```twig
{{ xdebug_breakpoint(_self)) }}
```
