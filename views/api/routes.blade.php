Route::resource('{{ $config->modelNames->dashedPlural }}', {{ $config->namespaces->apiController }}\{{ $config->modelNames->name }}APIController::class);