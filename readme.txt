SparkleFileManager v1.0
by Victoria of http://www.creamed-coconut.org
Support Forums: http://www.creamed-coconut.org/forum
Released 14 December 2004.
I would like to thank Web Designer Magazine (http://www.paragon.co.uk) for their tutorials which helped me to write this script.
_______________________________________________________

INTRO:

SparkleFileManager is a small open-source PHP script which allows you or your site visitors to upload files to your server via their web-browser.  Therefore it removes the need for using FTP to upload files.

REQUIREMENTS:

Your server must support PHP. Therefore, this script will not work on free servers such as Geocities, Angelfire, Freewebs etc.


AT-A-GLANCE FEATURES LIST:

* Ability to upload files via the browser
* Ability to view existing files within the specified directory
* Ability to delete existing files quickly and easily, via the browser
* A stylesheet has been included, to format the interface
* Easy to use interface.

INSTRUCTIONS FOR INSTALLATION AND USE:


1. Create a new directory on your server named 
"filemanager".  You can do this via an FTP program.

2. Open up the upload.php file in a text editor such as Notepad, and in the $uploaddir variable near the top of the page you need to enter the path to where your "files" directory will be (once you have uploaded it in step 3).
The path will probably look something like:
$uploaddir = "/home/sparkle1/public_html/filemanager/files/";

3.  Upload all contents of this zip file to your new 
"filemanager" directory, including the "img" and "files" folders. 

4. CHMOD the files directory (within the filemanager directory) to 777.  This means that all the Read, Write and Execute checkboxes should be ticked.  You should be able to do this in your FTP program too.

5. Now you are ready to start using your file manager.  Point your browser to the filemanager/index.php file to view the main menu of the program.

6.  If you want to add the file manager to an existing page on your site, you can use a PHP include statement as follows
<? include('filemanager/index.php'); ?>  


DEVELOPMENT:

Anyone is welcome to take part in the development of this open-source script.  Development work shall take place in the Creamed Coconut forums at http://creamed-coconut.org/forum/index.php.  Suggestions and problems should also be aired there.  The script can be modified and distributed, as long as the readme file and link remains intact.


 





