<?php

namespace School\Infrastructure\Provider;

use School\Domain\Category\Category;
use School\Domain\Category\CategoryService;
use School\Domain\Category\CategoryValidator;
use School\Infrastructure\Factory\FactoryProvider;
use School\Infrastructure\Persistence\RepositoryFactory;

class CategoryServiceProvider implements FactoryProvider
{
	public function getInstance()
	{
		$category = RepositoryFactory::create(Category::class);

		return new CategoryService($category, new CategoryValidator());
	}
}