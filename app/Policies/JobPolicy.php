<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{

	public function delete(User $user, Job $job): bool
	{
		return $this->update($user, $job);
	}

	public function update(User $user, Job $job): bool
	{
		return $this->edit($user, $job);
	}

	public function edit(User $user, Job $job): bool
	{
		return $job->employer->user->is($user);
	}

}
