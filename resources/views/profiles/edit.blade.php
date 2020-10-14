@component('components.app')

    <form action="{{ $user->profilePath() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="name"
                   >
                name
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text" name="name" id="name" value="{{ $user->name }}" required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="username"
            >
                username
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text" name="username" id="username" value="{{ $user->username }}" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="avatar"
            >
                avatar
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="file" name="avatar" id="avatar">
            <img src="{{ $user->avatar }}"
                 alt=""
                 width="50"
                 class="rounded-full mr-2">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="email"
            >
                email
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text" name="email" id="email" value="{{ $user->email }}" required>

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password"
            >
                password
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password_confirmation"
            >
                password confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                submit
            </button>
        </div>
   </form>

@endcomponent