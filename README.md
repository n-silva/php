# php
PHP script pdftotext - Linux sample

# Dependecies 
pdftotext installed 
# Install pdftotext under RedHat / RHEL / Fedora / CentOS Linux
pdftotext is installed using poppler-utils package under various Linux distributions:
#yum install poppler-utils

# OR use the following under Debian / Ubuntu Linux
$ sudo apt-get install poppler-utils

# pdftotext syntax
pdftotext {PDF-file} {text-file}

# HOW DO I CONVERT A PDF TO TEXT?
Convert a pdf file called hp-manual.pdf to hp-manual.txt, enter:
$ pdftotext hp-manual.pdf hp-manual.txt

Specifies the first page 5 and last page 10 (select 5 to 10 pages) to convert, enter:
$ pdftotext -f 5 -l 10 hp-manual.pdf hp-manual.txt

Convert a pdf file protected and encrypted by owner password:
$ pdftotext -opw 'password' hp-manual.pdf hp-manual.txt

Convert a pdf file protected and encrypted by user password:
$ pdftotext -upw 'password' hp-manual.pdf hp-manual.txt

Sets the end-of-line convention to use for text output. You can set it to unix, dos or mac. For UNIX / Linux oses, enter:
$ pdftotext -eol unix hp-manual.pdf hp-manual.txt
