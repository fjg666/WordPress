**Installation Guide**
1. Install Node JS
2. cd path/theme-directory/
3. npm install -g grunt-cli
4. npm init
5. npm install --save-dev grunt grunt-contrib-uglify grunt-contrib-cssmin grunt-contrib-watch grunt-contrib-less grunt-pot grunt-checktextdomain grunt-po2mo grunt-react grunt-babel babel-cli babel-preset-react babel-preset-es2015 babel-plugin-transform-react-jsx time-grunt

**if you have a problem on gettext**
brew install gettext
brew link --force gettext

**Run grunt - 2 ways**
A: grunt
B: grunt --csspath=../../uploads/your-wp-site-generated-css-path/

**Check and replace text domain and export language file**
grunt lan


Demo link:
http://demo.themeton.com/path

Download link:
https://themeforest.net/item/path