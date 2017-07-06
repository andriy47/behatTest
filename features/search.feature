Feature: Search

	@javascript
	Scenario: Searching a home page mimovistar
		Given I am on "/newmimovistar/index/indexco" 
		When I wait "1500"

		When I click the "Acceso_Clientes" element 
		When I wait "3000"

		When I click the "Con_usuario_actual_app" element
		When I wait "1000"

		When I fill in "phoneNumber" with "662224002"
		When I fill in "password" with "mimovistar"
		When I wait "500"

		When I click the "Iniciar_session" element
		When I wait "10000"

		When I click the "Cerrar" element
		When I wait "5000"
		