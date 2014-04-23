<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-18 00:53:53 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/pel/Sites/kohana/system/classes/Kohana/Cookie.php:67
2014-04-18 00:53:53 --- DEBUG: #0 /Users/pel/Sites/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_pk_id_1_1fff', NULL)
#1 /Users/pel/Sites/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_pk_id_1_1fff')
#2 /Users/pel/Sites/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/pel/Sites/kohana/system/classes/Kohana/Cookie.php:67
2014-04-18 06:16:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH/bootstrap.php [ 182 ] in /Users/pel/Sites/kohana/application/bootstrap.php:182
2014-04-18 06:16:49 --- DEBUG: #0 /Users/pel/Sites/kohana/application/bootstrap.php(182): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/pel/Site...', 182, Array)
#1 /Users/pel/Sites/kohana/index.php(102): require('/Users/pel/Site...')
#2 {main} in /Users/pel/Sites/kohana/application/bootstrap.php:182
2014-04-18 06:31:05 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Controller/Home.php [ 10 ] in file:line
2014-04-18 06:31:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 06:31:23 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: URL::$base ~ APPPATH/classes/Controller/Home.php [ 10 ] in file:line
2014-04-18 06:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 07:04:00 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Home.php [ 13 ] in /Users/pel/Sites/kohana/application/classes/Controller/Home.php:13
2014-04-18 07:04:00 --- DEBUG: #0 /Users/pel/Sites/kohana/application/classes/Controller/Home.php(13): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/pel/Site...', 13, Array)
#1 /Users/pel/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/pel/Sites/kohana/modules/multilang/classes/Multilang/Request.php(195): Kohana_Request_Client->execute(Object(Request))
#6 /Users/pel/Sites/kohana/index.php(118): Multilang_Request->execute()
#7 {main} in /Users/pel/Sites/kohana/application/classes/Controller/Home.php:13
2014-04-18 07:04:48 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_base - assumed 'URL_base' ~ APPPATH/views/home.php [ 60 ] in /Users/pel/Sites/kohana/application/views/home.php:60
2014-04-18 07:04:48 --- DEBUG: #0 /Users/pel/Sites/kohana/application/views/home.php(60): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/pel/Site...', 60, Array)
#1 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(61): include('/Users/pel/Site...')
#2 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/pel/Site...', Array)
#3 /Users/pel/Sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/pel/Sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/pel/Sites/kohana/application/classes/Controller/Home.php(14): Kohana_Response->body(Object(View))
#6 /Users/pel/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /Users/pel/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/pel/Sites/kohana/modules/multilang/classes/Multilang/Request.php(195): Kohana_Request_Client->execute(Object(Request))
#11 /Users/pel/Sites/kohana/index.php(118): Multilang_Request->execute()
#12 {main} in /Users/pel/Sites/kohana/application/views/home.php:60
2014-04-18 07:13:19 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 10 ] in file:line
2014-04-18 07:13:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 07:13:20 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 10 ] in file:line
2014-04-18 07:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 16:14:38 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2014-04-18 16:14:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 16:14:39 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2014-04-18 16:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line