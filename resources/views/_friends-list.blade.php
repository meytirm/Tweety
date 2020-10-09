<h3 class="font-bold text-xl mb-5">Friends</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li>
        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm mb-5">
            <img src="https://api.adorable.io/avatars/25/abott@adorable.png"
                 alt=""
                 class="rounded-full mr-2">
            {{ $user->name }}
        </a>
    </li>
    @endforeach
</ul>