<div class="flex min-h-screen flex-col overflow-x-hidden bg-gray-100">
    <header {{ $attributes }}>
        <x-Navigation></x-Navigation>
    </header>
    <div class="container mx-auto">
        {{ $slot }}
    </div>
