{% set data = {'webtitle': webtitle, 'pagetitle': title, 'page': block('page'), 'pagename': pagename, 'url': url, 'extra': extra} %}
{{ (data|json_encode())|raw }}