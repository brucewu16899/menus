<?php namespace Pingpong\Menus\Presenters\Bootstrap;

class NavPillsPresenter extends NavbarPresenter
{
	public function getOpenTagWrapper()
	{
		return  PHP_EOL . '<ul class="nav nav-pills">' . PHP_EOL;
	}
}