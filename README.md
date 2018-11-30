# Larasocial
Social Login Application Using Laravel socialite

## Supported Social Networks

1. Facebook
2. Twitter
3. Google
4. Linkedin
5. Github
6. Gitlab
7. Bitbucket

### Demo Link: [http://larasocialauth.herokuapp.com/login](http://larasocialauth.herokuapp.com/login)

## How to config

If you need to use one or more of the above services you need to create apps for each and every service you goning to use. 

(In the process you'll be asked to give 'auth_redirect_url'. It should be like this, if you're using google auth - <http://your.domain/login/google/callback>)

Then you will be given a CLIENT_ID and a CLIENT_SECRET keys. These keys should be placed in the .env file. (for example see .env.example file)

## How to Install

1. Clone this project.
2. run this command
    >composer require laravel/socialite
    >
3. In the providers array, of config/app.php add
    >Laravel\Socialite\SocialiteServiceProvider::class,

4. In the aliases array of the same file, add

    >‘Socialite’ => Laravel\Socialite\Facades\Socialite::class,

5. finally run this command to migrate tables

    >php artisan migrate
    >

#### Thats It, Happy to see your feedback, If something went wrong open an issue, 

### Happy Coding :D
