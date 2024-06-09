@if (config('app.debug'))
    @php
        $routeAction = Route::getRoutes()->getByName($routeName)->getActionName();
        $controllerWithNamespace = explode('@', $routeAction)[0];
        $method = explode('@', $routeAction)[1];
    @endphp

    <div class="alert alert-warning">
        <div>
            {{ $controllerWithNamespace }}
        </div>
        <div>
            {{ $method }}
        </div>
    </div>
@endif
