{% set data = {'title': title, 'page': block('page'), 'pagename': pagename} %}
{{ (data|json_encode())|raw }}