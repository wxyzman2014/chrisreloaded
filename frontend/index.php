<?php
/**
 *
 *            sSSs   .S    S.    .S_sSSs     .S    sSSs
 *           d%%SP  .SS    SS.  .SS~YS%%b   .SS   d%%SP
 *          d%S'    S%S    S%S  S%S   `S%b  S%S  d%S'
 *          S%S     S%S    S%S  S%S    S%S  S%S  S%|
 *          S&S     S%S SSSS%S  S%S    d* S  S&S  S&S
 *          S&S     S&S  SSS&S  S&S   .S* S  S&S  Y&Ss
 *          S&S     S&S    S&S  S&S_sdSSS   S&S  `S&&S
 *          S&S     S&S    S&S  S&S~YSY%b   S&S    `S*S
 *          S*b     S*S    S*S  S*S   `S%b  S*S     l*S
 *          S*S.    S*S    S*S  S*S    S%S  S*S    .S*P
 *           SSSbs  S*S    S*S  S*S    S&S  S*S  sSS*S
 *            YSSP  SSS    S*S  S*S    SSS  S*S  YSS'
 *                         SP   SP          SP
 *                         Y    Y           Y
 *
 *                     R  E  L  O  A  D  E  D
 *
 * (c) 2012 Fetal-Neonatal Neuroimaging & Developmental Science Center
 *                   Boston Children's Hospital
 *
 *              http://childrenshospital.org/FNNDSC/
 *                        dev@babyMRI.org
 *
 */

// we define a valid entry point
define('__CHRIS_ENTRY_POINT__', 666);

//define('CHRIS_CONFIG_DEBUG', true);

// include the configuration
require_once ('config.inc.php');

// include the template class
require_once (joinPaths(CHRIS_CONTROLLER_FOLDER, 'template.class.php'));

function testTemplateClass() {

	$t = new Template('index.html');
	$t -> replace('TITLE', "<title>ChRIS 2 -Reloaded</title>");
	$t -> replace('STYLE', joinPaths(CHRIS_VIEW_FOLDER, 'style.html'));
	$t -> replace('WELCOME', joinPaths(CHRIS_VIEW_FOLDER, 'welcome.html'));
	$t -> replace('LOGIN_FORM', joinPaths(CHRIS_VIEW_FOLDER, 'login_form.html'));
	$t -> replace('HIGHLIGHTS', joinPaths(CHRIS_VIEW_FOLDER, 'highlights.html'));
	$t -> replace('TWITTER', joinPaths(CHRIS_VIEW_FOLDER, 'twitter.php'));
	$t -> replace('MORE', joinPaths(CHRIS_VIEW_FOLDER, 'more.html'));
	$t -> replace('JAVASCRIPT', joinPaths(CHRIS_VIEW_FOLDER, 'javascript.html'));
	$t -> replace('FOOTER', joinPaths(CHRIS_VIEW_FOLDER, 'footer.html'));

	return $t;

}

// TODO use php unit testing framework
// TODO more tests regarding failures

// execute the test
echo testTemplateClass();
?>