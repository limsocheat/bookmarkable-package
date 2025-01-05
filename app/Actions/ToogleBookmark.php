<?php

namespace Packages\Bookmarkable\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Packages\Bookmarkable\Models\Bookmark;

class ToogleBookmark
{
    use AsAction;

    /**
     * Handle the action
     * 
     * @param mixed $user
     * @param mixed $bookmarkable
     * 
     * @return bool
     */
    public function handle(mixed $user, mixed $bookmarkable): bool
    {
        $bookmark = Bookmark::where('user_id', $user->id)
            ->where('user_type', $user->getMorphClass())
            ->where('bookmarkable_id', $bookmarkable->id)
            ->where('bookmarkable_type', $bookmarkable->getMorphClass())
            ->first();

        if ($bookmark) {
            $bookmark->delete();
            return false;
        }

        Bookmark::create([
            'user_id'           => $user->id,
            'user_type'         => $user->getMorphClass(),
            'bookmarkable_id'   => $bookmarkable->id,
            'bookmarkable_type' => $bookmarkable->getMorphClass(),
        ]);

        return true;
    }
}
