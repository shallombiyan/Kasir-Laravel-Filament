<?php

namespace App\Policies;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KategoriPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any kategori.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kategori');
    }

    /**
     * Determine whether the user can view the kategori.
     */
    public function view(User $user, Kategori $kategori): bool
    {
        return $user->can('view_kategori');
    }

    /**
     * Determine whether the user can create kategori.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kategori');
    }

    /**
     * Determine whether the user can update the kategori.
     */
    public function update(User $user, Kategori $kategori): bool
    {
        return $user->can('update_kategori');
    }

    /**
     * Determine whether the user can delete the kategori.
     */
    public function delete(User $user, Kategori $kategori): bool
    {
        return $user->can('delete_kategori');
    }

    /**
     * Determine whether the user can bulk delete kategori.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kategori');
    }

    /**
     * Determine whether the user can permanently delete the kategori.
     */
    public function forceDelete(User $user, Kategori $kategori): bool
    {
        return $user->can('force_delete_kategori');
    }

    /**
     * Determine whether the user can permanently bulk delete kategori.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kategori');
    }

    /**
     * Determine whether the user can restore the kategori.
     */
    public function restore(User $user, Kategori $kategori): bool
    {
        return $user->can('restore_kategori');
    }

    /**
     * Determine whether the user can bulk restore kategori.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kategori');
    }

    /**
     * Determine whether the user can replicate the kategori.
     */
    public function replicate(User $user, Kategori $kategori): bool
    {
        return $user->can('replicate_kategori');
    }

    /**
     * Determine whether the user can reorder kategori.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kategori');
    }
}
