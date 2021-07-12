#!/bin/sh
PHP_CS_FIXER_BIN=/usr/local/bin/phpcs
PHP_CS_FIXER_LEVEL=PSR2
PHP_CS_FIXER_PATTERN="\.(php)$"

FILES=$(git diff HEAD^..HEAD --stat)

if [ "$FILES" == "" ]; then
  echo '未检测到文件更新'
  exit 0
fi

for FILE in $FILES; do
  echo "$FILE" | egrep -q "$PHP_CS_FIXER_PATTERN"
  RET_VAL=$?
  if [ "$RET_VAL" -eq "0" ]; then

    PHP_CS_FIXER_LEVEL_OUTPUT=$($PHP_CS_FIXER_BIN --standard=$PHP_CS_FIXER_LEVEL "$FILE")
    PHP_CS_FIXER_LEVEL_VAL=$?

    if [ $PHP_CS_FIXER_LEVEL_VAL -ne 0 ]; then
      echo "$PHP_CS_FIXER_LEVEL_OUTPUT"
      exit 1
    fi
  fi
done
exit 0
