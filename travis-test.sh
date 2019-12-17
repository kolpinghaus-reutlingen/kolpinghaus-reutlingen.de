set -e


# htmlproofer
bundle exec htmlproofer  --check-html --check-img-http --enforce-https  --url-ignore "/localhost/" ./_site
