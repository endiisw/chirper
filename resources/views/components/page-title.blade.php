{{-- @if (isset($pretitle) or isset($title) or isset($actions) or isset($subtitle))
    @if (!empty($pretitle) or !empty($title) or !empty($actions) or !empty($subtitle))
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col">
                        @if (!empty($pretitle))
                            <div class="page-pretitle">
                                {{ $pretitle ?? 'Overview' }}
                            </div>
                        @endif

                        @if (!empty($title))
                            <h2 class="page-title">
                                {{ $title ?? 'Dashboard' }}
                            </h2>
                        @endif

                        @if (!empty($subtitle))
                            {{ $subtitle ?? '' }}
                        @endif
                    </div>

                    {{ $actions ?? '' }}
                </div>
            </div>
        </div>
    @endif
@endif --}}

@if (isset($pretitle) or isset($title) or isset($actions) or isset($subtitle))
    @if (!empty($pretitle) or !empty($title) or !empty($actions) or !empty($subtitle))
        <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
            @if (!empty($title))
                <h5>
                    {{ $title ?? 'Dashboard' }}
                </h5>
            @endif

            {{ $breadcrumb ?? '' }}
        </div>
    @endif
@endif
