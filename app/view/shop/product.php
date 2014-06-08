{% extends 'layout/default.php' %}

{% block content %}
<div class="product">
    <div class="left-col">
        <div class="shell">
            <div class="images">
                <img src="{{ asset('images/products/' ~ p.image) }}" />
            </div>
            {{ bbcode(p.description) }}
        </div>
    </div> <!-- /left-col -->

    <div class="right-col">
        <p id="price"><span>€</span>{{ p.price }}</p>
        <div id="puchase-form">
            <form action="/shop/add" method="post" id="cart_post">
                <input type="hidden" name="product" value="{{ p.slug }}" />
                <input type="submit" value="Ajouter au panier" id="btn-add" />
            </form>
        </div>

        <div class="description">
            {{ bbcode(p.description) }}
        </div>
    </div> <!-- /right-col -->
</div>
{% endblock %}