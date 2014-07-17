{% set data = {'title': title, 'page': block('page')} %}
{{ (data|json_encode())|raw }}