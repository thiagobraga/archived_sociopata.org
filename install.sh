# MySQL
mysql -uroot -p"s0cio.br4g4,pa55" -e "source ./db/schema.sql" -v -t --default-character-set=utf8
mysql -uroot -p"s0cio.br4g4,pa55" -e "source ./db/data.sql" -v -t --default-character-set=utf8

# Install node.js modules from package.json
npm install --save-dev

# Install bower components
bower install --save

# Run gulp
gulp
