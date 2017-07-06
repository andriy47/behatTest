<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
 
/**
 * Features context.
 */


class FeatureContext  extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object. 
     */
    /**
    *@var array
    **/
    private $namesId;
    /**
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct()
    {
    $this->namesId = [
            "Acceso_Clientes" => "#home_acceso_clientes",
            "Con_usuario_actual_app" => "#my-app-user",
            "phoneNumber" => "phoneNumber",
            "password" => "password",
            "Iniciar_session" => "#authButton",
            "Cerrar" => "a[id^='popup_close_profileAdvice']",
        ];
    
    } 
    /**
     * @When I click the :arg1 element
     */
    public function iClickTheElement($selector)
    {
        $page = $this->getSession()->getPage();
        $element = $page->find('css', $this->namesId[$selector]);

        if (empty($element)) {
            throw new Exception("No html element found for the selector ('$selector')");
        }

        $element->click();
    }

    /**
     * @When I wait :arg1
     */
    public function iWait($arg1)
    {
         $this->getSession()->wait($arg1, "$('.suggestions-results').children().length > 0"); 
    }

    /**
    * @When I fill :arg1 with :arg2
    */
    public function iFillWhit($arg1, $arg2)
    {
        //throw new PendingException();
    } 
}
