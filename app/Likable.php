<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 10/16/20
 * Time: 10:44 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, SUM(liked) likes, SUM(!liked) dislikes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($user = null, $liked = true)
    {
        return $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()],
            ['liked' => $liked]
        );
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $this->likes()->where('user_id', $user->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $this->likes()->where('user_id', $user->id)->where('liked', false)->count();
    }

}