<?php
/**
 * GearmanWorker class skeleton, for IDE auto completion.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @package Gearman
 */
/**
 *
 *
 * @link http://www.php.net/manual/en/class.gearmanworker.php
 */
class GearmanWorker {
	/**
	 * (PECL gearman >= 0.5.0)
	 * Registers a function name with the job server and specifies a callback corresponding to that function. Optionally specify extra application context data to be used when the callback is called and a timeout.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.addfunction.php
 	 * @param string $function_name The name of a function to register with the job server
	 * @param callable $function A callback that gets called when a job for the registered function name is submitted
	 * @param mixed &$context A reference to arbitrary application context data that can be modified by the worker function
	 * @param int $timeout An interval of time in seconds
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function addFunction($function_name, $function, &$context = null, $timeout = null) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Adds one or more options to the options previously set.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.addoptions.php
 	 * @param int $option The options to be added
	 * @return bool Always returns TRUE.
	 */
	public function addOptions($option) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a job server to this worker. This goes into a list of servers than can be used to run jobs. No socket I/O happens here.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.addserver.php
 	 * @param string $host The job server host name.
	 * @param int $port The job server port.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function addServer($host, $port = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds one or more job servers to this worker. These go into a list of servers that can be used to run jobs. No socket I/O happens here.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.addservers.php
 	 * @param string $servers A comma separated list of job servers in the format host:port. If no port is specified, it defaults to 4730.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function addServers($servers) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Creates a GearmanWorker instance representing a worker that connects to the job server and accepts tasks to run.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.construct.php
 	 * @return  A GearmanWorker object
	 */
	public function __construct() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns an error string for the last error encountered.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.error.php
 	 * @return string An error string.
	 */
	public function error() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the value of errno in the case of a GEARMAN_ERRNO return value.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.geterrno.php
 	 * @return int A valid errno.
	 */
	public function getErrno() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Gets the options previously set for the worker.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.options.php
 	 * @return int The options currently set for the worker.
	 */
	public function options() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Registers a function name with the job server with an optional timeout. The timeout specifies how many seconds the server will wait before marking a job as failed. If the timeout is set to zero, there is no timeout.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.register.php
 	 * @param string $function_name The name of a function to register with the job server
	 * @param int $timeout An interval of time in seconds
	 * @return bool A standard Gearman return value.
	 */
	public function register($function_name, $timeout = null) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Removes (unsets) one or more worker options.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.removeoptions.php
 	 * @param int $option The options to be removed (unset)
	 * @return bool Always returns TRUE.
	 */
	public function removeOptions($option) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the last Gearman return code.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.returncode.php
 	 * @return int A valid Gearman return code.
	 */
	public function returnCode() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets one or more options to the supplied value.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.setoptions.php
 	 * @param int $option The options to be set
	 * @return bool Always returns TRUE.
	 */
	public function setOptions($option) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sets the interval of time to wait for socket I/O activity.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.settimeout.php
 	 * @param int $timeout An interval of time in milliseconds. A negative value indicates an infinite timeout.
	 * @return bool Always returns TRUE.
	 */
	public function setTimeout($timeout) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Returns the current time to wait, in milliseconds, for socket I/O activity.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.timeout.php
 	 * @return int A time period is milliseconds. A negative value indicates an infinite timeout.
	 */
	public function timeout() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Unregisters a function name with the job servers ensuring that no more jobs (for that function) are sent to this worker.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.unregister.php
 	 * @param string $function_name The name of a function to register with the job server
	 * @return bool A standard Gearman return value.
	 */
	public function unregister($function_name) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Unregisters all previously registered functions, ensuring that no more jobs are sent to this worker.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.unregisterall.php
 	 * @return bool A standard Gearman return value.
	 */
	public function unregisterAll() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Causes the worker to wait for activity from one of the Gearman job servers when operating in non-blocking I/O mode. On failure, issues a E_WARNING with the last Gearman error encountered.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.wait.php
 	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function wait() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Waits for a job to be assigned and then calls the appropriate callback function. Issues an E_WARNING with the last Gearman error if the return code is not one of GEARMAN_SUCCESS, GEARMAN_IO_WAIT, or GEARMAN_WORK_FAIL.
	 *
	 * @link http://www.php.net/manual/en/gearmanworker.work.php
 	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function work() {}

}
