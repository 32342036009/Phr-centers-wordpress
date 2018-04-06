<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/webdesi2/public_html/phr-centers/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/webdesi2/public_html/phr-centers/wp-content/wflogs/');
	include_once '/home/webdesi2/public_html/phr-centers/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>