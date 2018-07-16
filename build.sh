#!/bin/sh
# build.sh - PHP to static file generator
DEST="./public"

# Run PHP on folders and output HTML ready for static hosting
find . -maxdepth 1 -type d \( -name '*-????' -o -name sample \) | sed 's/.\///' | \
while read x; do \
    mkdir -p "$DEST/$x/" && cd "$x" && php index.php > "../$DEST/$x/index.html" && cd ../ && \
    echo "Processed $x" ; \
done
