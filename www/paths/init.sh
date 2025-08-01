#!/bin/bash

if [ $# -lt 1 ]; then
	echo Need least one image file.
	exit 1
fi

project=`basename $PWD`
# echo PROJECT is $project

# We have enough info to create the index.php file, if needed.
indexphp="index.php"
if [ ! -f $indexphp ]; then
	sed s/PROJECT/$project/g < ../../../template/path-index.php > $indexphp
fi

transform() {
	template=$1
	target=$2
	if [ -f "$target" ]; then
		echo $target exists, not overwriting
	else
		sed s/PROJECT/$project/g < ../../../template/$template | \
			sed s/IMGNAME/$imgname/g | sed s/IMGFILE/$imgfile/g | \
			sed s/IMGW/$imgw/g | sed s/IMGH/$imgh/g > "$target"
	fi
}

for imgfile in "$@"; do
	imgname=`echo $imgfile | rev | cut -f2- -d. | rev`
	phpname="$imgname.php"
	cssname="$imgname.css"
	read imgw imgh < <(identify -format "%w %h" $imgfile)
	# echo imgfile is $imgfile, imgname is $imgname, size is $imgw by $imgh
	transform path.php $phpname
	transform path.css $cssname
done
