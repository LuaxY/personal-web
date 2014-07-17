{% set data = {'title': title, 'page': block('page'), 'pagename': pagename, 'extra': extra} %}
{{ (data|json_encode())|raw }}