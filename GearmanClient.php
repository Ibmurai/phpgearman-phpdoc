<?php
/**
 * GearmanClient class skeleton, for IDE auto completion.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @package Gearman
 */
/**
 * Represents a class for connecting to a Gearman job server and making requests to perform some function on provided data. The function performed must be one registered by a Gearman worker and the data passed is opaque to the job server.
 *
 * @link http://www.php.net/manual/en/class.gearmanclient.php
 */
class GearmanClient {
	/**
	 * (PECL gearman >= 0.6.0)
	 * Adds one or more options to those already set.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addoptions.php
 	 * @param int $options The options to add
	 * @return bool Always returns TRUE.
	 */
	public function addOptions($options) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a job server to a list of servers that can be used to run a task. No socket I/O happens here; the server is simply added to the list.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addserver.php
 	 * @param string $host The job server host name.
	 * @param int $port The job server port.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function addServer($host, $port = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a list of job servers that can be used to run a task. No socket I/O happens here; the servers are simply added to the full list of servers.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addservers.php
 	 * @param string $servers A comma-separated list of servers, each server specified in the format &#039;host:port&#039;.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function addServers($servers) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work. Note that enough workers need to be available for the tasks to all run in parallel.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtask.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTask($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtaskbackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTaskBackground($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a high priority task to be run in parallel with other tasks. Call this method for all the high priority tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work. Tasks with a high priority will be selected from the queue before those of normal or low priority.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtaskhigh.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTaskHigh($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a high priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work. Tasks with a high priority will be selected from the queue before those of normal or low priority.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtaskhighbackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTaskHighBackground($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a low priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work. Tasks with a low priority will be selected from the queue after those of normal or low priority.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtasklow.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTaskLow($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Adds a low priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call GearmanClient::runTasks() to perform the work. Tasks with a low priority will be selected from the queue after those of normal or high priority.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtasklowbackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param mixed &$context Application context to associate with a task
	 * @param string $unique A unique ID used to identify a particular task
	 * @return GearmanTask A GearmanTask object or FALSE if the task could not be added.
	 */
	public function addTaskLowBackground($function_name, $workload, &$context = null, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Used to request status information from the Gearman server, which will call the specified status callback (set using GearmanClient::setStatusCallback()).
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.addtaskstatus.php
 	 * @param string $job_handle The job handle for the task to get status for
	 * @param string &$context Data to be passed to the status callback, generally a reference to an array or object
	 * @return GearmanTask A GearmanTask object.
	 */
	public function addTaskStatus($job_handle, &$context = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Clears all the task callback functions that have previously been set.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.clearcallbacks.php
 	 * @return bool Always returns TRUE.
	 */
	public function clearCallbacks() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Creates a GearmanClient instance representing a client that connects to the job server and submits tasks to complete.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.construct.php
 	 * @return  A GearmanClient object.
	 */
	public function __construct() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Get the application context previously set with GearmanClient::setContext().
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.context.php
 	 * @return string The same context data structure set with GearmanClient::setContext()
	 */
	public function context() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Get the application data previously set with GearmanClient::setData().
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.data.php
 	 * @return string The same string data set with GearmanClient::setData()
	 */
	public function data() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Runs a task in the background, returning a job handle which can be used to get the status of the running task.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dobackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string The job handle for the submitted task.
	 */
	public function doBackground($function_name, $workload, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Runs a single high priority task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result. High priority tasks will get precedence over normal and low priority tasks in the job queue.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dohigh.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string A string representing the results of running a task.
	 */
	public function doHigh($function_name, $workload, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Runs a high priority task in the background, returning a job handle which can be used to get the status of the running task. High priority tasks take precedence over normal and low priority tasks in the job queue.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dohighbackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string The job handle for the submitted task.
	 */
	public function doHighBackground($function_name, $workload, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Gets that job handle for a running task. This should be used between repeated GearmanClient::doNormal() calls. The job handle can then be used to get information on the task.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dojobhandle.php
 	 * @return string The job handle for the running task.
	 */
	public function doJobHandle() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Runs a single low priority task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result. Normal and high priority tasks will get precedence over low priority tasks in the job queue.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dolow.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string A string representing the results of running a task.
	 */
	public function doLow($function_name, $workload, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Runs a low priority task in the background, returning a job handle which can be used to get the status of the running task. Normal and high priority tasks take precedence over low priority tasks in the job queue.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dolowbackground.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string The job handle for the submitted task.
	 */
	public function doLowBackground($function_name, $workload, $unique = null) {}

	/**
	 * (No version information available, might only be in SVN)
	 * Runs a single task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.donormal.php
 	 * @param string $function_name A registered function the worker is to execute
	 * @param string $workload Serialized data to be processed
	 * @param string $unique A unique ID used to identify a particular task
	 * @return string A string representing the results of running a task.
	 */
	public function doNormal($function_name, $workload, $unique = null) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the status for the running task. This should be used between repeated GearmanClient::doNormal() calls.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.dostatus.php
 	 * @return array An array representing the percentage completion given as a fraction, with the first element the numerator and the second element the denomintor.
	 */
	public function doStatus() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns an error string for the last error encountered.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.error.php
 	 * @return string A human readable error string.
	 */
	public function error() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Value of errno in the case of a GEARMAN_ERRNO return value.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.geterrno.php
 	 * @return int A valid Gearman errno.
	 */
	public function getErrno() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Gets the status for a background job given a job handle. The status information will specify whether the job is known, whether the job is currently running, and the percentage completion.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.jobstatus.php
 	 * @param string $job_handle The job handle assigned by the Gearman server
	 * @return array An array containing status information for the job corresponding to the supplied job handle. The first array element is a boolean indicating whether the job is even known, the second is a boolean indicating whether the job is still running, and the third and fourth elements correspond to the numerator and denominator of the fractional completion percentage, respectively.
	 */
	public function jobStatus($job_handle) {}

	/**
	 * (No version information available, might only be in SVN)
	 * Sends some arbitrary data to all job servers to see if they echo it back. The data sent is not used or processed in any other way. Primarily used for testing and debugging.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.ping.php
 	 * @param string $workload Some arbitrary serialized data to be echo back
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function ping($workload) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Removes (unsets) one or more options.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.removeoptions.php
 	 * @param int $options The options to be removed (unset)
	 * @return bool Always returns TRUE.
	 */
	public function removeOptions($options) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the last Gearman return code.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.returncode.php
 	 * @return int A valid Gearman return code.
	 */
	public function returnCode() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * For a set of tasks previously added with GearmanClient::addTask(), GearmanClient::addTaskHigh(), GearmanClient::addTaskLow(), GearmanClient::addTaskBackground(), GearmanClient::addTaskHighBackground(), or GearmanClient::addTaskLowBackground(), this call starts running the tasks in parallel.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.runtasks.php
 	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function runTasks() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sets the callback function for accepting data packets for a task. The callback function should take a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setclientcallback.php
 	 * @param callable $callback A function or method to call
	 * @return void Returns TRUE on success or FALSE on failure.
	 */
	public function setClientCallback($callback) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Use to set a function to be called when a task is completed. The callback function should accept a single argument, a GearmanTask oject.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setcompletecallback.php
 	 * @param callable $callback A function to be called
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setCompleteCallback($callback) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sets an arbitrary string to provide application context that can later be retrieved by GearmanClient::context().
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setcontext.php
 	 * @param string $context Arbitrary context data
	 * @return bool Always returns TRUE.
	 */
	public function setContext($context) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets a function to be called when a task is received and queued by the Gearman job server. The callback should accept a single argument, a GearmanClient oject.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setcreatedcallback.php
 	 * @param string $callback A function to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setCreatedCallback($callback) {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sets some arbitrary application data that can later be retrieved by GearmanClient::data().
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setdata.php
 	 * @param string $data
	 * @return bool Always returns TRUE.
	 */
	public function setData($data) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sets the callback function for accepting data packets for a task. The callback function should take a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setdatacallback.php
 	 * @param callable $callback A function or method to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setDataCallback($callback) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Specifies a function to call when a worker for a task sends an exception.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setexceptioncallback.php
 	 * @param callable $callback Function to call when the worker throws an exception
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setExceptionCallback($callback) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets the callback function to be used when a task does not complete successfully. The function should accept a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setfailcallback.php
 	 * @param callable $callback A function to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setFailCallback($callback) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets one or more client options.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setoptions.php
 	 * @param int $options The options to be set
	 * @return bool Always returns TRUE.
	 */
	public function setOptions($options) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets a callback function used for getting updated status information from a worker. The function should accept a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setstatuscallback.php
 	 * @param callable $callback A function to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setStatusCallback($callback) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sets the timeout for socket I/O activity.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.settimeout.php
 	 * @param int $timeout An interval of time in milliseconds
	 * @return bool Always returns TRUE.
	 */
	public function setTimeout($timeout) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets a function to be called when a worker sends a warning. The callback should accept a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setwarningcallback.php
 	 * @param callable $callback A function to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setWarningCallback($callback) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets a function to be called when a worker needs to send back data prior to job completion. A worker can do this when it needs to send updates, send partial results, or flush data during long running jobs. The callback should accept a single argument, a GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.setworkloadcallback.php
 	 * @param callable $callback A function to call
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function setWorkloadCallback($callback) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Returns the timeout in milliseconds to wait for I/O activity.
	 *
	 * @link http://www.php.net/manual/en/gearmanclient.timeout.php
 	 * @return int Timeout in milliseconds to wait for I/O activity. A negative value means an infinite timeout.
	 */
	public function timeout() {}

}
