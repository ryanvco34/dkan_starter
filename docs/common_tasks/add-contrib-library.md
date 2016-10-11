# Add a contributed library

Whenever you want to add a library you need to guarantee two specific conditions:

1. The module needs to be added to the **codebase**
2. The module needs to be added to the project's **make file** so if the website gets rebuild (for instance when dkan get's updated), the module remains in the **codebase** and doesn't get deleted
 
Let's say, for instance, that we want to add the [Angular](https://github.com/angular/angular) module to the project. 


