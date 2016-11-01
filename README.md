# CaptainHook

Just copy the two files (`commit-msg` and `pre-commit`) into the `.git/hooks` folder in your repository.

## commit-msg

This hooks validates the commit message by following [http://chris.beams.io/posts/git-commit/](these rules).

## pre-commit

This script requires different php tools to check your code.

### Required
- phpcs
- phpmd
- phpunit
