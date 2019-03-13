set -e


# clean_before
echo "cleaning _site folder"
if [ -d "_site" ]; then rm -Rf _site; fi
mkdir _site


# get_current_site
echo "getting latest site"
git clone --depth 1 $DEPLOY_REPO _site


# safe
echo 'safe'
if [ -d "../temp" ]; then rm -Rf ../temp; fi
mkdir ../temp
mv _site/README.md _site/.gitignore _site/.git ../temp/


# clean_after
echo "cleaning _site folder again"
rm -Rf _site/


# build_site
echo "building site"
JEKYLL_ENV=production bundle exec jekyll build --trace


# restore
echo 'restore'
mv ../temp/README.md ../temp/.gitignore ../temp/.git _site/
