# Changelog

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 11.0.0 (27 Jun 2024)

Features:

* `Collection` A Collection class, similar to the Laravel Collection but simpler.
* `Mailer` A Mailer class that implements the `Illuminate\Mail\Mailer` with lots of helper methods.
* `Validator` A Validation class that allows you to define different rules for different scenarios throughout your
  application.
* `ContainerTrait` Common methods and properties for accessing the Laravel IoC.
* `MailerTrait` Common methods and properties for sending emails.
* `ValidatorTrait` Common methods and properties for doing validation.
* `EventTrait` Common methods and properties for dispatching events.
* `RepositoryTrait` Common methods and properties for use across repositories.