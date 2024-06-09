@if (config('app.debug'))
    <div class="alert alert-warning">
        <div class="row">
            @if (request()->route())
                <div class="col-md-4">
                    <strong>View Name:</strong> {{ str_replace('.', '/', request()->route()->getName()) }}
                </div>
            @endif
            @if (Route::current() != null && Route::current()->controller != null)
                <div class="col-md-4">
                    <strong>Controller:</strong> {{ get_class(Route::current()->controller) }}
                </div>
            @endif
            <div class="col-md-4">
                <strong>Controller Method:</strong> {{ class_basename(Str::after(Route::currentRouteAction(), '@')) }}
            </div>
        </div>
    </div>
@endif
