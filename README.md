Step 1: Download the Bundle
----------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash

    $ composer require rmed19/twitter-api-bundle
```
This command requires you to have Composer installed globally, as explained
in the `installation chapter`_ of the Composer documentation.

Step 1: Enable the Bundle
--------------------

Then, enable the bundle by adding the following line in the ``app/AppKernel.php``
file of your project:

```php
<?php
    // app/AppKernel.php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // ...
                new Nm\TwitterApiBundle\NmTwitterApiBundle(),
            );
            // ...
        }
    }
```
Step 4: Configure your application's config.yml
--------------------

Below is the configuration necessary to use the NmTwitterApiBundle
in your application:

```yaml

    # app/config/config.yml
    nm_twitter_api:
        consumer_key: YOUR_CONSUMER_KEY
        consumer_secret: YOUR_CONSUMER_SECRET
        access_token: YOUR_ACCESS_TOKEN
        access_token_secret: YOUR_ACCESS_TOKEN_SECRET
```
Step 5: How to use :
--------------------
You should call the nm_twitter.manager service, this is an exemple on controller :

```php
<?php
    /**
     * @Route("/app/hometimeline", name="hometimeline")
     */
    public function indexAction()
    {
        $statuses = $this->get('nm_twitter.manager')->getStatuses();
        
        $data = $statuses->getHomeTimeline();
        
        return $this->render('AppBundle:Default:index.html.twig', array(
            'statuses' => $data
        ));
    }
```
