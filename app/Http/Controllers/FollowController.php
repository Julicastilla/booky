<?php

namespace App\Http\Controllers;


use App\User;
use App\Follow;
use Illuminate\Support\Facades\Auth;


class FollowController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => User::where('id', '!=', Auth::id())->get()
        ]);
    }

    public function follow(User $user)
    {
        if (!Auth::user()->isFollowing($user->id)) {
            // Create a new follow instance for the authenticated user
            Auth::user()->follows()->create([
                'target_id' => $user->id,
            ]);

            return back()->with('success', 'You are now friends with '. $user->name);
        } else {
            return back()->with('error', 'You are already following this person');
        }

    }

    public function unfollow(User $user)
    {
        if (Auth::user()->isFollowing($user->id)) {
            $follow = Auth::user()->follows()->where('target_id', $user->id)->first();
            $follow->delete();

            return back()->with('success', 'You are no longer friends with '. $user->name);
        } else {
            return back()->with('error', 'You are not following this person');
        }
    }
}
