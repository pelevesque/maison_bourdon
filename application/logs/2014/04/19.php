<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-19 01:32:08 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2014-04-19 01:32:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 01:32:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/home.php [ 6 ] in /Users/pel/Sites/kohana/application/views/home.php:6
2014-04-19 01:32:39 --- DEBUG: #0 /Users/pel/Sites/kohana/application/views/home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/pel/Site...', 6, Array)
#1 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(61): include('/Users/pel/Site...')
#2 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/pel/Site...', Array)
#3 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/pel/Sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/pel/Sites/kohana/application/classes/Controller/Home.php(11): Kohana_Response->body(Object(View))
#6 /Users/pel/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/pel/Sites/kohana/modules/multilang/classes/Multilang/Request.php(195): Kohana_Request_Client->execute(Object(Request))
#11 /Users/pel/Sites/kohana/index.php(118): Multilang_Request->execute()
#12 {main} in /Users/pel/Sites/kohana/application/views/home.php:6
2014-04-19 01:33:12 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2014-04-19 01:33:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 01:33:48 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Home.php [ 14 ] in file:line
2014-04-19 01:33:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 01:38:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: meta_description ~ APPPATH/views/home.php [ 11 ] in /Users/pel/Sites/kohana/application/views/home.php:11
2014-04-19 01:38:40 --- DEBUG: #0 /Users/pel/Sites/kohana/application/views/home.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/pel/Site...', 11, Array)
#1 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(61): include('/Users/pel/Site...')
#2 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/pel/Site...', Array)
#3 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/pel/Sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/pel/Sites/kohana/application/classes/Controller/Home.php(13): Kohana_Response->body(Object(View))
#6 /Users/pel/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/pel/Sites/kohana/modules/multilang/classes/Multilang/Request.php(195): Kohana_Request_Client->execute(Object(Request))
#11 /Users/pel/Sites/kohana/index.php(118): Multilang_Request->execute()
#12 {main} in /Users/pel/Sites/kohana/application/views/home.php:11
2014-04-19 02:46:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function echo__() ~ APPPATH/views/home.php [ 8 ] in file:line
2014-04-19 02:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 02:47:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __echo() ~ APPPATH/views/home.php [ 8 ] in file:line
2014-04-19 02:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 02:47:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __echo() ~ APPPATH/views/home.php [ 8 ] in file:line
2014-04-19 02:47:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 03:11:07 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `'('' ~ APPPATH/views/home.php [ 56 ] in file:line
2014-04-19 03:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 03:11:25 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `'('' ~ APPPATH/views/home.php [ 56 ] in file:line
2014-04-19 03:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line