@component('components.master')
<section class="px-8">
    <main class="container mx-auto">
        <div class="flex justify-between">
            @if (auth()->check())
                <div class="w-1/6">
                    @include('_sidebar-links')
                </div>
            @endif
            <div class="flex-1 mx-10" style="max-width: 700px">
                {{ $slot }}
            </div>
            @if (auth()->check())
                <div class="w-1/6 ">
                    <div class="bg-blue-100 rounded-lg p-4 h-100">
                        @include('_friends-list')
                    </div>
                </div>
            @endif
        </div>
    </main>
</section>
@endcomponent