# simple-gitauto
Very simple git auto deploy , basic but works like a charm :)

REQUIREMENTS:
1. brain and ability to seach google
2. need to have exec permission for ur php files , if not ask ur hosting provider or google how to enable exec permission.

STEPS : 
1. upload these two files to your web hosting root folder
2. Clone repo in ur web hosting panel. this is hard but i will give u easy work around : clone repository in your local and upload all the fiels including .git folder and all (.*) folders
3. change secret token to some random character
4. PUBLIC REPO :
    if your repository is PUBLIC very good , you manage to solve most of problems.
   PRIVATE REPO :
    If you have private repository , u need to setup SSH key or use a Personal Access Token ,  for new guys Personal Access Token is easy.
   How to setup Access Token : Google it , i will leave a article link for example https://rebrand.ly/a5ce25
5. change paths in the files. remember its full path , if u have exec permission in ur php files use code below in a random file to find ur path
    <?php
       exec("full/path/to/deploy.sh", $output); 
       echo implode("<br>", $output);
   ?> 
   access ur file in browser and hopefully it will show you ur full path if not idk :( search google how to find full path of ur
7. access the file in ur browser by https://example.com/git.php?secret=yoursecrethere
8. if everything is good this should show in URL.
    Deployment successful.
    Already up to date.
9. both files have less than 25 files of code , just read it and figure rest urself.
10. now add https://example.com/git.php?secret=yoursecrethere url in ur repo's webhook to do so repo>setting>webhook add url , select application/json if getting problem disable ssl and update.

EVERYTHING GOOD TO GO , WHEN U PUSH UR FILES WILL BE UPDATED :D 
   
