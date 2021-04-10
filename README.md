# PHPStan autoload error example

This repository demonstrates a potential bug in PHPStan: custom autoloading
fails when an anonymous class definition has dependencies that need to be
autoloaded. `require_once` complains the file does not exist when it really
does, likely due to how PHPStan's `BetterReflection` intercepts stream read
calls.
