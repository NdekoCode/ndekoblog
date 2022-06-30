@include('layouts.partials.head')
<x-Header :title="$title ?? null" class="">
    {{-- Alert --}}
    @if (session('success'))
        <x-Alert type="success" :alert="session('success')">
        </x-Alert>
    @endif
    @if (session('danger') || session('errors'))
        <x-Alert :alert="session('danger') ?? session('errors')">
        </x-Alert>
    @endif
    @if (session('info'))
        <x-Alert type="info" :alert="session('info')">
        </x-Alert>
        @endif @if (session('warning'))
            <x-Alert type="warning" :alert="session('warning')">
            </x-Alert>
        @endif
</x-Header>
@yield('content')
<x-Footer></x-Footer>
