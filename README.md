# Console Log - A Grav Plugin

Console Log is a simple plugin that provides a way to leave a message in the browser's console. I developed this plugin for personal use to make it easy to leave Easter eggs in the console for anyone that looks. You can view the console in your browser's developer tools.

# Usage

To use this plugin, you need to first enable the plugin and Twig processing for your page. Twig processing can be enabled for a page in the admin panel by going to the `Advanced` tab for your page and checking `Twig` under the `Process` section. Once Twig processing is enabled, simply type `{{ conlog("Replace this with your text") }}` within your page. The text within the quotation marks will be printed to the browser's console every time the page is loaded.

# Installation

There are two ways to install the Console Log plugin, you can install it using the built-in GPM (Grav Package Manager) or manually with the zip file.

> Note: GPM Installation/Update will not be available until this plugin is added to the Grav Repository.

## GPM Installation (Recommended)

This is the best way to install the plugin. From the root of your Grav install simply type:

	bin/gpm install consolelog

This plugin will be installed into the `/user/plugins/consolelog` directory. It is entirely self-contained in this folder.

## Manual Installation

First, download the zip version of this repository and extract it. Make sure the resulting folder is named `consolelog`. Then place this folder within the `/user/plugins` directory. The plugin is then available for use, and should be visible in the Grav Admin Panel if installed.

TLDR: Download zip, rename to `consolelog`, and place within `/user/plugins`.

# Updating

The directions below will help you update the Console Log plugin, simply follow the instructions for your preferred installation method.

## GPM Update (Recommended)

Similar to how the plugin is installed, navigate to the root of your Grav install and type:

	bin/gpm update consolelog

The plugin will now be up to date.

## Manual Update

Manually updating has a few more steps but is still simple. Start off by deleting the `/user/plugins/consolelog` directory. Download the latest zip version of this repository and unzip it. Make sure the unzipped folder is named `consolelog`. Place the folder within `/user/plugins`. The latest version of Console Log should now be installed and functioning.

# Credits

Thank you to the Grav team for their wonderful examples and recipes, which were referenced heavily during the creation of this plugin.