<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">
            Home
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">
            Explore
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">
            Notification
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">
            Messages
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">
            Lists
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ auth()->user()->ProfilePath() }}">
            Profile
        </a>
    </li>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="font-bold text-lg mb-4">
                Logout
            </button>
        </form>
    </li>
</ul>