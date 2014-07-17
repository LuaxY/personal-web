{% set data = {'title': title, 'page': block('page'), 'pagename': pagename, 'url': url, 'extra': extra} %}
{{ (data|json_encode())|raw }}