
<?php /*
NOTE: ########## SUBDIRECTORY INSTALL ##########

--- !!IMPORTANT!! ---

If the Pyi Framework is installed in a subdirectory (http://domain.com/subdirectory/) you MUST define the subdirectory in the .htaccess file. Look for SetEnv ROOT_PATH

!Otherwise all relative links WILL NOT WORK!

Follow the instructions inside the .htaccess file or the official Pyi Framework documentation.

--- !!IMPORTANT!! ---

*/ ?>

<div id="wrap-top-nav">
  <a href="<?php echo $sf . '/'; ?>">Home</a>
  <a href="<?php echo $sf . '/subfolder/'; ?>">Subfolder</a>
  <a href="<?php echo $sf . '/subfolder/sub-subfolder/'; ?>">Sub-Subfolder</a>
  <a href="<?php echo $sf . '/docs/'; ?>">Documentation</a>
</div>
