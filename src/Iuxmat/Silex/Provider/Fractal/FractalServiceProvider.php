<?php namespace Iuxmat\Silex\Provider\Fractal;


use Iuxmat\Silex\Provider\Fractal\Serializer\VoidSerializer;
use Silex\Application;
use Silex\ServiceProviderInterface;
use League\Fractal\Manager;

class FractalServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['fractal'] = $app->share(function () {

            $manager = new Manager();
            $manager->setSerializer(new VoidSerializer());

            return $manager;
        });
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {

    }
}
