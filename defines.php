<?php
/**
 * Gearman defines.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @package Gearman
 */
/**
 * Whatever action was taken was successful.
 */
define('GEARMAN_SUCCESS', 0);
/**
 * When in non-blocking mode, an event is hit that would have blocked.
 */
define('GEARMAN_IO_WAIT', 1);
/**
 * A system error. Check GearmanClient::errno() or GearmanWorker::errno() for the system error code that was returned.
 */
define('GEARMAN_ERRNO', 4);
/**
 * GearmanClient::wait() or GearmanWorker() was called with no connections.
 */
define('GEARMAN_NO_ACTIVE_FDS', 7);
/**
 * Indicates something going very wrong in gearmand. Applies only to GearmanWorker.
 */
define('GEARMAN_UNEXPECTED_PACKET', 11);
/**
 * DNS resolution failed (invalid host, port, etc).
 */
define('GEARMAN_GETADDRINFO', 12);
/**
 * Did not call GearmanClient::addServer() before submitting jobs or tasks.
 */
define('GEARMAN_NO_SERVERS', 13);
/**
 * Lost a connection during a request.
 */
define('GEARMAN_LOST_CONNECTION', 14);
/**
 * Memory allocation failed (ran out of memory).
 */
define('GEARMAN_MEMORY_ALLOCATION_FAILURE', 15);
/**
 * Something went wrong in the Gearman server and it could not handle the request gracefully.
 */
define('GEARMAN_SERVER_ERROR', 18);
/**
 * Notice return code obtained with GearmanClient::returnCode() when using GearmanClient::do(). Sent to update the client with data from a running job. A worker uses this when it needs to send updates, send partial results, or flush data during long running jobs.
 */
define('GEARMAN_WORK_DATA', 20);
/**
 * Notice return code obtained with GearmanClient::returnCode() when using GearmanClient::do(). Updates the client with a warning. The behavior is just like GEARMAN_WORK_DATA, but should be treated as a warning instead of normal response data.
 */
define('GEARMAN_WORK_WARNING', 21);
/**
 * Notice return code obtained with GearmanClient::returnCode() when using GearmanClient::do(). Sent to update the status of a long running job. Use GearmanClient::doStatus() to obtain the percentage complete of the task.
 */
define('GEARMAN_WORK_STATUS', 22);
/**
 * Notice return code obtained with GearmanClient::returnCode() when using GearmanClient::do(). Indicates that a job failed with a given exception.
 */
define('GEARMAN_WORK_EXCEPTION', 23);
/**
 * Notice return code obtained with GearmanClient::returnCode() when using GearmanClient::do(). Indicates that the job failed.
 */
define('GEARMAN_WORK_FAIL', 24);
/**
 * Failed to connect to servers.
 */
define('GEARMAN_COULD_NOT_CONNECT', 26);
/**
 * Trying to register a function name of NULL or using the callback interface without specifying callbacks.
 */
define('GEARMAN_INVALID_FUNCTION_NAME', 31);
/**
 * Trying to register a function with a NULL callback function.
 */
define('GEARMAN_INVALID_WORKER_FUNCTION', 32);
/**
 * When a worker gets a job for a function it did not register.
 */
define('GEARMAN_NO_REGISTERED_FUNCTIONS', 34);
/**
 * For a non-blocking worker, when GearmanWorker::work() does not have any active jobs.
 */
define('GEARMAN_NO_JOBS', 35);
/**
 * After GearmanClient::echo() or GearmanWorker::echo() the data returned doesn't match the data sent.
 */
define('GEARMAN_ECHO_DATA_CORRUPTION', 36);
/**
 * When the client opted to stream the workload of a task, but did not specify a workload callback function.
 */
define('GEARMAN_NEED_WORKLOAD_FN', 37);
/**
 * For the non-blocking client task interface, can be returned from the task callback to "pause" the call and return from GearmanClient::runTasks(). Call GearmanClient::runTasks() again to continue.
 */
define('GEARMAN_PAUSE', 38);
/**
 * Internal client/worker state error.
 */
define('GEARMAN_UNKNOWN_STATE', 39);
/**
 * Internal error: trying to flush more data in one atomic chunk than is possible due to hard-coded buffer sizes.
 */
define('GEARMAN_SEND_BUFFER_TOO_SMALL', 44);
/**
 * Hit the timeout limit set by the client/worker.
 */
define('GEARMAN_TIMEOUT', 47);
/**
 * Run the client in a non-blocking mode.
 */
define('GEARMAN_CLIENT_NON_BLOCKING', 2);
/**
 * Allow the client to read data in chunks rather than have the library buffer the entire data result and pass that back.
 */
define('GEARMAN_CLIENT_UNBUFFERED_RESULT', 8);
/**
 * Automatically free task objects once they are complete. This is the default setting in this extension to prevent memory leaks.
 */
define('GEARMAN_CLIENT_FREE_TASKS', 32);
/**
 * Run the worker in non-blocking mode.
 */
define('GEARMAN_WORKER_NON_BLOCKING', 2);
/**
 * Return the client assigned unique ID in addition to the job handle.
 */
define('GEARMAN_WORKER_GRAB_UNIQ', 128);
