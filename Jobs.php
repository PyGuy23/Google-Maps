<?php

class Jobs
{

	public $job_id;
	public $job_token;
	public $job_session;
	public $sessions = false;


	const FUNCTION_STATE_OK = 0;
	const FUNCTION_STATE_CANCELLED = 1;
	const FUNCTION_STATE_FAILED = 2;

	protected function jobScheduler()
	{
		$this->job_id += 1;
		$this->job_token;
		$this->job_session;
		$this->sessions;

	}

	final function getCurrentJobs()
	{
		return $this->job_id;
		return $this->job_token;
		return $this->job_session;
	}

	final function endSession()
	{
		return $sessions;

	}

	final function checkFunctionStates()
	{
		echo "job states have changed {$this->job_id}";
		echo "job tokens were changed upon generation: {$this->job_session}";
		echo "the session has ended: {$this->session}";

	}

	$job = new Job;
	$job->jobScheduler();
	$job->getCurrentjobs();
	$job->endSession();
	$job->checkFunctionStates();
}


?>