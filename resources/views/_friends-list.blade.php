<h3 class="font-bold text-xl mb-5">Friends</h3>

<ul>
    @forelse(auth()->user()->follows as $user)
    <li>
        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm mb-5">
            <img src="{{ $user->avatar }}"
                 alt=""
                 width="50"
                 class="rounded-full mr-2">
            {{ $user->name }}
        </a>
    </li>
    @empty
          <li>No Friends Yet.</li>
    @endforelse
</ul>