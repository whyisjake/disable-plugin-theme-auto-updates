=== Disable Automatic Theme & Plugin Updates ===
Contributors: whyisjake
Tags: updates, core
Requires at least: 5.5
Tested up to: 5.5.alpha
Requires PHP: 7.0
Stable tag: 0.1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simply disable automatic theme and plugin updates.

== Description ==

At the core of this plugin, it is simply using the build in filters to disable automatic theme and plugin updates.

```
add_filter( 'plugins_auto_update_enabled', '__return_false' );
add_filter( 'themes_auto_update_enabled', '__return_false' );
```

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `/disabe-plugin-theme-auto-updates.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Or, install via the plugin repository.

== Changelog ==

= 0.1.0 =
Let's kick this off.