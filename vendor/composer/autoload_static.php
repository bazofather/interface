<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9362ef5588bf20ead4a5ce4df4fef6c9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\HttpClient\\' => 29,
            'Symfony\\Component\\HttpClient\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'B' => 
        array (
            'Bazofather\\Interfaces\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client-contracts',
        ),
        'Symfony\\Component\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Bazofather\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Bazofather\\Interfaces\\Services\\HttpRequest' => __DIR__ . '/../..' . '/src/Services/HttpRequest.php',
        'Bazofather\\Interfaces\\php\\BazofatherBase' => __DIR__ . '/../..' . '/src/php/BazofatherBase.php',
        'Bazofather\\Interfaces\\php\\BazofatherInterface' => __DIR__ . '/../..' . '/src/php/BazofatherInterface.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'Symfony\\Component\\HttpClient\\AmpHttpClient' => __DIR__ . '/..' . '/symfony/http-client/AmpHttpClient.php',
        'Symfony\\Component\\HttpClient\\AsyncDecoratorTrait' => __DIR__ . '/..' . '/symfony/http-client/AsyncDecoratorTrait.php',
        'Symfony\\Component\\HttpClient\\CachingHttpClient' => __DIR__ . '/..' . '/symfony/http-client/CachingHttpClient.php',
        'Symfony\\Component\\HttpClient\\Chunk\\DataChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/DataChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\ErrorChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/ErrorChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\FirstChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/FirstChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\InformationalChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/InformationalChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\LastChunk' => __DIR__ . '/..' . '/symfony/http-client/Chunk/LastChunk.php',
        'Symfony\\Component\\HttpClient\\Chunk\\ServerSentEvent' => __DIR__ . '/..' . '/symfony/http-client/Chunk/ServerSentEvent.php',
        'Symfony\\Component\\HttpClient\\CurlHttpClient' => __DIR__ . '/..' . '/symfony/http-client/CurlHttpClient.php',
        'Symfony\\Component\\HttpClient\\DataCollector\\HttpClientDataCollector' => __DIR__ . '/..' . '/symfony/http-client/DataCollector/HttpClientDataCollector.php',
        'Symfony\\Component\\HttpClient\\DecoratorTrait' => __DIR__ . '/..' . '/symfony/http-client/DecoratorTrait.php',
        'Symfony\\Component\\HttpClient\\DependencyInjection\\HttpClientPass' => __DIR__ . '/..' . '/symfony/http-client/DependencyInjection/HttpClientPass.php',
        'Symfony\\Component\\HttpClient\\EventSourceHttpClient' => __DIR__ . '/..' . '/symfony/http-client/EventSourceHttpClient.php',
        'Symfony\\Component\\HttpClient\\Exception\\ClientException' => __DIR__ . '/..' . '/symfony/http-client/Exception/ClientException.php',
        'Symfony\\Component\\HttpClient\\Exception\\EventSourceException' => __DIR__ . '/..' . '/symfony/http-client/Exception/EventSourceException.php',
        'Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait' => __DIR__ . '/..' . '/symfony/http-client/Exception/HttpExceptionTrait.php',
        'Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/http-client/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\HttpClient\\Exception\\JsonException' => __DIR__ . '/..' . '/symfony/http-client/Exception/JsonException.php',
        'Symfony\\Component\\HttpClient\\Exception\\RedirectionException' => __DIR__ . '/..' . '/symfony/http-client/Exception/RedirectionException.php',
        'Symfony\\Component\\HttpClient\\Exception\\ServerException' => __DIR__ . '/..' . '/symfony/http-client/Exception/ServerException.php',
        'Symfony\\Component\\HttpClient\\Exception\\TimeoutException' => __DIR__ . '/..' . '/symfony/http-client/Exception/TimeoutException.php',
        'Symfony\\Component\\HttpClient\\Exception\\TransportException' => __DIR__ . '/..' . '/symfony/http-client/Exception/TransportException.php',
        'Symfony\\Component\\HttpClient\\HttpClient' => __DIR__ . '/..' . '/symfony/http-client/HttpClient.php',
        'Symfony\\Component\\HttpClient\\HttpClientTrait' => __DIR__ . '/..' . '/symfony/http-client/HttpClientTrait.php',
        'Symfony\\Component\\HttpClient\\HttpOptions' => __DIR__ . '/..' . '/symfony/http-client/HttpOptions.php',
        'Symfony\\Component\\HttpClient\\HttplugClient' => __DIR__ . '/..' . '/symfony/http-client/HttplugClient.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpBody' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpBody.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpListener' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpListener.php',
        'Symfony\\Component\\HttpClient\\Internal\\AmpResolver' => __DIR__ . '/..' . '/symfony/http-client/Internal/AmpResolver.php',
        'Symfony\\Component\\HttpClient\\Internal\\Canary' => __DIR__ . '/..' . '/symfony/http-client/Internal/Canary.php',
        'Symfony\\Component\\HttpClient\\Internal\\ClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/ClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\CurlClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/CurlClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\DnsCache' => __DIR__ . '/..' . '/symfony/http-client/Internal/DnsCache.php',
        'Symfony\\Component\\HttpClient\\Internal\\HttplugWaitLoop' => __DIR__ . '/..' . '/symfony/http-client/Internal/HttplugWaitLoop.php',
        'Symfony\\Component\\HttpClient\\Internal\\NativeClientState' => __DIR__ . '/..' . '/symfony/http-client/Internal/NativeClientState.php',
        'Symfony\\Component\\HttpClient\\Internal\\PushedResponse' => __DIR__ . '/..' . '/symfony/http-client/Internal/PushedResponse.php',
        'Symfony\\Component\\HttpClient\\MockHttpClient' => __DIR__ . '/..' . '/symfony/http-client/MockHttpClient.php',
        'Symfony\\Component\\HttpClient\\NativeHttpClient' => __DIR__ . '/..' . '/symfony/http-client/NativeHttpClient.php',
        'Symfony\\Component\\HttpClient\\NoPrivateNetworkHttpClient' => __DIR__ . '/..' . '/symfony/http-client/NoPrivateNetworkHttpClient.php',
        'Symfony\\Component\\HttpClient\\Psr18Client' => __DIR__ . '/..' . '/symfony/http-client/Psr18Client.php',
        'Symfony\\Component\\HttpClient\\Response\\AmpResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/AmpResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\AsyncContext' => __DIR__ . '/..' . '/symfony/http-client/Response/AsyncContext.php',
        'Symfony\\Component\\HttpClient\\Response\\AsyncResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/AsyncResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\CommonResponseTrait' => __DIR__ . '/..' . '/symfony/http-client/Response/CommonResponseTrait.php',
        'Symfony\\Component\\HttpClient\\Response\\CurlResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/CurlResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\HttplugPromise' => __DIR__ . '/..' . '/symfony/http-client/Response/HttplugPromise.php',
        'Symfony\\Component\\HttpClient\\Response\\MockResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/MockResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\NativeResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/NativeResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\ResponseStream' => __DIR__ . '/..' . '/symfony/http-client/Response/ResponseStream.php',
        'Symfony\\Component\\HttpClient\\Response\\StreamWrapper' => __DIR__ . '/..' . '/symfony/http-client/Response/StreamWrapper.php',
        'Symfony\\Component\\HttpClient\\Response\\StreamableInterface' => __DIR__ . '/..' . '/symfony/http-client/Response/StreamableInterface.php',
        'Symfony\\Component\\HttpClient\\Response\\TraceableResponse' => __DIR__ . '/..' . '/symfony/http-client/Response/TraceableResponse.php',
        'Symfony\\Component\\HttpClient\\Response\\TransportResponseTrait' => __DIR__ . '/..' . '/symfony/http-client/Response/TransportResponseTrait.php',
        'Symfony\\Component\\HttpClient\\Retry\\GenericRetryStrategy' => __DIR__ . '/..' . '/symfony/http-client/Retry/GenericRetryStrategy.php',
        'Symfony\\Component\\HttpClient\\Retry\\RetryStrategyInterface' => __DIR__ . '/..' . '/symfony/http-client/Retry/RetryStrategyInterface.php',
        'Symfony\\Component\\HttpClient\\RetryableHttpClient' => __DIR__ . '/..' . '/symfony/http-client/RetryableHttpClient.php',
        'Symfony\\Component\\HttpClient\\ScopingHttpClient' => __DIR__ . '/..' . '/symfony/http-client/ScopingHttpClient.php',
        'Symfony\\Component\\HttpClient\\TraceableHttpClient' => __DIR__ . '/..' . '/symfony/http-client/TraceableHttpClient.php',
        'Symfony\\Contracts\\HttpClient\\ChunkInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ChunkInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ClientExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/DecodingExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\HttpExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/HttpExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/RedirectionExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/ServerExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\TimeoutExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/TimeoutExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/Exception/TransportExceptionInterface.php',
        'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/HttpClientInterface.php',
        'Symfony\\Contracts\\HttpClient\\ResponseInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ResponseInterface.php',
        'Symfony\\Contracts\\HttpClient\\ResponseStreamInterface' => __DIR__ . '/..' . '/symfony/http-client-contracts/ResponseStreamInterface.php',
        'Symfony\\Contracts\\Service\\Attribute\\Required' => __DIR__ . '/..' . '/symfony/service-contracts/Attribute/Required.php',
        'Symfony\\Contracts\\Service\\Attribute\\SubscribedService' => __DIR__ . '/..' . '/symfony/service-contracts/Attribute/SubscribedService.php',
        'Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ResetInterface.php',
        'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceLocatorTrait.php',
        'Symfony\\Contracts\\Service\\ServiceProviderInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceProviderInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9362ef5588bf20ead4a5ce4df4fef6c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9362ef5588bf20ead4a5ce4df4fef6c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9362ef5588bf20ead4a5ce4df4fef6c9::$classMap;

        }, null, ClassLoader::class);
    }
}
