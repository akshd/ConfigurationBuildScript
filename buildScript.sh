#!/bin/bash

file1="property.json"
file2="template.php"

cp $file2 newtemplate.php

arr1=()
regex="[##*##]"

while IFS= read line
do
        # display $line or do somthing with $line
	
	if [[ $line =~ $regex ]]; then 
		
		arr=($line)

		for i in ${arr[@]}; 
		do

			if [[ $i =~ $regex ]]; then

				str3=${i:0:-1}
				str1=${i:3}
			       	str1=${str1:0:-4}
				echo $str1
				str2=$(echo | jq .$str1 $file1)
				str4=$(echo "${str2//'"'}")				
				sed -i "s/$str3/'$str4'/g" newtemplate.php
				
			fi		
			
	       	done

	  fi	
done < "newtemplate.php"
