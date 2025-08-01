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
	sed s/PROJECT/$project/g < ../../../template/path-index.php > $indexphp
fi

for imgfile in "$@"; do
	imgname=`echo $imgfile | rev | cut -f2- -d. | rev`
	phpname="$imgname.php"
	cssname="$imgname.css"
	read imgw imgh < <(identify -format "%w %h" $imgfile)
	echo imgfile is $imgfile, imgname is $imgname, size is $imgw by $imgh
	if [ -f "$phpname" ]; then
		echo $phpname exists, not overwriting
	else
		sed s/PROJECT/$project/g < ../../../template/path.php | \
			sed s/IMGNAME/$imgname/g | sed s/IMGFILE/$imgfile/g | \
			sed s/IMGW/$imgw/g | sed s/IMGH/$imgh/g > "$phpname"
	fi
	if [ -f "$cssname" ]; then
		echo $cssname exists, not overwriting
	else
		sed s/PROJECT/$project/g < ../../../template/path.css | \
			sed s/IMGNAME/$imgname/g | sed s/IMGFILE/$imgfile/g | \
			sed s/IMGW/$imgw/g | sed s/IMGH/$imgh/g > "$cssname"
	fi
done
