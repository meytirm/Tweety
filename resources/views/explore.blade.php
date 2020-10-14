@component('components.app')
    <div>
        @foreach($users as $user)
            <a href="{{ $user->profilePath() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}" width="50" class="mr-4">

                <div>
                    <h4 class="font-bold">{{ '@'.$user->username }}</h4>
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
@endcomponent