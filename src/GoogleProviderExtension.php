<?php namespace Anomaly\GoogleProviderExtension;

use Anomaly\GoogleProviderExtension\Command\MakeGoogleAccessToken;
use Anomaly\GoogleProviderExtension\Command\MakeGoogleProvider;
use Anomaly\SocialModule\Provider\ProviderExtension;
use League\OAuth2\Client\Provider\AbstractProvider;

/**
 * Class GoogleProviderExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\GoogleProviderExtension
 */
class GoogleProviderExtension extends ProviderExtension
{

    /**
     * This extension provides the google
     * oauth provider for the API module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.social::provider.google';

}
