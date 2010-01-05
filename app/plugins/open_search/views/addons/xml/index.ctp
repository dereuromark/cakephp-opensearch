<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
	<ShortName><?php e($options['shortname']) ?></ShortName>
	<Description><?php e($options['description']) ?></Description>
	<InputEncoding>UTF-8</InputEncoding>
	<Image width="16" height="16" type="image/x-icon">http://<?php e($_SERVER['HTTP_HOST']) ?>/favicon.ico</Image>

	<?php
	// Prepare url stuff
	$params = "?";
	if(count($options['params'])>0) {
		foreach ($options['params'] as $k=>$v)
		{
			$params .= $k.'='.$v.'&';
		}
	}
	$complete_url = $options['url'].$params.$options['search_var'].'=';
	?>

	<Url type="text/html" template="<?php e(htmlentities($complete_url)) ?>{searchTerms}"/>
</OpenSearchDescription>
