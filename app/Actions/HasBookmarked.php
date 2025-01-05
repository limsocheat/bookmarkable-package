<?php

namespace Packages\Bookmarkable\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Packages\Bookmarkable\Models\Bookmark;

class HasBookmarked
{
    use AsAction;

    /**
     * handle the action
     * 
     * @param mixed $user
     * @param mixed $bookmarkable
     * 
     * @return bool
     */
    public function handle(mixed $user, mixed $bookmarkable): bool
    {
        return Bookmark::where('bookmarkable_id', $bookmarkable->id)
            ->where('bookmarkable_type', $bookmarkable->getMorphClass())
            ->where('user_id', $user->id)
            ->where('user_type', $user->getMorphClass())
            ->exists();
    }
}
