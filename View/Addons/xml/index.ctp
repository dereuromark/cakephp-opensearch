<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
	<ShortName><?php echo h($addon['shortname']);?></ShortName>
	<Description><?php echo h($addon['description']);?></Description>
	<Image width="16" height="16" type="image/x-icon">http://<?php echo $_SERVER['HTTP_HOST'] ?>/favicon.ico</Image>

	<?php
	// Prepare url stuff

	$params = '';
	if (!empty($addon['params'])) {
		$params = "?";
		foreach ($addon['params'] as $k => $v) {
			$params .= $k.'='.$v.'&';
		}
	}
	if ($addon['search_var']) {
		$params[] = $addon['search_var'] . '=';
	}

	if ($params) {
		$params = '?' . implode('&', $params);
	}

	if (!$addon['url']) {
		$addon['url'] = HTTP_BASE;
	}

	$complete_url = $addon['url'] . $params;
	?>

	<Url type="text/html" template="<?php echo h($complete_url); ?>{searchTerms}"/>
</OpenSearchDescription>
