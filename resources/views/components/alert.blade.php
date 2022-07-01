<div {{ $attributes }}>
    @if ($type === 'info')
        <div class="alert mt-3 flex flex-row items-center rounded border-b-2 border-blue-300 bg-blue-200 p-5">
            <div
                class="alert-icon flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-blue-500 bg-blue-100">
                <span class="text-blue-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title text-lg font-semibold text-blue-800">
                    Info
                </div>
                <div class="alert-description text-sm text-blue-600">
                    {{ $alert }}
                </div>
            </div>
        </div>
    @elseif($type === 'success')
        <div class="alert mt-3 flex flex-row items-center rounded border-b-2 border-green-300 bg-green-200 p-5">
            <div
                class="alert-icon flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-green-500 bg-green-100">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title text-lg font-semibold text-green-800">
                    Success
                </div>
                <div class="alert-description text-sm text-green-600">
                    {{ $alert }}
                </div>
            </div>
        </div>
    @elseif($type === 'warning')
        <div class="alert mt-3 flex flex-row items-center rounded border-b-2 border-yellow-300 bg-yellow-200 p-5">
            <div
                class="alert-icon flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-yellow-500 bg-yellow-100">
                <span class="text-yellow-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title text-lg font-semibold text-yellow-800">
                    Warning
                </div>
                <div class="alert-description text-sm text-yellow-600">
                    {{ $alert }}
                </div>
            </div>
        </div>
    @else
        <div class="alert mt-3 flex flex-row items-center rounded border-b-2 border-red-300 bg-red-200 p-5">
            <div
                class="alert-icon flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-red-500 bg-red-100">
                <span class="text-red-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title text-lg font-semibold text-red-800">
                    Error
                </div>
                <div class="alert-description text-sm text-red-600">
                    {{ $alert }}
                </div>
            </div>
        </div>
    @endif

</div>
