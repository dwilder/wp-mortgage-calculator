WP (Responsive) Mortgage Calculator
===================================

A simple responsive mortgage calculator widget and shortcode.

## Description

The Responsive Mortgage Calculator is a jQuery widget and shortcode that's designed to fit easily into any theme, on any device, at any size. Just what every "Real Estate Agent on the go" needs.

### Download

Download the plugin in here or from the WordPress plugin repository: https://wordpress.org/plugins/responsive-mortgage-calculator/

### Features

The calculator allows your website visitors to estimate their mortgage entering:
* the total cost of the of the home,
* a down payment amount,
* an interested rate (fixed rate),
* the amortization period
* and they can select a payment period, either monthly, bi-weekly, or weekly.

The payment result is displayed below the form - very simply and very easy to follow. But for the savvy user, a click on the information icon reveals more details…

### Redesign It

There are settings to adjust the styling, a light and a dark theme, or you can remove the styling entirely and use your theme’s styling. The HTML is built with plenty of classes, so it’s easy to override the included stylesheet with your own CSS.

### Plenty of Options

* Set the interest rate compounding period for your region.
* Set your currency symbol and currency code.
* Hide the down payment field.
* Set a fixed payment period.
* Rename the input labels.
* Add your own CSS classes.

### Shortcode Attributes

Use the shortcode on different pages with different field names by using shortcode attributes. They’re pretty obvious, but here’s an example:

`[mortgagecalculator totalamount=“Mortgage Amount”]`

or use the first letter of the original labels:

`[rmc ta=“Mortgage Amount]`

### Known Issues

The widget and short code rely on the same jQuery script at the moment. The short code seems to take precedence over the widget, meaning the widget won’t function on the same page as the shortcode.

### DISCLAIMER

The calculator is for demonstration purposes only and may not reflect actual numbers for your mortgage. Assumes constant interest rate throughout amortization period.

It's pretty darn good, but the bank has the final say...

## Installation

Install this plugin just like any other…

1. Upload the plugin folder `responsive-mortgage-calculator.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

### Widget Installation

1. Access the `Widgets` page under the `Appearance` menu.
1. Drag the `Responsive Mortgage Calculator` into the Widget display area of your choice.
1. If you want, change the title and save it.

### Shortcode Usage 

You can insert the mortgage calculator into a page or post using the short code [mortgagecalculator] or [rmc].