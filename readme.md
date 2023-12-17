# Custom theme for the product configurator for WooCommerce

This small plugin enables you to create or override a theme for the configurator. 
[Get the configurator plugin here](https://wordpress.org/plugins/product-configurator-for-woocommerce/)

## How to use this starter theme:

- This is a working WordPress plugin. 
- Download or clone this repo
- In your WordPress dashboard, go to Plugins > Add new, and upload the archive.
- Change the CSS to fit your project.

Note that the included CSS and SCSS are a copy of the default styles. 

If you wish to use an existing theme to kickstart yours, just copy the files from the original theme, include them in `my-theme` and rename the theme in style.css or style.scss if you wish to use a preprocessor:

![image](https://user-images.githubusercontent.com/11990914/98444273-0bbc9100-2111-11eb-996a-94ca79e6a334.png)

## Running PHP only when this theme is active

You can include a `theme.php` file in the them folder (`my-theme`). It will automatically be loaded if present. 

This is useful if you wish to add specific hooks for that theme, or load additional scripts. You can see examples of this in existing themes, such as [Float](https://github.com/marcusig/woocommerce-product-customizer/blob/master/src/inc/themes/float/theme.php)

