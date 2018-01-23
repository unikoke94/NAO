<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\SingleArticleHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\SingleArticleHandler.php';

return $this->privates['App\Services\SingleArticleHandler'] = new \App\Services\SingleArticleHandler(($this->privates['App\Services\SubscribeDataGenerator\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['form.factory'] ?? $this->load(__DIR__.'/getForm_FactoryService.php')), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));