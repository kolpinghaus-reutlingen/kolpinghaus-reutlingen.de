set -e


echo "deploying changes"

# check if it should be deployed
if [ -z "$TRAVIS_PULL_REQUEST" ]; then
  echo "except don't publish site for pull requests"
  exit 0
fi
if [ "$TRAVIS_BRANCH" != "master" ]; then
  echo "except we should only publish the master branch. stopping here"
  exit 0
fi

# pushing to github
echo
echo "pushing _site -----------------------------------------------"
echo
cd _site
git config --global user.name "Travis CI"
git config --global user.email travis-ci@5ls.de
git add -A
git status
git commit -m "travisbuild $TRAVIS_BUILD_NUMBER" -m "${TRAVIS_COMMIT_MESSAGE}"
git push $DEPLOY_REPO master:master
