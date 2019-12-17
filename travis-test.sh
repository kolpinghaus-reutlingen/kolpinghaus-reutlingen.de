set -e


# htmlproofer
bundle exec htmlproofer --assume-extension --enforce-https  ./_site --log-level :debug
