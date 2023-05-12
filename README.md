# Laravel Nova Issue 5527

Reproduction Repository for https://github.com/laravel/nova-issues/issues/5527

## Instructions

Prepare the project:

    composer install
    sail up -d
    sail art db:migrate --seed
    sail art nova:user

Login with the nova user and navigate to the Snowflake Examples resource.

The ID column and the Snowflake ID column should match as they have the same value in the database but they don't match.

![screenshot](https://github.com/nhaynes/nova-issue-5527/blob/main/resources/nova-issue-5527.png?raw=true)
