# MySQL
mysql -uroot -p"am0s r3c4d" -e "source ./db/schema.sql" -v -t --default-character-set=utf8
mysql -uroot -p"am0s r3c4d" -e "source ./db/data.sql" -v -t --default-character-set=utf8

# Install node.js modules from package.json
npm install --save-dev

# Install bower components
bower install --save

# Run gulp
gulp
