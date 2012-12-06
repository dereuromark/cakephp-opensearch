# Open Search Plugin
Create a nice web search that integrates into modern browsers (direct search using TAB).

See http://de.wikipedia.org/wiki/OpenSearch

CakePHP2.x

## Installation

1. Copy the plugin over to your App/Plugin/ directory or install using composer
1. Create appropriate table (cake console: `cake schema create OpenSearch.OpenSearch`)
1. Create an action for performing searches
1. Add at least one search type (via backend `admin/open_search/addons/` for example)
1. Use the helper to render appropriate installer links in the layout
1. Done / Profit

## TODO

Cleanup and more features from http://www.opensearch.org/

## Dependencies

My Tools Plugin for admin backend actions (optional, you can directly use Mysql, as well).

## Licence

MIT

Łukasz Korecki 2009
Mark Scherer 2012
