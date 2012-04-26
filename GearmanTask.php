<?php
/**
 * GearmanTask class skeleton, for IDE auto completion.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @package Gearman
 */
/**
 *
 *
 * @link http://www.php.net/manual/en/class.gearmantask.php
 */
class GearmanTask {
	/**
	 * (PECL gearman >= 0.5.0)
	 * Creates a GearmanTask instance representing a task to be submitted to a job server.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.construct.php
 	 * @return GearmanTask A GearmanTask object.
	 */
	public function __construct() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Returns a new GearmanTask object.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.create.php
 	 * @return GearmanTask A GearmanTask oject or FALSE on failure.
	 */
	public function create() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns data being returned for a task by a worker.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.data.php
 	 * @return string The serialized data, or FALSE if no data is present.
	 */
	public function data() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the size of the data being returned for a task.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.datasize.php
 	 * @return int The data size, or FALSE if there is no data.
	 */
	public function dataSize() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Returns the name of the function this task is associated with, i.e., the function the Gearman worker calls.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.functionname.php
 	 * @return string A function name.
	 */
	public function functionName() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Gets the status information for whether or not this task is known to the job server.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.isknown.php
 	 * @return bool TRUE if the task is known, FALSE otherwise.
	 */
	public function isKnown() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Indicates whether or not this task is currently running.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.isrunning.php
 	 * @return bool TRUE if the task is running, FALSE otherwise.
	 */
	public function isRunning() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the job handle for this task.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.jobhandle.php
 	 * @return string The opaque job handle.
	 */
	public function jobHandle() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 *
	 *
	 * @link http://www.php.net/manual/en/gearmantask.recvdata.php
 	 * @param int $data_len Length of data to be read.
	 * @return array An array whose first element is the length of data read and the second is the data buffer. Returns FALSE if the read failed.
	 */
	public function recvData($data_len) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the last Gearman return code for this task.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.returncode.php
 	 * @return int A valid Gearman return code.
	 */
	public function returnCode() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 *
	 *
	 * @link http://www.php.net/manual/en/gearmantask.senddata.php
 	 * @param string $data Data to send to the worker.
	 * @return int The length of data sent, or FALSE if the send failed.
	 */
	public function sendData($data) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 *
	 *
	 * @link http://www.php.net/manual/en/gearmantask.sendworkload.php
 	 * @param string $data Data to send to the worker.
	 * @return int The length of data sent, or FALSE if the send failed.
	 */
	public function sendWorkload($data) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the denominator of the percentage of the task that is complete expressed as a fraction.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.taskdenominator.php
 	 * @return int A number between 0 and 100, or FALSE if cannot be determined.
	 */
	public function taskDenominator() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the numerator of the percentage of the task that is complete expressed as a fraction.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.tasknumerator.php
 	 * @return int A number between 0 and 100, or FALSE if cannot be determined.
	 */
	public function taskNumerator() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Returns the unique identifier for this task. This is assigned by the GearmanClient, as opposed to the job handle which is set by the Gearman job server.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.unique.php
 	 * @return string The unique identifier, or FALSE if no identifier is assigned.
	 */
	public function unique() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Returns the unique identifier for this task. This is assigned by the GearmanClient, as opposed to the job handle which is set by the Gearman job server.
	 *
	 * @link http://www.php.net/manual/en/gearmantask.uuid.php
 	 * @return string The unique identifier, or FALSE if no identifier is assigned.
	 */
	public function uuid() {}

}
