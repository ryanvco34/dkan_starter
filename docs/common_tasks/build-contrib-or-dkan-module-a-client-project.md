# Build a "Contributed" or "DKAN" Module in a Client Project
## Workflow
The best workflow for this is to:

1. **Add the module:** as if it was just another "contributed" module: Add a contributed module
  1. Once this is done a link to the module should exist in **custom.make.**
2. **Delete the module: in docroot/sites/all/modules/contrib**
3. **Clone the module:** from the upstream repo into **docroot/sites/all/modules/contrib**
4. **Commit local changes:** to the contributed module
  1. DO NOT commit local changes to the client repo
5. **Push to the client repo**
  1. update the link to custom.make
    1. When you are ready to reflect that local changes in the client repo update the reference in custom.make
  2. run **ahoy build custom**
    1. Changes should then appear in the module in **docroot/sites/all/modules/contrib**
    
## Example 
Lets say you are working on a module which adds [hover-bear](http://fakeplus.com/pictures/jpg/-hover-bear_20120503062245.jpg) functionality to a client project and the module lives at http://github.com/nucivic/dkan_hover_bears.

1. **Add the module**
  1. The **custom.make** file should include: 
    ```
    projects[dkan_dkan_hover_bears][type] = module
    projects[dkan_dkan_hover_bears][download][type] = git 
    projects[dkan_dkan_hover_bears][download][url] = https://github.com/NuCivic/dkan_dkan_hover_bears.git
    projects[dkan_dkan_hover_bears][download][revision] = 0c57133a4fb8c26cd03ee7607ebd7f983b853b8c
    ```
  2. Note the **revision**. You can include branch during development but it is safer to use a commit. Using the a branch look like:
    ```
    projects[dkan_dkan_hover_bears][type] = module
    projects[dkan_dkan_hover_bears][download][type] = git
    projects[dkan_dkan_hover_bears][download][url] = https://github.com/NuCivic/dkan_dkan_hover_bears.git
    projects[dkan_dkan_hover_bears][download][branch] = civic-12311-hover-bear-stare
    ```
