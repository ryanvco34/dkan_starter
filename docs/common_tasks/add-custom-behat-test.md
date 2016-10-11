# Add a Custom Behat Test
Sometimes a site will require a feature that will never be part of the upstream product.  In these cases you will need to add a site specific behat tests to your site repo. This page documents how to do that.
## Step-by-step guide
1. Add any new feature tests to the config/tests/features folder.
2. If a new context that cannot be merged into nucivic/dkanextension is needed, add it to the config/tests/feature/bootstrap folder (see example in info block below).
3. If a new context was added in above step, edit config/tests/behat.custom.yml and add new context entry to the contexts: field. (see example in the info block below).

### Directory structure for custom tests:
```
config/tests/features/
|-- bootstrap
|   |-- CustomContext.php
|   |-- FeatureContext.php
|-- custom.feature
```
### Example Test: 

 ```
config/tests/features/custom.feature
 
Feature: Custom Example
  @api
  Scenario: See custom about page
    Given I am on the homepage
    When I click "Datasets"
    Then I should see "Content Types"
 ```
