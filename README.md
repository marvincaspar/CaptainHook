# CaptainHook

CaptainHook is a package which adds git hooks to your project.

## Installation

To add this package to your project, run `composer require 
mc388/captainhook`. In your `composer.json` you need to add the setup 
script:

```
"scripts": {
  "post-install-cmd": [
    "MarvinCaspar\\CaptainHook\\Hooks::install"
  ],
  "post-update-cmd": [
    "MarvinCaspar\\CaptainHook\\Hooks::install"
   ]
},
```

## Hooks

### commit-msg

This hooks validates the commit message by following [
http://chris.beams.io/posts/git-commit/](these rules).

### pre-commit

This script requires different php tools to check your code.

#### Required
- phpcs
- phpmd
- phpunit
