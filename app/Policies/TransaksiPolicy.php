<?php

namespace App\Policies;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransaksiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any transaksi.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_transaksi');
    }

    /**
     * Determine whether the user can view the transaksi.
     */
    public function view(User $user, Transaksi $transaksi): bool
    {
        return $user->can('view_transaksi');
    }

    /**
     * Determine whether the user can create transaksi.
     */
    public function create(User $user): bool
    {
        return $user->can('create_transaksi');
    }

    /**
     * Determine whether the user can update the transaksi.
     */
    public function update(User $user, Transaksi $transaksi): bool
    {
        return $user->can('update_transaksi');
    }

    /**
     * Determine whether the user can delete the transaksi.
     */
    public function delete(User $user, Transaksi $transaksi): bool
    {
        return $user->can('delete_transaksi');
    }

    /**
     * Determine whether the user can bulk delete transaksi.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_transaksi');
    }

    /**
     * Determine whether the user can permanently delete the transaksi.
     */
    public function forceDelete(User $user, Transaksi $transaksi): bool
    {
        return $user->can('force_delete_transaksi');
    }

    /**
     * Determine whether the user can permanently bulk delete transaksi.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_transaksi');
    }

    /**
     * Determine whether the user can restore the transaksi.
     */
    public function restore(User $user, Transaksi $transaksi): bool
    {
        return $user->can('restore_transaksi');
    }

    /**
     * Determine whether the user can bulk restore transaksi.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_transaksi');
    }

    /**
     * Determine whether the user can replicate the transaksi.
     */
    public function replicate(User $user, Transaksi $transaksi): bool
    {
        return $user->can('replicate_transaksi');
    }

    /**
     * Determine whether the user can reorder transaksi.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_transaksi');
    }
}
