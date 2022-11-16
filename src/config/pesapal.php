<?php
return[
    //Please specify the environment pesapal is running on: production or sandbox

    'pesapal_env'=>env('PESAPAL_ENV'),


    /*
     * The application consumer key
     *
     */
    'consumer_key'=>env('PESAPAL_CONSUMER_KEY'),

    /*
     * The application consumer Secret
     */

    'consumer_secret'=>env('PESAPAL_CONSUMER_SECRET'),

    /*
     * It is a good practise to guard your routes. We will use
     * unique string to guard our callback and IPN Urls. Provide a random string to
     * to guard the endpoints
     */

    'pesapal_guard'=>env('PESAPAL_GUARD'),

    /*
     * After registering the IPN URL(s). LaravelPesapal provides an IPN ID.
     * Copy that ID and save in you .env file. For a transaction to go through
     * it must have an ipn_id
     */


    'pesapal_ipn_id'=>env('PESAPAL_IPN_ID')


];

