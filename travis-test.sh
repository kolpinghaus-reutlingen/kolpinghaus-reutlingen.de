set -e


# htmlproofer
bundle exec htmlproofer  --check-html --check-img-http --enforce-https  ./_site 
