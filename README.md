# Slim-4-Slim-Skeleton-with-Twig-and-Monolog
Basic Starter Project in Slim 4 with Twig and Monolog in a sub directory of Project Root

Had struggled to find a convincing starter project in Slim 4 which used Twig and Monolog.
My need is to run a number of Slim 4 college projects in the same root folder sharing a single vendor folder.
I am using wamp server.
My folder tree is as follows:-
wamp64
        - www
              - other projects
              - other projects
              -slim3appfolder
                    - project
                    - project
                    - project
                    - vendor
                      composer.json
              -slim4appfolder
                    - project
                    - project
                    - project
                    - project
                    - vendor
                      composer.json
                      
I have set up a virtual host in apache with a local path of C:\wamp64\www\slim4appfolder\ and preview directly from within phpstorm using the firefoc web developer edition.

Hope this helps someone else who has laboured over this process.

Still don't have Twig being accessed from the container and haven't yet done much with middleware but it all now works as required and I have started building more complex applications.
