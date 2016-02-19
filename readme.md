# LaraTemplate Scaffolding

This template was created for instant project starting with all common settings and components preconfigured,
including:
### Prod
- Old Form managing system: `{!! Form::open() !!}` etc.
- Carbon sugar: Jenssegers/Date
- column updating in migrations: Doctrine/Dbal
- HipChat integration: Hernandev/Hipchat-laravel

### Dev
- barryvdh/laravel-debugbar
- barryvdh/laravel-ide-helper

## Compatibility
Was originally created with Laravel v5.2.19

## Features
- Custom make:model command for using Jenssegers/Date in place of Carbon/Carbon
- Russian default lang with all related translations and settings
  - language, timezone in config/app.php
  - all translations if resources/lang
  - russian text in all resources/views

## Official Documentation
Documentation for the framework can be found on the Laravel website.

## License
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
