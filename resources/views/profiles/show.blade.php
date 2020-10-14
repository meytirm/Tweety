@component('components.app')
    <header class="mb-6 relative">
        <img src="/image/banner.jpg" alt="" class="mb-2 rounded-lg">
        <img src="{{ $user->avatar }}"
             alt=""
             class="rounded-full mr-2 absolute"
             style="width: 150px; left: calc(50% - 75px); bottom: 90px;">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->profilePath('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">
                        Edit Profile
                    </a>
                @endcan
                @unless(auth()->user()->is($user))
                    <form action="{{  route('follow', $user->username) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                            {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
                        </button>
                    </form>
                @endunless
            </div>

        </div>
        <p class="text-sm">
            I need help! I'm getting the following login error and now can't login to app.

            "Missing required parameters for [Route: profile] [URI: profiles/{user}]. (View: /Users/jezf/Documents/jerrytemp/larasites/tweety/resources/views/_sidebar-links.blade.php)"

            I'm logged in via Brave browser, and 14mins into final video, and can app appears to be working. However, going in as private user (not logged in reveals issue).
        </p>
    </header>
    @include('_timeline', [
        'tweets' => $tweets
    ])
@endcomponent