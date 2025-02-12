<?php

namespace App\Policies;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdukPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any produk.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_produk');
    }

    /**
     * Determine whether the user can view the produk.
     */
    public function view(User $user, Produk $produk): bool
    {
        return $user->can('view_produk');
    }

    /**
     * Determine whether the user can create produk.
     */
    public function create(User $user): bool
    {
        return $user->can('create_produk');
    }

    /**
     * Determine whether the user can update the produk.
     */
    public function update(User $user, Produk $produk): bool
    {
        return $user->can('update_produk');
    }

    /**
     * Determine whether the user can delete the produk.
     */
    public function delete(User $user, Produk $produk): bool
    {
        return $user->can('delete_produk');
    }

    /**
     * Determine whether the user can bulk delete produk.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_produk');
    }

    /**
     * Determine whether the user can permanently delete the produk.
     */
    public function forceDelete(User $user, Produk $produk): bool
    {
        return $user->can('force_delete_produk');
    }

    /**
     * Determine whether the user can permanently bulk delete produk.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_produk');
    }

    /**
     * Determine whether the user can restore the produk.
     */
    public function restore(User $user, Produk $produk): bool
    {
        return $user->can('restore_produk');
    }

    /**
     * Determine whether the user can bulk restore produk.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_produk');
    }

    /**
     * Determine whether the user can replicate the produk.
     */
    public function replicate(User $user, Produk $produk): bool
    {
        return $user->can('replicate_produk');
    }

    /**
     * Determine whether the user can reorder produk.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_produk');
    }
}
