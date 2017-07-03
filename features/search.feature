Feature: Search

	@javascript
	Scenario: Searching for a page that does exist
		Given I am on "/wiki/Main_Page"
		When I fill "search" with "Glory Driven Development"
		And I wait for the suggestion box to appear
		And I click the "searchButton" element
		Then I should see "Search results"