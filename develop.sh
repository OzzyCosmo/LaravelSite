#!/usr/bin/env bash

# Set environment variables for dev
export APP_ENV=${APP_ENV:-local}
export APP_PORT=${APP_PORT:-83}
export APP_DIR=${APP_DIR:-/var/www/}

APP="php"
COMPOSE="docker-compose"

# If we pass any arguments...
if [ $# -gt 0 ];then

    # If "art" is used, pass-thru to "artisan"
    # inside a new container
    if [ "$1" == "art" ]; then
        shift 1
        $COMPOSE run --rm \
            -w $APP_DIR \
            $APP \
            php artisan "$@"

    # If "composer" is used, pass-thru to "composer"
    # inside a new container
    elif [ "$1" == "composer" ]; then
        shift 1
        $COMPOSE run --rm \
            -w $APP_DIR \
            $APP \
            composer "$@"

    # If "test" is used, run unit tests,
    # pass-thru any extra arguments to php-unit
    elif [ "$1" == "test" ]; then
        shift 1
        $COMPOSE run --rm \
            -w $APP_DIR \
            $APP \
            ./vendor/bin/phpunit "$@"

    # If "node" is used, run command
    # from our node container
    elif [ "$1" == "node" ]; then
        shift 1
        $COMPOSE run --rm \

            -w $APP_DIR \
            node \
            "$@"

    # If "npm" is used, run npm
    # from our node container
    elif [ "$1" == "npm" ]; then
        shift 1
        $COMPOSE run --rm \
            -w $APP_DIR \
            -p 3000:3000 \
            node \
            npm "$@"

    # If "npx" is used, run npx
    # from our node container
    elif [ "$1" == "npx" ]; then
        shift 1
        $COMPOSE run --rm \
            -w $APP_DIR \
            node \
            npx "$@"

        # If "hot" is used, run npm run hot
    # from our node container
    elif [ "$1" == "hot" ]; then
        shift 1
        $COMPOSE run --rm \
            -p '8080:8080' \
            -w $APP_DIR \
            node \
            npm run hot

    # If "npm" is used, run npm
    # from our node container
    elif [ "$1" == "hot" ]; then
        shift 1
        $COMPOSE run --rm \
            -p 8080:8080 \
            -p 3000:3000 \
            -p 3001:3001 \
            -w $APP_DIR \
            node \
            npm run hot

    # If "bash" is used, run bash
    # from our php-apache container
    elif [ "$1" == "bash" ]; then
        shift 1
        $COMPOSE exec \
            $APP \
            bash

    # Else, pass-thru args to docker-compose
    else
        $COMPOSE "$@"
    fi

else
    $COMPOSE ps
fi