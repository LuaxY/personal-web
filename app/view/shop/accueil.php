{% extends 'layout/default.php' %}

{% block content %}
{% for p in products %}
<div class="item">
	<div class="shell">
		<div class="header">
			<span class="icon">&nbsp;</span>
			<h3>{{ p.name }}</h3>
			<a href="{{ url('shop/products/' ~ p.slug) }}" class="details">voir détails</a>
		</div>
		<a href="{{ url('shop/products/' ~ p.slug) }}" class="preview-image">
			<img src="{{ asset('images/products/' ~ p.image) }}" alt="{{ p.name }}" />
		</a>
		<div class="footer {{ shopState(p.state, p.quantity, 0) }}">
			<p class="purchasable">{{ shopState(p.state, p.quantity, 1) }}</p>
			<a href="{{ url('shop/products/' ~ p.slug) }}" class="btn-add">Ajouter au panier</a>
			<p class="price"><span>€</span>{{ p.price }}</p>
		</div>
	</div>
</div>
{% endfor %}
{% endblock %}