<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_zeni extends Theme
{
    public $name			= 'Zeni';
    public $author			= '';
    public $author_website	= '';
    public $website			= '';
    public $description		= 'An HTML5 base template filled with goodies to get you up and running quickly.';
    public $version			= '1.0.0';
	public $options 		= array(
			'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */