phpgearman-phpdoc
=================

Skeleton classes for the PHP PECL gearman extension, for IDE auto completion.


Installation
------------

  * Clone this github repository somewhere, i.e.:

		$ git clone git://github.com/Ibmurai/phpgearman-phpdoc.git
		
  * Add the path to the include path of your project.
  * Enjoy!


Notes
-----

A few (mostly deprecated) functions are not included because they cannot be written in PHP. These are:

  * GearmanClient::clone
  * GearmanClient::do
  * GearmanClient::echo
  * GearmanTask::function
  * GearmanWorker::clone
  * GearmanWorker::echo

