<?php
/**
 * GearmanJob class skeleton, for IDE auto completion.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @package Gearman
 */
/**
 *
 *
 * @link http://www.php.net/manual/en/class.gearmanjob.php
 */
class GearmanJob {
	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends result data and the complete status update for this job.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.complete.php
 	 * @param string $result Serialized result data.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function complete($result) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Creates a GearmanJob instance representing a job the worker is to complete.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.construct.php
 	 * @return  A GearmanJob object.
	 */
	public function __construct() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends data to the job server (and any listening clients) for this job.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.data.php
 	 * @param string $data Arbitrary serialized data.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function data($data) {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends the supplied exception when this job is running.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.exception.php
 	 * @param string $exception An exception description.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function exception($exception) {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends failure status for this job, indicating that the job failed in a known way (as opposed to failing due to a thrown exception).
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.fail.php
 	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function fail() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the function name for this job. This is the function the work will execute to perform the job.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.functionname.php
 	 * @return string The name of a function.
	 */
	public function functionName() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the opaque job handle assigned by the job server.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.handle.php
 	 * @return string An opaque job handle.
	 */
	public function handle() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the last return code issued by the job server.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.returncode.php
 	 * @return int A valid Gearman return code.
	 */
	public function returnCode() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends result data and the complete status update for this job.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.sendcomplete.php
 	 * @param string $result Serialized result data.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendComplete($result) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends data to the job server (and any listening clients) for this job.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.senddata.php
 	 * @param string $data Arbitrary serialized data.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendData($data) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends the supplied exception when this job is running.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.sendexception.php
 	 * @param string $exception An exception description.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendException($exception) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends failure status for this job, indicating that the job failed in a known way (as opposed to failing due to a thrown exception).
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.sendfail.php
 	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendFail() {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends status information to the job server and any listening clients. Use this to specify what percentage of the job has been completed.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.sendstatus.php
 	 * @param int $numerator The numerator of the precentage completed expressed as a fraction.
	 * @param int $denominator The denominator of the precentage completed expressed as a fraction.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendStatus($numerator, $denominator) {}

	/**
	 * (PECL gearman >= 0.6.0)
	 * Sends a warning for this job while it is running.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.sendwarning.php
 	 * @param string $warning A warning messages.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function sendWarning($warning) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Sets the return value for this job, indicates how the job completed.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.setreturn.php
 	 * @param int $gearman_return_t A valid Gearman return value.
	 * @return bool Description...
	 */
	public function setReturn($gearman_return_t) {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends status information to the job server and any listening clients. Use this to specify what percentage of the job has been completed.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.status.php
 	 * @param int $numerator The numerator of the precentage completed expressed as a fraction.
	 * @param int $denominator The denominator of the precentage completed expressed as a fraction.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function status($numerator, $denominator) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the unique identifiter for this job. The identifier is assigned by the client.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.unique.php
 	 * @return string An opaque unique identifier.
	 */
	public function unique() {}

	/**
	 * (PECL gearman <= 0.5.0)
	 * Sends a warning for this job while it is running.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.warning.php
 	 * @param string $warning A warning messages.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 */
	public function warning($warning) {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the workload for the job. This is serialized data that is to be processed by the worker.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.workload.php
 	 * @return string Serialized data.
	 */
	public function workload() {}

	/**
	 * (PECL gearman >= 0.5.0)
	 * Returns the size of the job&#039;s work load (the data the worker is to process) in bytes.
	 *
	 * @link http://www.php.net/manual/en/gearmanjob.workloadsize.php
 	 * @return int The size in bytes.
	 */
	public function workloadSize() {}

}
