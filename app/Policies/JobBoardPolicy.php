<?php

namespace App\Policies;

use App\Models\JobBoard;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobBoardPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, JobBoard $jobBoard): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, JobBoard $jobBoard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, JobBoard $jobBoard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, JobBoard $jobBoard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, JobBoard $jobBoard): bool
    {
        return false;
    }

    public function apply(User $user, JobBoard $job): bool
    {
        return false;
    }
}
