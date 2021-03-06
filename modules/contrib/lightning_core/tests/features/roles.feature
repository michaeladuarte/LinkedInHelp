@lightning @core @api @orca_public
Feature: User roles and related config

  @394cee8a
  Scenario: Administrator Role select list should be present in Account Settings
    Given I am logged in as an administrator
    When I visit "/admin/config/people/accounts"
    Then I should see "This role will be automatically assigned new permissions whenever a module is enabled."

  @4fde82a9
  Scenario: Describing a role
    Given I am logged in as a user with the "access administration pages, administer users, administer permissions" permissions
    When I visit "/admin/people/roles/add"
    And I enter "Foobaz" for "Role name"
    And I enter "foobaz" for "id"
    And I enter "I am godd here" for "Description"
    And I press "Save"
    And I visit "/user"
    And I click "Edit"
    And I press "Save"
    Then I should see "I am godd here"
    # Clean up.
    And I visit "/admin/people/roles/manage/foobaz/delete"
    And I press "Delete"
