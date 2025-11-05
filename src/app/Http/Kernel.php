protected $middlewareGroups = [
    'api' => [
        \App\Http\Middleware\RequestTracker::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
