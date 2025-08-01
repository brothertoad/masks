#!/bin/bash

if [ $# -lt 1 ]; then
	echo Need least one image file.
	exit 1
fi

project=`basename $PWD`
echo PROJECT is $project

# We have enough info to create the index.php file, if needed.
indexphp="index.php"
if [ ! -f $indexphp ]; then
	echo sed s/PROJECT/$project/g < ../../../template/path-index.php > $indexphp
fi

for imgfile in "$@"; do
	imgname=`echo $imgfile | rev | cut -f2- -d. | rev`
	read imgw imgh < <(identify -format "%w %h" $imgfile)
	echo imgfile is $imgfile, imgname is $imgname, size is $imgw by $imgh
done
